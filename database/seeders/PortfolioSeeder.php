<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        $portfolios = [
            [
                'title' => 'TechMart E-commerce Platform',
                'slug' => 'techmart-ecommerce',
                'description' => 'Complete e-commerce solution for an electronics retail business featuring product catalog, shopping cart, multiple payment gateways, inventory management, and order tracking system.',
                'category' => 'web-development',
                'technologies' => ['Laravel', 'MySQL', 'Stripe', 'Vue.js', 'TailwindCSS'],
                'client' => 'TechMart Electronics',
                'url' => 'https://example.com',
                'featured' => true,
                'status' => 'published',
                'sort_order' => 1,
            ],
            [
                'title' => 'SecureBank Internal Portal',
                'slug' => 'securebank-portal',
                'description' => 'Custom internal web application for a banking institution with role-based access control, document management, and real-time reporting dashboards.',
                'category' => 'web-application',
                'technologies' => ['Laravel', 'PostgreSQL', 'React', 'Docker'],
                'client' => 'SecureBank Ltd',
                'url' => 'https://example.com',
                'featured' => true,
                'status' => 'published',
                'sort_order' => 2,
            ],
            [
                'title' => 'HealthCare Clinic Management',
                'slug' => 'healthcare-management',
                'description' => 'Complete clinic management system with appointment scheduling, patient records, billing, and prescription management for a multi-location healthcare provider.',
                'category' => 'web-application',
                'technologies' => ['Laravel', 'MySQL', 'Vue.js', 'REST API'],
                'client' => 'HealthCare Plus',
                'url' => 'https://example.com',
                'featured' => true,
                'status' => 'published',
                'sort_order' => 3,
            ],
            [
                'title' => 'LogiTrack Fleet Management',
                'slug' => 'logitrack-fleet',
                'description' => 'Real-time fleet tracking and management system with GPS integration, driver management, fuel tracking, and comprehensive reporting for logistics companies.',
                'category' => 'it-solutions',
                'technologies' => ['Laravel', 'MySQL', 'Google Maps API', 'WebSocket'],
                'client' => 'LogiTrack Solutions',
                'url' => 'https://example.com',
                'featured' => false,
                'status' => 'published',
                'sort_order' => 4,
            ],
            [
                'title' => 'EduLearn Online Platform',
                'slug' => 'edulearn-platform',
                'description' => 'Learning management system with course creation, video streaming, quizzes, certificates, and student progress tracking for an educational institution.',
                'category' => 'web-application',
                'technologies' => ['Laravel', 'MySQL', 'Vue.js', 'AWS S3'],
                'client' => 'EduLearn Institute',
                'url' => 'https://example.com',
                'featured' => false,
                'status' => 'published',
                'sort_order' => 5,
            ],
            [
                'title' => 'Office Network Infrastructure',
                'slug' => 'office-network-setup',
                'description' => 'Complete office network setup including structured cabling, firewall configuration, WiFi deployment, and VPN setup for a corporate office.',
                'category' => 'it-solutions',
                'technologies' => ['Cisco', 'Ubiquiti', 'pfSense', 'Cat6'],
                'client' => 'Corporate Office XYZ',
                'url' => null,
                'featured' => false,
                'status' => 'published',
                'sort_order' => 6,
            ],
        ];

        foreach ($portfolios as $portfolio) {
            Portfolio::create($portfolio);
        }
    }
}
