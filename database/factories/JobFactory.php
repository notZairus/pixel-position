<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employer;

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
            'employer_id' => Employer::factory(),
            'title' => fake()->jobTitle(),
            'schedule' => fake()->randomElement(['Full Time', 'Part Time']),
            'salary' => fake()->randomElement(['Php 50,000', 'Php 35,000', 'Php 90,000']),
            'url' => fake()->url(),
            'featured' => fake()->randomElement([true, false])
        ];
    }
}
