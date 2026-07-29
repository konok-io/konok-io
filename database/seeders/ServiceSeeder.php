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
                'title' => 'Custom Web Development',
                'slug' => 'custom-web-development',
                'description' => 'We create custom websites from scratch using modern technologies. Our solutions are scalable, secure, and optimized for performance. From simple business sites to complex enterprise applications, we deliver excellence.',
                'icon' => 'web',
                'features' => ['Responsive Design', 'SEO Optimized', 'Fast Loading', 'Secure & Reliable'],
                'technologies' => ['Laravel', 'PHP', 'MySQL', 'Vue.js'],
                'status' => 'active',
                'sort_order' => 1,
            ],
            [
                'title' => 'E-commerce Solutions',
                'slug' => 'ecommerce-solutions',
                'description' => 'Complete e-commerce solutions including shopping carts, payment gateways, inventory management, and order tracking. We help you sell online effectively and grow your business.',
                'icon' => 'cart',
                'features' => ['Payment Integration', 'Inventory Management', 'Order Tracking', 'Mobile Friendly'],
                'technologies' => ['Laravel', 'Stripe', 'MySQL', 'Vue.js'],
                'status' => 'active',
                'sort_order' => 2,
            ],
            [
                'title' => 'Web Application Development',
                'slug' => 'web-application-development',
                'description' => 'Custom web applications built to streamline your business operations. From CRM systems to project management tools, we develop solutions that increase productivity and efficiency.',
                'icon' => 'app',
                'features' => ['Custom Features', 'API Integration', 'User Management', 'Real-time Updates'],
                'technologies' => ['Laravel', 'React', 'PostgreSQL', 'Docker'],
                'status' => 'active',
                'sort_order' => 3,
            ],
            [
                'title' => 'IT Support & Maintenance',
                'slug' => 'it-support-maintenance',
                'description' => 'Comprehensive IT support services including hardware troubleshooting, software installation, network setup, and server maintenance. We provide fast response times and reliable solutions.',
                'icon' => 'support',
                'features' => ['24/7 Support', 'Remote Assistance', 'On-site Visits', 'Preventive Maintenance'],
                'technologies' => ['Windows', 'Linux', 'Networking', 'Security'],
                'status' => 'active',
                'sort_order' => 4,
            ],
            [
                'title' => 'Network Solutions',
                'slug' => 'network-solutions',
                'description' => 'Professional network solutions including LAN/WAN setup, firewall configuration, VPN setup, and network security. We ensure your network is fast, secure, and reliable.',
                'icon' => 'network',
                'features' => ['Network Design', 'Security Setup', 'VPN Configuration', 'Monitoring'],
                'technologies' => ['Cisco', 'Ubiquiti', 'pfSense'],
                'status' => 'active',
                'sort_order' => 5,
            ],
            [
                'title' => 'Cloud Solutions',
                'slug' => 'cloud-solutions',
                'description' => 'Cloud solutions including AWS, Google Cloud, and Azure implementation. We help you migrate to the cloud, optimize costs, and manage your cloud infrastructure efficiently.',
                'icon' => 'cloud',
                'features' => ['Cloud Migration', 'Infrastructure Setup', 'Cost Optimization', '24/7 Monitoring'],
                'technologies' => ['AWS', 'Google Cloud', 'Azure', 'Docker'],
                'status' => 'active',
                'sort_order' => 6,
            ],
            [
                'title' => 'Database Management',
                'slug' => 'database-management',
                'description' => 'Professional database services including design, development, migration, and optimization. We work with MySQL, PostgreSQL, MongoDB, and other database systems.',
                'icon' => 'database',
                'features' => ['Database Design', 'Performance Tuning', 'Data Migration', 'Backup Solutions'],
                'technologies' => ['MySQL', 'PostgreSQL', 'MongoDB', 'Redis'],
                'status' => 'active',
                'sort_order' => 7,
            ],
            [
                'title' => 'UI/UX Design',
                'slug' => 'ui-ux-design',
                'description' => 'Professional UI/UX design services creating intuitive interfaces and seamless user experiences. We combine aesthetics with functionality to deliver designs that users love.',
                'icon' => 'design',
                'features' => ['User Research', 'Wireframing', 'Prototyping', 'Responsive Design'],
                'technologies' => ['Figma', 'Adobe XD', 'Sketch'],
                'status' => 'active',
                'sort_order' => 8,
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
