<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TestimonialSeeder extends Seeder
{
    public function run(): void
    {
        $testimonials = [
            [
                'name' => 'Ahmed Al-Rashid',
                'role' => 'CEO',
                'company' => 'TechStart Arabia',
                'content' => 'Working with Wave Development was an absolute pleasure. They delivered our e-commerce platform on time and exceeded our expectations. Their attention to detail and technical expertise is remarkable.',
                'rating' => 5,
                'is_featured' => true,
            ],
            [
                'name' => 'Sarah Johnson',
                'role' => 'Project Manager',
                'company' => 'Global Solutions Inc',
                'content' => 'The IT support provided by Wave Development transformed our internal systems. Response times are incredible, and their proactive approach has saved us from potential disasters multiple times.',
                'rating' => 5,
                'is_featured' => true,
            ],
            [
                'name' => 'Mohammed Khan',
                'role' => 'Founder',
                'company' => 'StartupHub BD',
                'content' => 'As a startup, we needed a reliable partner who could understand our vision and translate it into a powerful web application. Wave Development did exactly that!',
                'rating' => 5,
                'is_featured' => true,
            ],
            [
                'name' => 'Fatima Hassan',
                'role' => 'Director',
                'company' => 'EduLearn Platform',
                'content' => 'The educational portal they built for us has helped thousands of students. Professional, responsive, and incredibly skilled team!',
                'rating' => 5,
                'is_featured' => false,
            ],
        ];

        foreach ($testimonials as $index => $testimonial) {
            Testimonial::create([
                'name' => $testimonial['name'],
                'slug' => Str::slug($testimonial['name']),
                'role' => $testimonial['role'],
                'company' => $testimonial['company'],
                'content' => $testimonial['content'],
                'rating' => $testimonial['rating'],
                'is_featured' => $testimonial['is_featured'],
                'is_active' => true,
                'sort_order' => $index,
            ]);
        }
    }
}
