<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('spoons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->text('description');
            $table->date('date');
            $table->integer('spoons_for_activity');
            $table->foreignId('part_of_day');
            $table->boolean('private');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('spoons');
    }
};