<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SkillSeeder extends Seeder
{
    public function run(): void
    {
        $skills = [
            // Backend
            ['name' => 'Laravel', 'category' => 'backend', 'level' => 'expert', 'percentage' => 95],
            ['name' => 'PHP', 'category' => 'backend', 'level' => 'expert', 'percentage' => 95],
            ['name' => 'MySQL', 'category' => 'backend', 'level' => 'expert', 'percentage' => 90],
            ['name' => 'PostgreSQL', 'category' => 'backend', 'level' => 'advanced', 'percentage' => 85],
            
            // Frontend
            ['name' => 'Vue.js', 'category' => 'frontend', 'level' => 'advanced', 'percentage' => 85],
            ['name' => 'React', 'category' => 'frontend', 'level' => 'advanced', 'percentage' => 80],
            ['name' => 'JavaScript', 'category' => 'frontend', 'level' => 'expert', 'percentage' => 90],
            ['name' => 'HTML5', 'category' => 'frontend', 'level' => 'expert', 'percentage' => 95],
            ['name' => 'CSS3', 'category' => 'frontend', 'level' => 'expert', 'percentage' => 90],
            ['name' => 'TailwindCSS', 'category' => 'frontend', 'level' => 'advanced', 'percentage' => 85],
            
            // DevOps & Cloud
            ['name' => 'Docker', 'category' => 'devops', 'level' => 'advanced', 'percentage' => 80],
            ['name' => 'AWS', 'category' => 'devops', 'level' => 'advanced', 'percentage' => 75],
            ['name' => 'Linux Server', 'category' => 'devops', 'level' => 'expert', 'percentage' => 90],
            
            // IT Services
            ['name' => 'Network Security', 'category' => 'it-services', 'level' => 'advanced', 'percentage' => 85],
            ['name' => 'Windows Server', 'category' => 'it-services', 'level' => 'advanced', 'percentage' => 80],
            
            // Tools
            ['name' => 'Git/GitHub', 'category' => 'tools', 'level' => 'expert', 'percentage' => 90],
            ['name' => 'VS Code', 'category' => 'tools', 'level' => 'expert', 'percentage' => 95],
            ['name' => 'Figma', 'category' => 'tools', 'level' => 'intermediate', 'percentage' => 70],
        ];

        foreach ($skills as $index => $skill) {
            Skill::create([
                'name' => $skill['name'],
                'slug' => Str::slug($skill['name']),
                'category' => $skill['category'],
                'level' => $skill['level'],
                'percentage' => $skill['percentage'],
                'sort_order' => $index,
            ]);
        }
    }
}
