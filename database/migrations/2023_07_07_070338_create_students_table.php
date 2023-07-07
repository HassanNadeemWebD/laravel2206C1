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
        Schema::create('students', function (Blueprint $table) {
            $table->id('studentID');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('dob');
            $table->string('gender');
            $table->string('email');
            $table->integer('contact');
            $table->timestamps();      // created at  and updated at
        });

    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
