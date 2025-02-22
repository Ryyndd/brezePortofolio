<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\ProjectStack;
use App\Models\Techstack;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Techstack::factory(10)->create();
        Project::factory(10)->create();
        ProjectStack::factory(20)->create();
    }
}
