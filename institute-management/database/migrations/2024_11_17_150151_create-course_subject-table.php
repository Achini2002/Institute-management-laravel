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
        Schema::create('courseSubject', function (Blueprint $table) {
            $table->string('id',45)->primary();
            $table->foreignId('course_course_id')->constrained('course','course_id');
            $table->foreignId('subject_sub_id')->constrained('subject','sub_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courseSubject');
    }
};
