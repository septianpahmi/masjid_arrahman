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
        Schema::create('infaks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_infak');
            $table->string('nominal');
            $table->enum('status', ['Berhasil', 'Pending', 'Gagal'])->default('Pending');
            $table->timestamps();

            $table->foreign('id_infak')->references('id')->on('kat_infaks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infaks');
    }
};
