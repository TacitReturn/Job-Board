<?php

namespace Database\Factories;

use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" => fake()->jobTitle,
            "description" => fake()->paragraphs,
            "salary" => fake()->numberBetween(30_000, 100_000),
            "location" => fake()->locale,
            "category" => fake()->randomElement(Job::$category),
            "experience" => fake()->randomElement(Job::$experience),
        ];
    }
}
