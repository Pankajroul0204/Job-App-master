<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('additionaldatas', function (Blueprint $table) {
            $table->bigIncrements('additional_id');
            $table->string('user_id');
            $table->string('certification')->nullable();
            $table->string('language_spoken')->nullable();
            $table->string('hobbies')->nullable();
            $table->string('reverence')->nullable();
            $table->string('cover_letter')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('additionaldatas');
    }
};
