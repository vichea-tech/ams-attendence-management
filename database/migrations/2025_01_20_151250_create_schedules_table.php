<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('room_id')->constrained()->onDelete('cascade');
            $table->foreignId('course_id')->constrained()->onDelete('cascade');
            $table->string('day'); // Monday, Tuesday, etc.

            // Time slots - allow multiple courses per room per day by linking with course_id
            $table->foreignId('time_7_9_am')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('time_9_11_am')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('time_1_3_pm')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('time_3_5_pm')->nullable()->constrained('users')->onDelete('set null');

            // Unique constraint on room_id, day, and course_id to prevent duplicate courses in the same room and day
            $table->unique(['room_id', 'day', 'course_id'], 'unique_room_day_course');

            $table->timestamps();
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
