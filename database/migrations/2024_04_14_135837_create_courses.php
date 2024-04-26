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
        Schema::create('courses', function (Blueprint $table) {
            $table->id('C_id');
            $table->string('Course_name');
            $table->string('Course_Price');
            $table->unsignedBigInteger('Teacher_id');
            
           
            $table->foreign('Teacher_id')->references('Teacher_id')->on('teachers')->onDelete('cascade');
            $table->string('Course_Time');
            $table->string('Course_Duration');
            $table->string('Course_Img');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
