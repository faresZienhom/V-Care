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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained()->cascadeOnDelete();
            $table->foreignId('doctor_id')->constrained()->cascadeOnDelete();
            $table->foreignId('shift_id')->constrained('facility_working_days_shifts')->cascadeOnDelete();
            $table->unsignedSmallInteger('slot_index');
            $table->date('date');
            $table->boolean('has_insurance')->default(false);
            $table->decimal('final_price', 10, 2);
            $table->decimal('price_before_discount', 10, 2);
            $table->time('from')->nullable();
            $table->time('to')->nullable();
            $table->enum('status', [0,1,2])->default(0);
            $table->text('note')->nullable();
            $table->unique(['shift_id', 'slot_index', 'date'], 'unique_slot_booking');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};