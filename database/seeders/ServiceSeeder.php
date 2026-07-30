<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'title' => 'Web Development',
                'slug' => 'web-development',
                'description' => 'Building modern, scalable web applications using Laravel and PHP. From simple websites to complex enterprise solutions.',
                'icon' => 'web',
                'features' => [
                    'Custom Laravel Applications',
                    'E-commerce Solutions',
                    'CMS Development',
                    'RESTful API Integration',
                    'Responsive Frontend Design',
                    'Database Design & Optimization'
                ],
                'technologies' => ['Laravel', 'PHP', 'MySQL', 'JavaScript'],
                'status' => 'active',
                'sort_order' => 1,
            ],
            [
                'title' => 'IT Support',
                'slug' => 'it-support',
                'description' => 'Comprehensive IT support and system administration services to keep your business running smoothly and securely.',
                'icon' => 'support',
                'features' => [
                    'Network Setup & Configuration',
                    'Hardware Troubleshooting',
                    'Server Administration',
                    'Security Audits',
                    '24/7 Technical Support',
                    'Remote Desktop Support'
                ],
                'technologies' => ['Windows', 'Linux', 'Networking', 'Security'],
                'status' => 'active',
                'sort_order' => 2,
            ],
            [
                'title' => 'Creative Design',
                'slug' => 'creative-design',
                'description' => 'Professional design services to establish and enhance your brand\'s visual identity across all digital platforms.',
                'icon' => 'design',
                'features' => [
                    'Logo Design',
                    'Brand Identity',
                    'Graphic Design',
                    'UI/UX Consultation',
                    'Social Media Graphics',
                    'Print Materials'
                ],
                'technologies' => ['Photoshop', 'Illustrator', 'Figma'],
                'status' => 'active',
                'sort_order' => 3,
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
