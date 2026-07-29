<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        Portfolio::create([
            'title' => 'E-Commerce Platform',
            'slug' => 'ecommerce-platform',
            'description' => 'Full-featured online store with cart, checkout, and payment integration.',
            'category' => 'web-development',
            'technologies' => ['Laravel', 'MySQL', 'Stripe', 'Vue.js'],
            'status' => 'published',
            'featured' => true,
        ]);

        Portfolio::create([
            'title' => 'Inventory Management System',
            'slug' => 'inventory-management-system',
            'description' => 'Real-time inventory tracking with barcode scanning and reporting.',
            'category' => 'web-development',
            'technologies' => ['Laravel', 'Vue.js', 'PostgreSQL'],
            'status' => 'published',
            'featured' => true,
        ]);
    }
}
