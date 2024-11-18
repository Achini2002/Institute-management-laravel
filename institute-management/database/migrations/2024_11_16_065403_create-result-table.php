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
        Schema::create('result', function (Blueprint $table) {
            $table->id('result_id');
            $table->string('grade',45);
            $table->string('mark_obtained',45);
            $table->foreignId('student_stu_id')->constrained('student','stu_id');
            $table->foreignId('exam_exam_id')->constrained('exam','exam_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('result');
    }
};
