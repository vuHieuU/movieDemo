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
        Schema::create('category_films', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('film_id');
            $table->unsignedBigInteger('cate_id');
            $table->timestamps();
    
            $table->foreign('film_id')->references('id')->on('films')->onDelete('cascade');
            $table->foreign('cate_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_films');
    }
};
