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
        Schema::create('detail_transaksi', function (Blueprint $table) {
            $table->string('detail_id', 6)->primary();
            $table->foreignId('produk_id')->constrained('produk')->cascadeOnDelete();
            $table->string('transaksi_id', 6);
            $table->integer('qty');
            $table->decimal('harga_satuan', 10, 2);
            $table->decimal('subtotal', 10, 2);

            $table->foreign('transaksi_id')->references('transaksi_id')->on('transaksi')->cascadeOnDelete();
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
