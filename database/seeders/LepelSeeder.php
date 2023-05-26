<?php

namespace Database\Seeders;

use App\Models\Lepel;
use Illuminate\Database\Seeder;
use Database\Factories\LepelFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LepelSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        Lepel::factory(5)->create();
    }
}