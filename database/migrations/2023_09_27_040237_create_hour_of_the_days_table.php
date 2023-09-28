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
        Schema::create('hour_of_the_days', function (Blueprint $table) {
            $table->id();
            $table->boolean('isActive')->default(false);
            $table->unsignedBigInteger('hour_id');
            $table->unsignedBigInteger('day_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hour_of_the_days');
    }
};
