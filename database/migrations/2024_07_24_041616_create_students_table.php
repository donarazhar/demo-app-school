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
            $table->id();
            $table->string('nis')->nullable();
            // Suggested code may be subject to a license. Learn more: ~LicenseLog:1063140403.
            $table->string('name');
            // Suggested code may be subject to a license. Learn more: ~LicenseLog:2028969416.
            $table->enum('gender', ['Male', 'Female'])->default('Male');
            $table->date('birthday')->nullable();
            // Suggested code may be subject to a license. Learn more: ~LicenseLog:1664644044.
            $table->enum('religion', ['Islam', 'Katolik', 'Protestan', 'Hindu', 'Budha', 'Khonghucu']);
            $table->string('contact')->nullable();
            $table->string('profile')->nullable();
            $table->timestamps();
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
