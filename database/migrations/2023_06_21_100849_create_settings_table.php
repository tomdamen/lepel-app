<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->integer('spoons_per_day');
            $table->integer('default_spoons_per_morning');
            $table->integer('default_spoons_per_afternoon');
            $table->integer('default_spoons_per_evening');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        //
    }
};