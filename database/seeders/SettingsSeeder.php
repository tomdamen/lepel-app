<?php

namespace Database\Seeders;

use App\Models\Settings;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SettingsSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        Settings::factory()->create([
            'user_id' => '1',
            'spoons_per_day' => '12',
            'default_spoons_per_morning' => '3',
            'default_spoons_per_afternoon' => '3',
            'default_spoons_per_evening' => '3',
        ]);

        Settings::factory(5)->create(['spoons_per_day' => '12']);
    }
}