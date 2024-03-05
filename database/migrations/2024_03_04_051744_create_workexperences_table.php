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
        Schema::create('workexperences', function (Blueprint $table) {
            $table->bigIncrements('work_exp_id');
            $table->string('user_id');
            $table->string('company_name')->nullable();
            $table->string('job_title')->nullable();
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
            $table->string('responsibilities')->nullable();
            $table->string('skills_accquired')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workexperences');
    }
};
