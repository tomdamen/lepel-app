<?php

namespace Database\Seeders;

use App\Models\PartOfDay;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PartOfDaySeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        PartOfDay::create([
            'description' => 'ochtend'
        ]);

        PartOfDay::create([
            'description' => 'middag'
        ]);

        PartOfDay::create([
            'description' => 'avond'
        ]);
    }
}