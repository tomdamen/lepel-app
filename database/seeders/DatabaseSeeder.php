<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Settings;
use Illuminate\Database\Seeder;
use Database\Seeders\SpoonSeeder;
use Database\Seeders\SettingsSeeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     */
    public function run(): void {
        $this->call(SpoonSeeder::class);
        $this->call(SettingsSeeder::class);

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Settings::factory()->create([
            'user_id' => '1',
            'spoons_per_day' => '12',
            'default_spoons_per_morning' => '3',
            'default_spoons_per_afternoon' => '3',
            'default_spoons_per_evening' => '3',
        ]);

        \App\Models\User::factory(10)->create();
    }
}