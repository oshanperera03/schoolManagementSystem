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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('tch_name');
            $table->string('tch_employeeId')->unique();
            $table->string('tch_subject');
            $table->enum('tch_gender', ['male', 'female']);
            $table->string('tch_phone');
            $table->date('tch_dob');
            $table->string('tch_email')->nullable()->unique();
            $table->date('tch_joiningDate');
            $table->string('status')->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
