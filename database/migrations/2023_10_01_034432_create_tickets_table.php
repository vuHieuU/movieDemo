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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('film_name'); // Tên bộ phim
            $table->date('selected_date'); // Ngày được chọn
            $table->time('selected_hour'); // Giờ được chọn
            $table->string('selected_room'); // Phòng được chọn
            $table->text('selected_seats'); // Ghế được chọn (dưới dạng chuỗi văn bản)
            $table->unsignedBigInteger('user_id'); // ID của người dùng đặt vé
            $table->string('buyer_name'); // Tên của người mua vé
            $table->unsignedBigInteger('film_id'); // ID của bộ phim (liên kết ngoại)
            $table->timestamps();
            $table->foreign('film_id')->references('id')->on('films');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
