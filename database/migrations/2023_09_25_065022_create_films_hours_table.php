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
        Schema::create('films_hours', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('film_id');
            $table->unsignedBigInteger('hour_id');
            $table->string('isActive')->default(1);
            $table->timestamps();
    
            $table->foreign('film_id')->references('id')->on('films')->onDelete('cascade');
            $table->foreign('hour_id')->references('id')->on('hours')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films_hours');
    }
};
