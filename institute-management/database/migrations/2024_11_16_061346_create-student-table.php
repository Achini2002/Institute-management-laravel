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
        Schema::create('student', function (Blueprint $table) {
            $table->id('stu_id');
            $table->string('first_name',45);
            $table->string('last_name',45);
            $table->date('dob');
            $table->string('gender',45);
            $table->string('contact_number',45);
            $table->string('email',45)->unique();
            $table->string('address',50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student');
    }
};
