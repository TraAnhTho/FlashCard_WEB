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
        if (!Schema::hasTable('nguoidung')) {
            Schema::create('nguoidung', function (Blueprint $table) {
                $table->bigIncrements('mand')->primary();
                $table->string('tennd');
                $table->string('email')->unique();
                $table->string('matkhaund');
                $table->date('ngaysinh');
                $table->string('hinhanh')->nullable();
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('admin')) {
        Schema::create('admin', function (Blueprint $table) {
            $table->bigIncrements('maad')->primary(); // Khóa chính 
            $table->string('tenad');
            $table->string('matkhauad');
        });
    }
    if (!Schema::hasTable('bocard')) {
        Schema::create('bocard', function (Blueprint $table) {
            $table->bigIncrements('malist')->primary(); // Khóa chính 
            $table->string('tenlist');
            $table->string('mota');
            $table->unsignedBigInteger('mand'); // Cột tham chiếu đến khóa chính
            $table->foreign('mand')->references('mand')->on('nguoidung')->onDelete('cascade');
        });
    }if (!Schema::hasTable('card')) {

        Schema::create('card', function (Blueprint $table) {
            $table->bigIncrements('macard')->primary(); // Khóa chính 
            $table->unsignedBigInteger('malist'); // Cột tham chiếu đến khóa chính
            $table->foreign('malist')->references('malist')->on('bocard')->onDelete('cascade');
            $table->string('dinhnghia');
            $table->string('thuatngu');
        });}
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nguoidung');
        Schema::dropIfExists('admin');
        Schema::dropIfExists('bocard');
        Schema::dropIfExists('card');
    }
};
