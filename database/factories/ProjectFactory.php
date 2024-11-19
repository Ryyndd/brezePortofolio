<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories = ['mobile', 'website', 'dekstop', 'api' ,'design']; // Ganti dengan nilai enum yang telah Anda definisikan

            return [
                'pro_image' => 'html.png',
                'pro_title' => $this->faker->sentence(1, false),
                'pro_category' => $this->faker->randomElement($categories), // Mengambil nilai acak dari array kategori
                'pro_slug' => Str::slug($this->faker->sentence(rand(1, 2), false)),
                'pro_description' => $this->faker->text()
            ];
    }
}
