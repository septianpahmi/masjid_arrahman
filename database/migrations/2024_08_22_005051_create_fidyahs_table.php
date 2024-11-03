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
        Schema::create('fidyahs', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->Enum('gender', ['pria', 'wanita']);
            $table->string('phone');
            $table->string('email');
            $table->string('jumlah');
            $table->string('nominal');
            $table->enum('status', ['Berhasil', 'Pending', 'Gagal'])->default('Pending');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fidyahs');
    }
};
