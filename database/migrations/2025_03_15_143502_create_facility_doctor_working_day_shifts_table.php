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
        Schema::create('facility_doctor_working_day_shifts', function (Blueprint $table) {
            $table->id();
            $table->time('from');
            $table->time('to');
            $table->foreignId('shift_id')->constrained('facility_doctor_working_days')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facility_doctor_working_day_shifts');
    }
};


// 4pm    8pm