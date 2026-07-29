<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    public function run(): void
    {
        $faqs = [
            [
                'question' => 'What services do you offer?',
                'answer' => 'We offer a comprehensive range of services including custom web development, web application development, IT support and maintenance, database management, cloud solutions, and creative design services.',
                'category' => 'services',
            ],
            [
                'question' => 'How long does it take to build a website?',
                'answer' => 'Project timelines vary based on complexity. A simple business website takes 2-4 weeks, while complex web applications can take 2-6 months. We provide detailed timelines during the project planning phase.',
                'category' => 'projects',
            ],
            [
                'question' => 'Do you provide ongoing support after project completion?',
                'answer' => 'Yes! We offer various maintenance packages including technical support, security updates, backups, and feature enhancements. Our support plans are flexible and can be customized to your needs.',
                'category' => 'support',
            ],
            [
                'question' => 'What technologies do you work with?',
                'answer' => 'We specialize in Laravel, PHP, MySQL, PostgreSQL, JavaScript, React, Vue.js, HTML5, CSS3, and various cloud platforms including AWS and Google Cloud.',
                'category' => 'technology',
            ],
            [
                'question' => 'Can you help with existing website issues?',
                'answer' => 'Absolutely! We provide IT support services including troubleshooting, performance optimization, security audits, and bug fixes for existing websites and applications.',
                'category' => 'support',
            ],
            [
                'question' => 'What are your payment terms?',
                'answer' => 'We typically work with a 50% upfront payment and 50% upon project completion. For larger projects, we offer milestone-based payments. We accept bank transfers and online payment methods.',
                'category' => 'billing',
            ],
            [
                'question' => 'Do you offer custom IT solutions for businesses?',
                'answer' => 'Yes, we provide customized IT solutions including network setup, server management, cloud migration, and business process automation tailored to your specific requirements.',
                'category' => 'services',
            ],
            [
                'question' => 'How can I get a project quote?',
                'answer' => 'Simply contact us through our contact form or email us with your project requirements. We will review your needs and provide a detailed quote within 24-48 hours.',
                'category' => 'general',
            ],
        ];

        foreach ($faqs as $index => $faq) {
            Faq::create([
                'question' => $faq['question'],
                'answer' => $faq['answer'],
                'category' => $faq['category'],
                'is_active' => true,
                'sort_order' => $index,
            ]);
        }
    }
}
