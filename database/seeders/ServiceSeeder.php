<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        Service::create([
            'title' => 'Web Development',
            'slug' => 'web-development',
            'icon' => 'code',
            'description' => 'Custom Laravel applications, e-commerce solutions, and responsive websites.',
            'features' => ['Custom Laravel Apps', 'E-commerce', 'CMS Development', 'API Integration'],
            'technologies' => ['Laravel', 'PHP', 'MySQL', 'HTML/CSS'],
            'status' => 'active',
        ]);

        Service::create([
            'title' => 'IT Support',
            'slug' => 'it-support',
            'icon' => 'headset',
            'description' => 'Network setup, hardware troubleshooting, and server administration.',
            'features' => ['Network Setup', 'Hardware Support', 'Server Admin', 'Security Audits'],
            'technologies' => ['Windows', 'Linux', 'Networking', 'Security'],
            'status' => 'active',
        ]);
    }
}
