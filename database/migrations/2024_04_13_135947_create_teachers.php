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
            $table->id('Teacher_id');
$table->string('Teacher_name');
$table->string('Teacher_Address');
$table->BigInteger('Teacher_ID_NO');
$table->string('Teacher_Course_name');
$table->string('Teacher_Status');
$table->string('Teacher_Salary');

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
