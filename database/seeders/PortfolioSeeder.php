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
                'title' => 'E-Commerce Platform',
                'slug' => 'ecommerce-platform',
                'description' => 'Full-featured online store with product management, cart functionality, checkout process, and order tracking.',
                'content' => 'Complete e-commerce solution with modern design and secure payment integration.',
                'category' => 'laravel',
                'technologies' => ['Laravel', 'MySQL', 'Stripe'],
                'client' => null,
                'url' => null,
                'github_url' => null,
                'featured' => true,
                'status' => 'published',
                'sort_order' => 1,
            ],
            [
                'title' => 'Inventory Management System',
                'slug' => 'inventory-management-system',
                'description' => 'Real-time inventory tracking with barcode scanning, stock alerts, reporting dashboard, and multi-user support.',
                'content' => 'Comprehensive inventory management solution for businesses of all sizes.',
                'category' => 'inventory',
                'technologies' => ['Laravel', 'Vue.js', 'PostgreSQL'],
                'client' => null,
                'url' => null,
                'github_url' => null,
                'featured' => true,
                'status' => 'published',
                'sort_order' => 2,
            ],
            [
                'title' => 'Customer Relationship Manager',
                'slug' => 'customer-relationship-manager',
                'description' => 'CRM system for managing leads, contacts, deals, and customer communications with analytics and automation.',
                'content' => 'Powerful CRM tool to streamline your customer relationships and boost sales.',
                'category' => 'crm',
                'technologies' => ['Laravel', 'MySQL', 'jQuery'],
                'client' => null,
                'url' => null,
                'github_url' => null,
                'featured' => true,
                'status' => 'published',
                'sort_order' => 3,
            ],
            [
                'title' => 'Task Management System',
                'slug' => 'task-management-system',
                'description' => 'Kanban-style task board with drag-and-drop, due dates, priorities, comments, file attachments, and team collaboration.',
                'content' => 'Modern project management tool to keep your team organized and productive.',
                'category' => 'productivity',
                'technologies' => ['Laravel', 'React', 'Docker'],
                'client' => null,
                'url' => null,
                'github_url' => null,
                'featured' => true,
                'status' => 'published',
                'sort_order' => 4,
            ],
            [
                'title' => 'Blog Platform',
                'slug' => 'blog-platform',
                'description' => 'SEO-optimized blog with rich text editor, categories, tags, comments, newsletter subscription, and social sharing.',
                'content' => 'Feature-rich blog platform perfect for content creators and businesses.',
                'category' => 'content',
                'technologies' => ['Laravel', 'Tailwind', 'Redis'],
                'client' => null,
                'url' => null,
                'github_url' => null,
                'featured' => true,
                'status' => 'published',
                'sort_order' => 5,
            ],
            [
                'title' => 'RESTful API Gateway',
                'slug' => 'restful-api-gateway',
                'description' => 'Scalable API gateway with authentication, rate limiting, caching, documentation, and multiple service integration.',
                'content' => 'Enterprise-grade API management solution for modern applications.',
                'category' => 'api',
                'technologies' => ['Laravel', 'API', 'OAuth2'],
                'client' => null,
                'url' => null,
                'github_url' => null,
                'featured' => true,
                'status' => 'published',
                'sort_order' => 6,
            ],
        ];

        foreach ($portfolios as $portfolio) {
            Portfolio::create($portfolio);
        }
    }
}
