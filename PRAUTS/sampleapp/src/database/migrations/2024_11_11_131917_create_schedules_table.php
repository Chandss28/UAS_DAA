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
            $table->string('day');
            $table->date('date');
            $table->time('start_time');     
            $table->time('end_time');
            $table->string('duration_time');
            $table->string('course_name');
            $table->integer('meeting_number');
            $table->string('lecturer');
            $table->string('room');
            $table->timestamps();
            //sesuaikan dengan analisis yang kita buat isinya apa aja
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
