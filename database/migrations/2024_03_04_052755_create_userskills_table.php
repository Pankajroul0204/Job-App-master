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
        Schema::create('userskills', function (Blueprint $table) {
            $table->bigIncrements('user_skill_id');
            $table->string('user_id');
            $table->string('user_skills1')->nullable();
            $table->string('user_skills2')->nullable();
            $table->string('user_skills3')->nullable();
            $table->string('user_skills4')->nullable();
            $table->string('user_skills5')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('userskills');
    }
};
