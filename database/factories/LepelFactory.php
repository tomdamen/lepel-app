<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\lepel>
 */
class LepelFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {
        return [
            'description' => fake()->sentence(),
            'user_id' => fake()->randomDigit(),
            'date' => fake()->date(),
        ];
    }
}