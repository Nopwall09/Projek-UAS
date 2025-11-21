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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->string('transaksi_id', 6)->primary();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->string('detail_id', 6);
            $table->string('pay_id', 5);
            $table->string('nama_umkm', 50);
            $table->string('cust_nama', 40);
            $table->string('no_transaksi', 8);
            $table->decimal('total', 10, 2);
            $table->decimal('KEMBALI', 10, 2);
            $table->decimal('bayar', 10, 2);
            $table->timestamp('tgl')->nullable();
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
