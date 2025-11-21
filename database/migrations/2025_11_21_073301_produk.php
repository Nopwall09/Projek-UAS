<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->id(); // produk_id auto increment
            $table->string('produk_id', 55)->unique();

            // Kategori
            $table->string('kategori_id', 5);
            $table->foreign('kategori_id')->references('kategori_id')->on('kategori')->cascadeOnDelete();

            $table->string('nama_produk', 55);
            $table->string('ukuran', 26)->nullable();
            $table->string('warna', 20)->nullable();
            $table->integer('harga_modal');
            $table->integer('harga_jual');
            $table->integer('stok');
            $table->string('deskripsi', 100)->nullable();
});

    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
