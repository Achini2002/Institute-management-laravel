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
        Schema::create('institute', function (Blueprint $table) {
            $table->id('inst_id');
            $table->string('inst_name', 45);
            $table->point('location');
            $table->string('contact_number', 45);
            $table->foreignId('branch_branch_id')->constrained('branch', 'branch_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('institute');
    }
};
