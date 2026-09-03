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
            $table->string('stu_name');
            $table->string('stu_admissionNo')->unique();
            $table->string('stu_address');
            $table->enum('stu_gender', ['male', 'female']);
            $table->string('stu_phone')->nullable();
            $table->date('stu_dob');
            $table->string('stu_email')->nullable()->unique();
            $table->date('stu_admissionDate');
            $table->string('status')->default('active');
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
