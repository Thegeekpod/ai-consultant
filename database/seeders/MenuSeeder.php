<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing menus
        Menu::truncate();

        // Main Menu Items
        $home = Menu::create([
            'name' => 'Home',
            'slug' => 'home',
            'url' => '/',
            'menu_type' => 'main',
            'order' => 1,
        ]);

        $about = Menu::create([
            'name' => 'About',
            'slug' => 'about',
            'url' => '/about',
            'menu_type' => 'main',
            'order' => 2,
        ]);

        // Services Menu
        $services = Menu::create([
            'name' => 'Services',
            'slug' => 'services',
            'url' => '/service',
            'menu_type' => 'main',
            'order' => 3,
        ]);

        // Services > Strategy & Consulting
        $strategy = Menu::create([
            'name' => 'AI Strategy & Consulting',
            'slug' => 'strategy-consulting',
            'url' => '/services/strategy-consulting',
            'parent_id' => $services->id,
            'icon' => 'fal fa-analytics',
            'description' => 'Strategic planning & enterprise adoption.',
            'menu_type' => 'services',
            'order' => 1,
        ]);

        Menu::create([
            'name' => 'AI Readiness Assessment',
            'slug' => 'ai-readiness-assessment',
            'url' => '/services/ai-readiness-assessment',
            'parent_id' => $strategy->id,
            'icon' => 'fal fa-clipboard-check',
            'menu_type' => 'services',
            'order' => 1,
        ]);

        Menu::create([
            'name' => 'AI Roadmap & Planning',
            'slug' => 'ai-roadmap-planning',
            'url' => '/services/ai-roadmap-planning',
            'parent_id' => $strategy->id,
            'icon' => 'fal fa-map-marked-alt',
            'menu_type' => 'services',
            'order' => 2,
        ]);

        Menu::create([
            'name' => 'Digital Transformation Consulting',
            'slug' => 'digital-transformation',
            'url' => '/services/digital-transformation',
            'parent_id' => $strategy->id,
            'icon' => 'fal fa-rocket',
            'menu_type' => 'services',
            'order' => 3,
        ]);

        // Services > AI Development
        $development = Menu::create([
            'name' => 'AI Development',
            'slug' => 'ai-development',
            'url' => '/services/ai-development',
            'parent_id' => $services->id,
            'icon' => 'fal fa-code',
            'description' => 'Custom LLMs & software solutions.',
            'menu_type' => 'services',
            'order' => 2,
        ]);

        Menu::create([
            'name' => 'Custom AI Model Development',
            'slug' => 'custom-ai-model',
            'url' => '/services/custom-ai-model',
            'parent_id' => $development->id,
            'icon' => 'fal fa-brain',
            'menu_type' => 'services',
            'order' => 1,
        ]);

        Menu::create([
            'name' => 'Machine Learning Solutions',
            'slug' => 'machine-learning',
            'url' => '/services/machine-learning',
            'parent_id' => $development->id,
            'icon' => 'fal fa-laptop-code',
            'menu_type' => 'services',
            'order' => 2,
        ]);

        Menu::create([
            'name' => 'Generative AI (Chatbots, Copilots)',
            'slug' => 'generative-ai',
            'url' => '/services/generative-ai',
            'parent_id' => $development->id,
            'icon' => 'fal fa-comments',
            'menu_type' => 'services',
            'order' => 3,
        ]);

        Menu::create([
            'name' => 'NLP & Computer Vision',
            'slug' => 'nlp-computer-vision',
            'url' => '/services/nlp-computer-vision',
            'parent_id' => $development->id,
            'icon' => 'fal fa-eye',
            'menu_type' => 'services',
            'order' => 4,
        ]);

        // Services > AI Integration & Ops
        $integration = Menu::create([
            'name' => 'AI Integration & Ops',
            'slug' => 'ai-integration-ops',
            'url' => '/services/ai-integration-ops',
            'parent_id' => $services->id,
            'icon' => 'fal fa-cogs',
            'description' => 'MLOps & system integration.',
            'menu_type' => 'services',
            'order' => 3,
        ]);

        Menu::create([
            'name' => 'API & System Integration',
            'slug' => 'api-system-integration',
            'url' => '/services/api-system-integration',
            'parent_id' => $integration->id,
            'icon' => 'fal fa-plug',
            'menu_type' => 'services',
            'order' => 1,
        ]);

        Menu::create([
            'name' => 'MLOps & Model Deployment',
            'slug' => 'mlops-deployment',
            'url' => '/services/mlops-deployment',
            'parent_id' => $integration->id,
            'icon' => 'fal fa-cogs',
            'menu_type' => 'services',
            'order' => 2,
        ]);

        Menu::create([
            'name' => 'AI Monitoring & Optimization',
            'slug' => 'ai-monitoring',
            'url' => '/services/ai-monitoring',
            'parent_id' => $integration->id,
            'icon' => 'fal fa-heartbeat',
            'menu_type' => 'services',
            'order' => 3,
        ]);

        // Services > Training & Support
        $training = Menu::create([
            'name' => 'Training & Support',
            'slug' => 'training-support',
            'url' => '/services/training-support',
            'parent_id' => $services->id,
            'icon' => 'fal fa-chalkboard-teacher',
            'description' => 'Fine-tuning & team workshops.',
            'menu_type' => 'services',
            'order' => 4,
        ]);

        Menu::create([
            'name' => 'AI Training for Teams',
            'slug' => 'ai-training-teams',
            'url' => '/services/ai-training-teams',
            'parent_id' => $training->id,
            'icon' => 'fal fa-chalkboard',
            'menu_type' => 'services',
            'order' => 1,
        ]);

        Menu::create([
            'name' => 'Model Fine-Tuning',
            'slug' => 'model-fine-tuning',
            'url' => '/services/model-fine-tuning',
            'parent_id' => $training->id,
            'icon' => 'fal fa-sliders-h',
            'menu_type' => 'services',
            'order' => 2,
        ]);

        Menu::create([
            'name' => 'Ongoing Support & Maintenance',
            'slug' => 'ongoing-support',
            'url' => '/services/ongoing-support',
            'parent_id' => $training->id,
            'icon' => 'fal fa-life-ring',
            'menu_type' => 'services',
            'order' => 3,
        ]);

        // Solutions Menu
        $solutions = Menu::create([
            'name' => 'Solutions',
            'slug' => 'solutions',
            'url' => '/solutions',
            'menu_type' => 'main',
            'order' => 4,
        ]);

        // Solutions > Automation
        $automation = Menu::create([
            'name' => 'Automation',
            'slug' => 'automation',
            'url' => '/solutions/automation',
            'parent_id' => $solutions->id,
            'icon' => 'fal fa-robot',
            'description' => 'RPA & Intelligent workflows.',
            'menu_type' => 'solutions',
            'order' => 1,
        ]);

        Menu::create([
            'name' => 'Intelligent Process Automation (IPA)',
            'slug' => 'ipa',
            'url' => '/solutions/ipa',
            'parent_id' => $automation->id,
            'icon' => 'fal fa-microchip',
            'menu_type' => 'solutions',
            'order' => 1,
        ]);

        Menu::create([
            'name' => 'Robotic Process Automation (RPA)',
            'slug' => 'rpa',
            'url' => '/solutions/rpa',
            'parent_id' => $automation->id,
            'icon' => 'fal fa-cogs',
            'menu_type' => 'solutions',
            'order' => 2,
        ]);

        Menu::create([
            'name' => 'Workflow Automation',
            'slug' => 'workflow-automation',
            'url' => '/solutions/workflow-automation',
            'parent_id' => $automation->id,
            'icon' => 'fal fa-project-diagram',
            'menu_type' => 'solutions',
            'order' => 3,
        ]);

        // Solutions > Customer Experience
        $customer = Menu::create([
            'name' => 'Customer Experience',
            'slug' => 'customer-experience',
            'url' => '/solutions/customer-experience',
            'parent_id' => $solutions->id,
            'icon' => 'fal fa-user-headset',
            'description' => 'Chatbots & Personalization.',
            'menu_type' => 'solutions',
            'order' => 2,
        ]);

        Menu::create([
            'name' => 'AI Chatbots & Virtual Assistants',
            'slug' => 'ai-chatbots',
            'url' => '/solutions/ai-chatbots',
            'parent_id' => $customer->id,
            'icon' => 'fal fa-comments',
            'menu_type' => 'solutions',
            'order' => 1,
        ]);

        Menu::create([
            'name' => 'Personalization Engines',
            'slug' => 'personalization-engines',
            'url' => '/solutions/personalization-engines',
            'parent_id' => $customer->id,
            'icon' => 'fal fa-user-friends',
            'menu_type' => 'solutions',
            'order' => 2,
        ]);

        Menu::create([
            'name' => 'Voice AI Solutions',
            'slug' => 'voice-ai',
            'url' => '/solutions/voice-ai',
            'parent_id' => $customer->id,
            'icon' => 'fal fa-microphone',
            'menu_type' => 'solutions',
            'order' => 3,
        ]);

        // Solutions > Marketing & Sales
        $marketing = Menu::create([
            'name' => 'Marketing & Sales',
            'slug' => 'marketing-sales',
            'url' => '/solutions/marketing-sales',
            'parent_id' => $solutions->id,
            'icon' => 'fal fa-chart-line',
            'description' => 'Lead scoring & Analytics.',
            'menu_type' => 'solutions',
            'order' => 3,
        ]);

        Menu::create([
            'name' => 'AI-Powered Lead Scoring',
            'slug' => 'lead-scoring',
            'url' => '/solutions/lead-scoring',
            'parent_id' => $marketing->id,
            'icon' => 'fal fa-bullseye',
            'menu_type' => 'solutions',
            'order' => 1,
        ]);

        Menu::create([
            'name' => 'Recommendation Systems',
            'slug' => 'recommendation-systems',
            'url' => '/solutions/recommendation-systems',
            'parent_id' => $marketing->id,
            'icon' => 'fal fa-thumbs-up',
            'menu_type' => 'solutions',
            'order' => 2,
        ]);

        Menu::create([
            'name' => 'Marketing Analytics',
            'slug' => 'marketing-analytics',
            'url' => '/solutions/marketing-analytics',
            'parent_id' => $marketing->id,
            'icon' => 'fal fa-chart-area',
            'menu_type' => 'solutions',
            'order' => 3,
        ]);

        // Solutions > Operations
        $operations = Menu::create([
            'name' => 'Operations',
            'slug' => 'operations',
            'url' => '/solutions/operations',
            'parent_id' => $solutions->id,
            'icon' => 'fal fa-industry-alt',
            'description' => 'Forecasting & Inventory.',
            'menu_type' => 'solutions',
            'order' => 4,
        ]);

        Menu::create([
            'name' => 'Demand Forecasting',
            'slug' => 'demand-forecasting',
            'url' => '/solutions/demand-forecasting',
            'parent_id' => $operations->id,
            'icon' => 'fal fa-chart-line',
            'menu_type' => 'solutions',
            'order' => 1,
        ]);

        Menu::create([
            'name' => 'Inventory Optimization',
            'slug' => 'inventory-optimization',
            'url' => '/solutions/inventory-optimization',
            'parent_id' => $operations->id,
            'icon' => 'fal fa-boxes',
            'menu_type' => 'solutions',
            'order' => 2,
        ]);

        Menu::create([
            'name' => 'Quality Control (AI Vision)',
            'slug' => 'quality-control',
            'url' => '/solutions/quality-control',
            'parent_id' => $operations->id,
            'icon' => 'fal fa-search-plus',
            'menu_type' => 'solutions',
            'order' => 3,
        ]);

        // Solutions > Security & Compliance
        $security = Menu::create([
            'name' => 'Security & Compliance',
            'slug' => 'security-compliance',
            'url' => '/solutions/security-compliance',
            'parent_id' => $solutions->id,
            'icon' => 'fal fa-shield-check',
            'description' => 'Fraud & Anomaly detection.',
            'menu_type' => 'solutions',
            'order' => 5,
        ]);

        Menu::create([
            'name' => 'Fraud Detection',
            'slug' => 'fraud-detection',
            'url' => '/solutions/fraud-detection',
            'parent_id' => $security->id,
            'icon' => 'fal fa-lock',
            'menu_type' => 'solutions',
            'order' => 1,
        ]);

        Menu::create([
            'name' => 'Anomaly Detection',
            'slug' => 'anomaly-detection',
            'url' => '/solutions/anomaly-detection',
            'parent_id' => $security->id,
            'icon' => 'fal fa-exclamation-triangle',
            'menu_type' => 'solutions',
            'order' => 2,
        ]);

        Menu::create([
            'name' => 'Risk Assessment Systems',
            'slug' => 'risk-assessment',
            'url' => '/solutions/risk-assessment',
            'parent_id' => $security->id,
            'icon' => 'fal fa-shield',
            'menu_type' => 'solutions',
            'order' => 3,
        ]);

        // Industries Menu
        $industries = Menu::create([
            'name' => 'Industries',
            'slug' => 'industries',
            'url' => '/industries',
            'menu_type' => 'main',
            'order' => 5,
        ]);

        // Industries - Simple list (no sub-submenus)
        Menu::create([
            'name' => 'Technology',
            'slug' => 'technology',
            'url' => '/industries/technology',
            'parent_id' => $industries->id,
            'icon' => 'fal fa-microchip',
            'description' => 'SaaS, IT Services, and Startups.',
            'menu_type' => 'industries',
            'order' => 1,
        ]);

        Menu::create([
            'name' => 'Retail & E-Com',
            'slug' => 'retail-ecommerce',
            'url' => '/industries/retail-ecommerce',
            'parent_id' => $industries->id,
            'icon' => 'fal fa-shopping-cart',
            'description' => 'Customer insights & inventory forecasting.',
            'menu_type' => 'industries',
            'order' => 2,
        ]);

        Menu::create([
            'name' => 'Healthcare',
            'slug' => 'healthcare',
            'url' => '/industries/healthcare',
            'parent_id' => $industries->id,
            'icon' => 'fal fa-stethoscopes',
            'description' => 'Diagnostics & patient data analytics.',
            'menu_type' => 'industries',
            'order' => 3,
        ]);

        Menu::create([
            'name' => 'Finance & Banking',
            'slug' => 'finance-banking',
            'url' => '/industries/finance-banking',
            'parent_id' => $industries->id,
            'icon' => 'fal fa-university',
            'description' => 'Fraud detection & algorithmic trading.',
            'menu_type' => 'industries',
            'order' => 4,
        ]);

        Menu::create([
            'name' => 'Manufacturing',
            'slug' => 'manufacturing',
            'url' => '/industries/manufacturing',
            'parent_id' => $industries->id,
            'icon' => 'fal fa-industry',
            'description' => 'Predictive maintenance & quality control.',
            'menu_type' => 'industries',
            'order' => 5,
        ]);

        Menu::create([
            'name' => 'Education',
            'slug' => 'education',
            'url' => '/industries/education',
            'parent_id' => $industries->id,
            'icon' => 'fal fa-graduation-cap',
            'description' => 'Adaptive learning & AI tutors.',
            'menu_type' => 'industries',
            'order' => 6,
        ]);

        Menu::create([
            'name' => 'Real Estate',
            'slug' => 'real-estate',
            'url' => '/industries/real-estate',
            'parent_id' => $industries->id,
            'icon' => 'fal fa-building',
            'description' => 'Price prediction & property analytics.',
            'menu_type' => 'industries',
            'order' => 7,
        ]);

        Menu::create([
            'name' => 'View All Industries',
            'slug' => 'view-all-industries',
            'url' => '/industries',
            'parent_id' => $industries->id,
            'icon' => 'fal fa-arrow-right',
            'description' => 'Explore our full sector expertise.',
            'menu_type' => 'industries',
            'order' => 8,
        ]);

        // Success Stories
        Menu::create([
            'name' => 'Success Stories',
            'slug' => 'success-stories',
            'url' => '/projects',
            'menu_type' => 'main',
            'order' => 6,
        ]);
    }
}
