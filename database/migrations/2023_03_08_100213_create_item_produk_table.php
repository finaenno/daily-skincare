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
        Schema::create('item_produk', function (Blueprint $table) {
            $table->bigIncrements('id_produk');
            $table->string('nama_produk');
            $table->text('deskripsi_produk');
            $table->bigInteger('harga_produk');
            $table->unsignedBigInteger('id_kategori_produk')->nullable();
            
            $table->foreign('id_kategori_produk')->references('id_kategori_produk')->on('kategori_produk');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_produk');
    }
};
