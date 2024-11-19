<?php

namespace Database\Factories;

use App\Models\ProjectStack;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProjectStack>
 */
class ProjectStackFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = ProjectStack::class;

    public function definition(): array
    {
        return [
            'project_id' => $this->faker->numberBetween(1, 10), // Ganti rentang sesuai dengan ID proyek yang tersedia
            'techstack_id' => $this->faker->numberBetween(1, 10), // Ganti rentang sesuai dengan ID techstack yang tersedia
        ];
    }
}
