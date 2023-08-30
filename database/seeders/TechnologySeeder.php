<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = [
            ['name' => 'React', 'color' => '#61DAFB', 'type' => 'JavaScript'],
            ['name' => 'Vue.js', 'color' => '#42b883', 'type' => 'JavaScript'],
            ['name' => 'Angular', 'color' => '#DD0031', 'type' => 'TypeScript'],
            ['name' => 'Laravel', 'color' => '#FF2D20', 'type' => 'PHP'],
            ['name' => 'Node.js', 'color' => '#8CC84B', 'type' => 'JavaScript'],
            ['name' => 'Django', 'color' => '#092E20', 'type' => 'Python'],
            ['name' => 'Ruby on Rails', 'color' => '#CC0000', 'type' => 'Ruby'],
            ['name' => 'Spring Boot', 'color' => '#6DB33F', 'type' => 'Java'],
            ['name' => 'ASP.NET Core', 'color' => '#512BD4', 'type' => 'C#'],
            ['name' => 'Flutter', 'color' => '#02569B', 'type' => 'Dart']
        ];

        foreach ($technologies as $technologiesData) {
            Technology::create($technologiesData);
        }
    }
}
