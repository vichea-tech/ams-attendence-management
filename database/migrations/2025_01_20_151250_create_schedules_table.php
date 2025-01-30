<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('room_id')->constrained()->onDelete('cascade');
            $table->string('day'); // Monday, Tuesday, etc.

            // Time slots - allow multiple courses per room per day
            // 7-9 AM slot
            $table->foreignId('time_7_9_am')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('time_7_9_am_course')->nullable()->constrained('courses')->onDelete('set null');

            // 9-11 AM slot
            $table->foreignId('time_9_11_am')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('time_9_11_am_course')->nullable()->constrained('courses')->onDelete('set null');

            // 1-3 PM slot
            $table->foreignId('time_1_3_pm')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('time_1_3_pm_course')->nullable()->constrained('courses')->onDelete('set null');

            // 3-5 PM slot
            $table->foreignId('time_3_5_pm')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('time_3_5_pm_course')->nullable()->constrained('courses')->onDelete('set null');


            // Unique constraint on room_id, day to prevent duplicate schedules
            $table->unique(['room_id', 'day'], 'unique_room_day');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('schedules');
    }
};
