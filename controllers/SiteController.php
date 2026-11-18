<?php

declare(strict_types=1);

namespace app\controllers;

use Yii;
use app\models\ContactForm;
use app\models\LoginForm;
use app\models\ExpertInquiry;
use yii\captcha\CaptchaAction;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\base\Security;
use yii\mail\MailerInterface;
use yii\web\Controller;
use yii\web\ErrorAction;
use yii\web\Response;

class SiteController extends Controller
{
    public function __construct(
        $id,
        $module,
        private readonly MailerInterface $mailer,
        private readonly Security $security,
        $config = [],
    ) {
        parent::__construct($id, $module, $config);
    }

    /**
     * {@inheritdoc}
     */
    public function behaviors(): array
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout', 'admin', 'update-inquiry-status'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        'actions' => ['admin', 'update-inquiry-status'],
                        'allow' => true,
                        'matchCallback' => function ($rule, $action) {
                            if (Yii::$app->user->isGuest) {
                                return false;
                            }
                            $username = Yii::$app->user->identity->username ?? '';
                            return in_array($username, ['solarenergy.admin@gmail.com', 'admin'], true);
                        },
                    ],
                ],
                'denyCallback' => function ($rule, $action) {
                    if (!Yii::$app->user->isGuest) {
                        Yii::$app->user->logout();
                    }
                    Yii::$app->session->setFlash('danger', 'Access restricted. You must log in with authorized administrator credentials.');
                    return Yii::$app->response->redirect(['site/login']);
                },
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions(): array
    {
        return [
            'error' => [
                'class' => ErrorAction::class,
            ],
            'captcha' => [
                'class' => CaptchaAction::class,
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
                'transparent' => true,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex(): string
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin(): Response|string
    {
        if (!Yii::$app->user->isGuest) {
            return $this->redirect(['site/admin']);
        }

        $model = new LoginForm($this->security);
        $ip = $this->request->userIP ?? '127.0.0.1';
        $rateLimitFile = Yii::getAlias('@runtime/login_rate_limits.json');
        $limits = file_exists($rateLimitFile) ? (json_decode(file_get_contents($rateLimitFile), true) ?: []) : [];
        $now = time();
        $recentAttempts = array_filter($limits[$ip] ?? [], fn($ts) => ($now - $ts) < 900);

        // Enforce brute-force protection (Max 5 failed attempts per 15 minutes)
        if (count($recentAttempts) >= 5) {
            $lockoutRemaining = max(1, (int)ceil((900 - ($now - min($recentAttempts))) / 60));
            Yii::$app->session->setFlash('danger', "Too many failed sign-in attempts. For security reasons, please wait {$lockoutRemaining} minute(s) before trying again.");
            $model->password = '';
            return $this->render('login', ['model' => $model]);
        }

        if ($model->load($this->request->post())) {
            if ($model->login()) {
                // Clear failed attempts counter on successful authentication
                unset($limits[$ip]);
                @file_put_contents($rateLimitFile, json_encode($limits), LOCK_EX);
                return $this->goBack(['site/admin']);
            }

            // Record failed attempt for brute force throttling
            $recentAttempts[] = $now;
            $limits[$ip] = array_values($recentAttempts);
            @file_put_contents($rateLimitFile, json_encode($limits), LOCK_EX);
        }

        $model->password = '';

        return $this->render('login', ['model' => $model]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout(): Response
    {
        Yii::$app->user->logout();

        return $this->redirect(['site/login']);
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact(): Response|string
    {
        $model = new ContactForm();

        $contact = $model->load($this->request->post()) && $model->contact(
            $this->mailer,
            Yii::$app->params['adminEmail'],
            Yii::$app->params['senderEmail'],
            Yii::$app->params['senderName'],
        );

        if ($contact) {
            Yii::$app->session->setFlash(
                'success',
                'Thank you for contacting us. We will respond to you as soon as possible.',
            );

            return $this->refresh();
        }

        return $this->render('contact', ['model' => $model]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout(): string
    {
        return $this->render('about');
    }

    /**
     * Displays products page.
     *
     * @return string
     */
    public function actionProducts(): string
    {
        return $this->render('products');
    }

    public function beforeAction($action): bool
    {
        if ($action->id === 'submit-expert-inquiry') {
            $this->enableCsrfValidation = false;
        }

        return parent::beforeAction($action);
    }

    /**
     * Displays services page.
     *
     * @return string
     */
    public function actionServices(): string
    {
        return $this->render('services');
    }

    /**
     * Displays solar blog and educational guides.
     *
     * @return string
     */
    public function actionBlog(): string
    {
        return $this->render('blog');
    }

    /**
     * Displays Privacy Policy page.
     *
     * @return string
     */
    public function actionPrivacy(): string
    {
        return $this->render('privacy');
    }

    /**
     * Displays Terms & Conditions page.
     *
     * @return string
     */
    public function actionTerms(): string
    {
        return $this->render('terms');
    }

    /**
     * Displays Sitemap directory page.
     *
     * @return string
     */
    public function actionSitemap(): string
    {
        return $this->render('sitemap');
    }

    /**
     * Serves dynamic XML sitemap for search engines.
     *
     * @return Response
     */
    public function actionSitemapXml(): Response
    {
        $sitemapPath = Yii::getAlias('@webroot/sitemap.xml');
        if (file_exists($sitemapPath)) {
            $content = file_get_contents($sitemapPath);
            $currentHost = Yii::$app->request->hostInfo;
            if (!empty($currentHost)) {
                $content = str_replace(['https://solar-energy-main.vercel.app', 'https://solar.sargnexus.digital', 'https://onesolar.in'], rtrim($currentHost, '/'), $content);
            }
        } else {
            $content = '<?xml version="1.0" encoding="UTF-8"?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"></urlset>';
        }

        $response = Yii::$app->response;
        $response->format = Response::FORMAT_RAW;
        $response->headers->set('Content-Type', 'application/xml; charset=UTF-8');
        $response->data = $content;
        return $response;
    }

    /**
     * Admin Panel: Review and manage customer solar inquiries.
     *
     * @return Response|string
     */
    public function actionAdmin(): Response|string
    {
        // Enforce strict admin authority
        if (Yii::$app->user->isGuest || !in_array(Yii::$app->user->identity->username ?? '', ['solarenergy.admin@gmail.com', 'admin'], true)) {
            Yii::$app->user->logout();
            Yii::$app->session->setFlash('danger', 'Unauthorized access. Administrator privileges required.');
            return $this->redirect(['site/login']);
        }

        // Disable browser caching for confidential admin portal
        Yii::$app->response->headers->set('Cache-Control', 'no-store, no-cache, must-revalidate, post-check=0, pre-check=0, max-age=0');
        Yii::$app->response->headers->set('Pragma', 'no-cache');
        Yii::$app->response->headers->set('Expires', '0');

        $inquiries = ExpertInquiry::getAll();
        $stats = ExpertInquiry::getStats();
        $currentFilter = (string)$this->request->get('filter', 'all');

        if ($currentFilter !== 'all' && in_array($currentFilter, ['pending', 'approved', 'rejected'], true)) {
            $inquiries = array_values(array_filter($inquiries, fn($item) => ($item['status'] ?? 'pending') === $currentFilter));
        }

        return $this->render('admin', [
            'inquiries' => $inquiries,
            'stats' => $stats,
            'currentFilter' => $currentFilter,
        ]);
    }

    /**
     * Endpoint to receive "Talk to Our Expert" inquiries with high-security phone validation and anti-spam verification.
     *
     * @return Response
     */
    public function actionSubmitExpertInquiry(): Response
    {
        $this->response->format = Response::FORMAT_JSON;

        $rawBody = $this->request->getRawBody();
        $jsonData = json_decode($rawBody, true);
        $postData = is_array($jsonData) ? $jsonData : $this->request->post();

        // 1. Anti-bot honeypot check
        if (!empty($postData['security_hp_check'])) {
            return $this->asJson([
                'success' => false,
                'message' => 'Spam request blocked by security filter.',
            ]);
        }

        // 2. IP Rate-Limiting Protection (Max 4 submissions per 3 minutes)
        $ip = $this->request->userIP ?? '127.0.0.1';
        $rateLimitFile = Yii::getAlias('@runtime/expert_rate_limits.json');
        $rateLimits = file_exists($rateLimitFile) ? (json_decode(file_get_contents($rateLimitFile), true) ?: []) : [];
        $now = time();
        $userTimestamps = array_filter($rateLimits[$ip] ?? [], fn($ts) => ($now - $ts) < 180);
        if (count($userTimestamps) >= 4) {
            return $this->asJson([
                'success' => false,
                'message' => 'Too many attempts. For security reasons, please wait 3 minutes before submitting again.',
            ]);
        }
        $userTimestamps[] = $now;
        $rateLimits[$ip] = $userTimestamps;
        file_put_contents($rateLimitFile, json_encode($rateLimits), LOCK_EX);

        // 3. Name Validation
        $name = trim((string)($postData['name'] ?? $postData['expert_name'] ?? ''));
        if ($name === '' || mb_strlen($name) < 2) {
            return $this->asJson([
                'success' => false,
                'message' => 'Please provide a valid customer name (at least 2 characters).',
            ]);
        }
        if (!preg_match('/^[\p{L}\s\.\-\']{2,60}$/u', $name)) {
            return $this->asJson([
                'success' => false,
                'message' => 'Customer name contains invalid characters. Please use letters only.',
            ]);
        }

        // 4. High-Security Indian Phone Number Validation
        $rawPhone = trim((string)($postData['phone'] ?? $postData['expert_phone'] ?? ''));
        $digits = preg_replace('/\D/', '', $rawPhone);

        // Normalize leading 91 or 0
        if (strlen($digits) === 12 && str_starts_with($digits, '91')) {
            $digits = substr($digits, 2);
        } elseif (strlen($digits) === 11 && str_starts_with($digits, '0')) {
            $digits = substr($digits, 1);
        }

        // Must be exactly 10 digits
        if (strlen($digits) !== 10) {
            return $this->asJson([
                'success' => false,
                'message' => 'Invalid mobile number. Please enter a valid 10-digit number (e.g. 9876543210).',
            ]);
        }

        // Must start with valid Indian mobile telecom prefixes: 6, 7, 8, or 9
        if (!in_array($digits[0], ['6', '7', '8', '9'], true)) {
            return $this->asJson([
                'success' => false,
                'message' => 'Invalid Indian mobile number. Number must start with 6, 7, 8, or 9.',
            ]);
        }

        // Reject all-identical digits (e.g. 9999999999, 8888888888, 0000000000)
        if (preg_match('/^(\d)\1{9}$/', $digits)) {
            return $this->asJson([
                'success' => false,
                'message' => 'Fake number detected. Repeated digit sequence is not accepted.',
            ]);
        }

        // Reject obvious fake / dummy sequences
        $fakeSequences = ['1234567890', '0123456789', '9876543210', '9876543211', '9012345678', '8901234567'];
        if (in_array($digits, $fakeSequences, true)) {
            return $this->asJson([
                'success' => false,
                'message' => 'Dummy test sequence detected. Please provide your real active phone number.',
            ]);
        }

        // 5. Email (if provided)
        $email = trim((string)($postData['email'] ?? $postData['expert_email'] ?? ''));
        if ($email !== '' && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return $this->asJson([
                'success' => false,
                'message' => 'Please provide a valid email address (e.g. name@example.com).',
            ]);
        }

        $topic = trim((string)($postData['topic'] ?? $postData['expert_topic'] ?? 'General Consultation'));
        $message = trim((string)($postData['message'] ?? $postData['expert_message'] ?? ''));

        // 6. Save verified genuine inquiry into Admin Panel
        $record = ExpertInquiry::create([
            'name' => $name,
            'phone' => $digits,
            'email' => $email,
            'topic' => $topic,
            'message' => $message,
        ]);

        return $this->asJson([
            'success' => true,
            'inquiry' => $record,
            'message' => 'Inquiry verified and submitted successfully.',
        ]);
    }

    /**
     * Action for admin to update inquiry review status (approve/reject/delete).
     *
     * @return Response
     */
    public function actionUpdateInquiryStatus(): Response
    {
        // Enforce strict admin authority
        if (Yii::$app->user->isGuest || !in_array(Yii::$app->user->identity->username ?? '', ['solarenergy.admin@gmail.com', 'admin'], true)) {
            Yii::$app->user->logout();
            Yii::$app->session->setFlash('danger', 'Unauthorized action. Administrator privileges required.');
            return $this->redirect(['site/login']);
        }

        $id = (string)$this->request->post('id', $this->request->get('id', ''));
        $status = (string)$this->request->post('status', $this->request->get('status', ''));

        if ($id !== '') {
            if ($status === 'delete') {
                ExpertInquiry::delete($id);
                Yii::$app->session->setFlash('info', "Inquiry {$id} has been removed.");
            } elseif (in_array($status, ['approved', 'rejected', 'pending'], true)) {
                ExpertInquiry::updateStatus($id, $status);
                $statusLabel = $status === 'approved' ? 'marked as Genuine & Approved' : ($status === 'rejected' ? 'marked as Spam/Rejected' : 'reset to Pending');
                Yii::$app->session->setFlash('success', "Inquiry {$id} was {$statusLabel}.");
            }
        }

        if ($this->request->isAjax) {
            $this->response->format = Response::FORMAT_JSON;
            return $this->asJson(['success' => true]);
        }

        $redirectFilter = (string)$this->request->post('filter', $this->request->get('filter', 'all'));
        return $this->redirect(['site/admin', 'filter' => $redirectFilter]);
    }
}

