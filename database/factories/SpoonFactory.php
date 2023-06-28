<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\spoon>
 */
class SpoonFactory extends Factory {
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
            'amount_spoons_used_for_activity' => fake()->numberBetween(1, 3),
            'part_of_day' => fake()->numberBetween(1, 3),
        ];
    }
}