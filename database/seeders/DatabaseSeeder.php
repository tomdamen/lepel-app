<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Settings;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\SpoonSeeder;
use Database\Seeders\SettingsSeeder;
use Database\Seeders\PartOfDaySeeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     */
    public function run(): void {
        $this->call(SpoonSeeder::class);
        $this->call(SettingsSeeder::class);
        $this->call(PartOfDaySeeder::class);
        $this->call(UserSeeder::class);
    }
}