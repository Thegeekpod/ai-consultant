<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\Blog;
use App\Models\Testimonial;
use App\Models\Faq;
use App\Models\Plan;
use App\Models\Setting;
use Illuminate\Support\Str;

class FrontendSeeder extends Seeder
{
    public function run(): void
    {
        // Settings
        $settings = [
            'hero_title' => 'Next-Gen AI <span>Engine</span>',
            'hero_subtitle' => 'All-in-One AI platform to create content and monetize instantly.',
            'total_users' => '245+',
            'total_sites_text' => 'Join Over <span>2.4 Million</span> Sites Powered by Us',
            'brand_title' => 'More than 2.5M+ User Choose Actova.AI',
            'capability_title' => 'Core AI Capabilities',
            'capability_subtitle' => 'Actova delivers high-performance, neural-optimized services tailored to your industry, your data, and your goals',
            'feature_title' => 'Our Advance <br> Features & Performance',
            'feature_subtitle' => 'AI models fine-tuned for unmatched accuracy and performance in real-world applications.',
            'price_title' => 'Flexible Plan',
            'price_subtitle' => 'Choose a plan that scales with your goals. Whether you’re just starting out or running a global enterprise.',
            'blog_title' => 'Latest Insight',
            'blog_subtitle' => 'Stay updated with the latest AI trends and insights.',
        ];

        foreach ($settings as $key => $value) {
            Setting::updateOrCreate(['key' => $key], ['value' => $value]);
        }

        // Services
        $services = [
            [
                'title' => 'AI Copilot Development.',
                'description' => 'We build task-specific AI copilots that enhance workflows, automate actions, and act',
                'type' => 'capability',
                'icon' => 'assets/imgs/capability/icon-5.png',
            ],
            [
                'title' => 'Voice & NLP Solutions',
                'description' => 'Neural models that detect trends, risks, and opportunities in real time.',
                'type' => 'capability',
                'icon' => 'assets/imgs/capability/voice.gif',
            ],
            [
                'title' => '150+ Ready Custom Template.',
                'description' => 'We build task-specific AI copilots that enhance workflows, automate actions, and act',
                'type' => 'capability',
                'icon' => 'assets/imgs/capability/img-5.png',
            ],
            [
                'title' => 'Predictive & Real-Time Analytics',
                'description' => 'Neural models that detect trends, risks, and opportunities in real time.',
                'type' => 'capability',
                'icon' => null,
            ],
            [
                'title' => 'Multi-lingual Support',
                'description' => 'Neural models that detect trends, risks, and opportunities in real time.',
                'type' => 'capability',
                'icon' => 'assets/imgs/capability/icon-7.png',
            ],
            [
                'title' => 'Actova Voice Chat',
                'description' => 'Actova Voice Chat delivers real-time, natural interactions powered by neural speech recognition & language intelligence.',
                'type' => 'feature',
                'icon' => 'assets/imgs/feature/img-1.png',
            ],
            [
                'title' => 'AI Text Generator',
                'description' => 'Real-time, natural interactions powered by neural speech recognition.',
                'type' => 'feature',
                'icon' => 'assets/imgs/feature/img-2.png',
            ],
            [
                'title' => 'AI Image Generator',
                'description' => 'Real-time, natural interactions powered by neural speech recognition.',
                'type' => 'feature',
                'icon' => 'assets/imgs/feature/img-3.png',
            ],
        ];

        foreach ($services as $service) {
            Service::updateOrCreate(['title' => $service['title']], $service);
        }

        // Blogs
        $blogs = [
            [
                'title' => 'Beyond ChatGPT: What’s Next for Generative AI?',
                'slug' => Str::slug('Beyond ChatGPT: What’s Next for Generative AI?'),
                'content' => 'Full content for Beyond ChatGPT...',
                'image' => 'assets/imgs/blog/blog-6.jpg',
                'author' => 'Admin',
                'category' => 'AI Trends',
                'read_time' => 2,
            ],
            [
                'title' => 'From Data to Decisions: The Power of Predictive Analytics.',
                'slug' => Str::slug('From Data to Decisions: The Power of Predictive Analytics.'),
                'content' => 'Full content for Predictive Analytics...',
                'image' => 'assets/imgs/blog/blog-7.jpg',
                'author' => 'Admin',
                'category' => 'Data Science',
                'read_time' => 2,
            ],
            [
                'title' => 'The Rise of Multilingual AI Breaking Barriers Worldwide.',
                'slug' => Str::slug('The Rise of Multilingual AI Breaking Barriers Worldwide.'),
                'content' => 'Full content for Multilingual AI...',
                'image' => 'assets/imgs/blog/blog-8.jpg',
                'author' => 'Admin',
                'category' => 'Global AI',
                'read_time' => 2,
            ],
        ];

        foreach ($blogs as $blog) {
            Blog::updateOrCreate(['slug' => $blog['slug']], $blog);
        }

        // Testimonials
        $testimonials = [
            [
                'name' => 'Jason Roy',
                'designation' => 'Director of Gentech',
                'quote' => 'Their team guided us from idea to deployment in just 6 weeks. The LLM integration reduced our manual work by over 60%.',
                'image' => 'assets/imgs/testimonial/author.png',
                'reason' => '(Premium Support)',
                'rating' => 4.5,
            ]
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::updateOrCreate(['name' => $testimonial['name']], $testimonial);
        }

        // FAQs
        $faqs = [
            [
                'question' => 'What is Actova AI?',
                'answer' => 'Actova is a next-generation AI solution built to empower businesses of every size.',
            ],
            [
                'question' => 'Who can use Actova AI?',
                'answer' => 'Actova is a next-generation AI solution built to empower businesses of every size.',
            ],
        ];

        foreach ($faqs as $faq) {
            Faq::updateOrCreate(['question' => $faq['question']], $faq);
        }

        // Plans
        $plans = [
            [
                'name' => 'Starter',
                'price' => '12',
                'type' => 'monthly',
                'features' => json_encode(['Access to Core AI Tools', '5K AI Content Generations', '3 Team Members', 'Standard Support']),
                'description' => 'Perfect for freelancers, creators, and small teams.',
                'is_popular' => false,
            ],
            [
                'name' => 'Premium',
                'price' => '39',
                'type' => 'monthly',
                'features' => json_encode(['Everything in Starter', '50K AI Generations / month', 'Unlimited Projects', 'Advanced Analytics', 'Priority Email Support']),
                'description' => 'Perfect for growing businesses, startups, and creators.',
                'is_popular' => true,
            ],
            [
                'name' => 'Starter',
                'price' => '119',
                'type' => 'yearly',
                'features' => json_encode(['Access to Core AI Tools', '5K AI Content Generations.', '3 Team Members', 'Standard Support']),
                'description' => 'Perfect for freelancers, creators, and small teams.',
                'is_popular' => false,
            ],
            [
                'name' => 'Premium',
                'price' => '399',
                'type' => 'yearly',
                'features' => json_encode(['Everything in Starter', '50K AI Generations / month', 'Unlimited Projects', 'Advanced Analytics', 'Priority Email Support']),
                'description' => 'Perfect for growing businesses, startups, and creators.',
                'is_popular' => true,
            ],
            [
                'name' => 'Enterprise',
                'price' => '899',
                'type' => 'yearly',
                'features' => json_encode(['Unlimited Generations', 'Dedicated Account Manager', 'SLA & Enterprise-Grade Security', 'Custom Integrations']),
                'description' => 'Built for large-scale organizations that need AI power.',
                'is_popular' => false,
            ],
        ];

        foreach ($plans as $plan) {
            Plan::updateOrCreate(['name' => $plan['name'], 'type' => $plan['type']], $plan);
        }
    }
}
