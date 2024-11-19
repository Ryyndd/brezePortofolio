<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Techstack>
 */
class TechstackFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories = ['red' , 'orange', 'amber' ,'yellow', 'lime' , 'green' , 'emerald', 'teal', 'cyan' , 'sky' , 'blue' , 'indigo' , 'violet' , 'purple' ,'fuchsia' , 'pink' ,'rose'];
        return [
            //
            'tech_image' => 'html.png',
            'tech_name' => fake()->sentence(1,false),
            'tech_fullname' => fake()->sentence(rand(1,2),false),
            'tech_color' => $this->faker->randomElement($categories), 
            'tech_slug' => Str::slug(fake()->sentence(rand(1,2),false)),
            'tech_description' => fake()->text()
        ];
    }
}
