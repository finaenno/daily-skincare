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
        Schema::create('image', function (Blueprint $table) {
            $table->bigIncrements('id_image');
            $table->string('nama_image');
            $table->unsignedBigInteger('id_produk')->nullable();
            
            $table->foreign('id_produk')->references('id_produk')->on('item_produk');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('image');
    }
};
