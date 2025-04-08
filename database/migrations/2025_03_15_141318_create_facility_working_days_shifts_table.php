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
        Schema::create('facility_working_days_shifts', function (Blueprint $table) {
            $table->id();
            $table->time('from');
            $table->time('to');
            $table->foreignId('facility_day_shifts_id')->constrained('facility_working_days')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facility_working_days_shifts');
    }
};
