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
        Schema::create('recipes', function (Blueprint $table) {
            $table->id('id_recipe');
            $table->string('nama');
            $table->text('deskripsi');
            $table->enum('kategori', ['dessert', 'traditional', 'international', 'drink', 'cake']);
            $table->string('gambar_1');
            $table->string('gambar_2')->nullable();
            $table->string('cara_membuat',length: 2000);
            $table->string('bahan_bahan',length: 2000);
            $table->string('nama_bahan_bahan_lain',length: 2000)->nullable();
            $table->string('bahan_bahan_lain',length: 2000)->nullable();
            $table->integer('id_user');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipes');
    }
};
