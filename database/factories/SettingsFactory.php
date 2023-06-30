<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Settings>
 */
class SettingsFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {
        return [
            'user_id' => fake()->randomDigit(),
            'default_spoons_per_morning' => fake()->randomNumber(1, 4),
            'default_spoons_per_afternoon' => fake()->randomNumber(1, 4),
            'default_spoons_per_evening' => fake()->randomNumber(1, 4),
        ];
    }
}