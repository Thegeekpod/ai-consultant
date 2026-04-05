<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Auth;

// Frontend Routes
Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/service', 'service')->name('service');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/blog/{slug}', [FrontendController::class, 'blogDetails'])->name('blog-details');
    Route::get('/contact', 'contact')->name('contact');
    Route::post('/contact', 'contactStore')->name('contact.store');
    Route::get('/projects', 'projects')->name('projects');
    Route::get('/team', 'team')->name('team');
    Route::get('/faq', 'faq')->name('faq');
    Route::get('/service-details', 'serviceDetails')->name('service-details');

    // Individual Service Pages
    Route::get('/services/ai-development', 'serviceAiDevelopment')->name('services.ai-development');
    Route::get('/services/ai-integration-ops', 'serviceAiIntegrationOps')->name('services.ai-integration-ops');
    Route::get('/services/ai-monitoring', 'serviceAiMonitoring')->name('services.ai-monitoring');
    Route::get('/services/ai-readiness-assessment', 'serviceAiReadinessAssessment')->name('services.ai-readiness-assessment');
    Route::get('/services/ai-roadmap-planning', 'serviceAiRoadmapPlanning')->name('services.ai-roadmap-planning');
    Route::get('/services/ai-training-teams', 'serviceAiTrainingTeams')->name('services.ai-training-teams');
    Route::get('/services/api-system-integration', 'serviceApiSystemIntegration')->name('services.api-system-integration');
    Route::get('/services/custom-ai-model', 'serviceCustomAiModel')->name('services.custom-ai-model');
    Route::get('/services/digital-transformation', 'serviceDigitalTransformation')->name('services.digital-transformation');
    Route::get('/services/generative-ai', 'serviceGenerativeAi')->name('services.generative-ai');
    Route::get('/services/machine-learning', 'serviceMachineLearning')->name('services.machine-learning');
    Route::get('/services/mlops-deployment', 'serviceMlopsDeployment')->name('services.mlops-deployment');
    Route::get('/services/model-fine-tuning', 'serviceModelFineTuning')->name('services.model-fine-tuning');
    Route::get('/services/nlp-computer-vision', 'serviceNlpComputerVision')->name('services.nlp-computer-vision');
    Route::get('/services/ongoing-support', 'serviceOngoingSupport')->name('services.ongoing-support');
    Route::get('/services/strategy-consulting', 'serviceStrategyConsulting')->name('services.strategy-consulting');
    Route::get('/services/training-support', 'serviceTrainingSupport')->name('services.training-support');
    Route::get('/team-details', 'teamDetails')->name('team-details');
    Route::get('/projects-details', 'projectsDetails')->name('projects-details');
    Route::get('/terms', 'terms')->name('terms');
    Route::get('/privacy', 'privacy')->name('privacy');
    Route::get('/tools', 'tools')->name('tools');
    Route::get('/tools/ai-readiness', 'aiReadiness')->name('tools.readiness');
    Route::get('/tools/ai-audit', 'aiAudit')->name('tools.audit');
    Route::post('/tools/run-audit', 'runAudit')->name('tools.run-audit');

    // Solutions Pages
    Route::get('/solutions', 'solutions')->name('solutions');
    Route::get('/solutions/ai-chatbots', 'solutionAiChatbots')->name('solutions.ai-chatbots');
    Route::get('/solutions/anomaly-detection', 'solutionAnomalyDetection')->name('solutions.anomaly-detection');
    Route::get('/solutions/automation', 'solutionAutomation')->name('solutions.automation');
    Route::get('/solutions/customer-experience', 'solutionCustomerExperience')->name('solutions.customer-experience');
    Route::get('/solutions/demand-forecasting', 'solutionDemandForecasting')->name('solutions.demand-forecasting');
    Route::get('/solutions/fraud-detection', 'solutionFraudDetection')->name('solutions.fraud-detection');
    Route::get('/solutions/inventory-optimization', 'solutionInventoryOptimization')->name('solutions.inventory-optimization');
    Route::get('/solutions/ipa', 'solutionIpa')->name('solutions.ipa');
    Route::get('/solutions/lead-scoring', 'solutionLeadScoring')->name('solutions.lead-scoring');
    Route::get('/solutions/marketing-analytics', 'solutionMarketingAnalytics')->name('solutions.marketing-analytics');
    Route::get('/solutions/marketing-sales', 'solutionMarketingSales')->name('solutions.marketing-sales');
    Route::get('/solutions/operations', 'solutionOperations')->name('solutions.operations');
    Route::get('/solutions/personalization-engines', 'solutionPersonalizationEngines')->name('solutions.personalization-engines');
    Route::get('/solutions/quality-control', 'solutionQualityControl')->name('solutions.quality-control');
    Route::get('/solutions/recommendation-systems', 'solutionRecommendationSystems')->name('solutions.recommendation-systems');
    Route::get('/solutions/risk-assessment', 'solutionRiskAssessment')->name('solutions.risk-assessment');
    Route::get('/solutions/rpa', 'solutionRpa')->name('solutions.rpa');
    Route::get('/solutions/security-compliance', 'solutionSecurityCompliance')->name('solutions.security-compliance');
    Route::get('/solutions/voice-ai', 'solutionVoiceAi')->name('solutions.voice-ai');
    Route::get('/solutions/workflow-automation', 'solutionWorkflowAutomation')->name('solutions.workflow-automation');

    // Industries Pages
    Route::get('/industries', 'industries')->name('industries');
    Route::get('/industries/education', 'industryEducation')->name('industries.education');
    Route::get('/industries/finance-banking', 'industryFinanceBanking')->name('industries.finance-banking');
    Route::get('/industries/healthcare', 'industryHealthcare')->name('industries.healthcare');
    Route::get('/industries/manufacturing', 'industryManufacturing')->name('industries.manufacturing');
    Route::get('/industries/real-estate', 'industryRealEstate')->name('industries.real-estate');
    Route::get('/industries/retail-ecommerce', 'industryRetailEcommerce')->name('industries.retail-ecommerce');
    Route::get('/industries/technology', 'industryTechnology')->name('industries.technology');
});

// NOTE: The wildcard dynamic route is defined LAST to prevent it from
// swallowing admin/auth routes that are registered above.

// Auth Routes
Auth::routes();

// Admin Routes
Route::get('/admin', function () {
    return redirect()->route('admin.dashboard');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

    // Menu Management
    Route::resource('menus', \App\Http\Controllers\Admin\MenuController::class);
    Route::post('menus/update-order', [\App\Http\Controllers\Admin\MenuController::class, 'updateOrder'])->name('menus.update-order');

    // Blogs
    Route::resource('blogs', \App\Http\Controllers\Admin\BlogController::class);
    Route::resource('blog-categories', \App\Http\Controllers\Admin\BlogCategoryController::class);

    // Contact Leads
    Route::resource('contact-leads', \App\Http\Controllers\Admin\ContactLeadController::class)->only(['index', 'destroy']);

    // SEO Settings
    Route::resource('seo-settings', \App\Http\Controllers\Admin\SeoSettingController::class);

    // Global Scripts
    Route::get('global-scripts', [\App\Http\Controllers\Admin\GlobalScriptController::class, 'index'])->name('global-scripts.index');
    Route::post('global-scripts', [\App\Http\Controllers\Admin\GlobalScriptController::class, 'update'])->name('global-scripts.update');
});

// Dynamic catch-all — must be LAST so it doesn't intercept admin/auth routes
Route::controller(FrontendController::class)->group(function () {
    Route::get('/{category}/{slug}', 'dynamicPage')->name('dynamic.page');
});
