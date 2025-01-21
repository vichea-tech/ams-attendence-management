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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('room_id')->constrained('rooms')->cascadeOnDelete();
            $table->enum('day', ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday']);
            $table->foreignId('time_7_9_am')->nullable()->constrained('users')->nullOnDelete();
            $table->foreignId('time_9_11_am')->nullable()->constrained('users')->nullOnDelete();
            $table->foreignId('time_1_3_pm')->nullable()->constrained('users')->nullOnDelete();
            $table->foreignId('time_3_5_pm')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamps();
            $table->unique(['room_id', 'day']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
