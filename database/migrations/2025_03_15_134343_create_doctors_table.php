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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phone_number')->nullable();
            $table->text('bio')->nullable();
            $table->text('about')->nullable();
            $table->integer('experience_years')->default(0);
            $table->foreignId('doctor_title_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('speciality_id')->nullable()->constrained('specialities')->nullOnDelete();
            $table->decimal('fees', 10, 2)->default(0);
            $table->decimal('rate', 2, 1)->default(0);
            $table->integer('waiting_time')->default(0);
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
