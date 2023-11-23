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
        Schema::create('achievement_employees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('achievement_id')->references('id')->on('achievements')->onDelete('cascade');
            $table->date('achievement_date')->default(now());
            $table->foreignId('employee_id')->references('id')->on('employees')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('achievement_employees');
    }
};
