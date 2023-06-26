<?php

namespace Database\Seeders;

use App\Models\Spoon;
use Illuminate\Database\Seeder;
use Database\Factories\SpoonFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SpoonSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        Spoon::factory(5)->create();
    }
}