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
        Schema::create('payments_method', function (Blueprint $table) {
            $table->string('pay_id', 5)->primary();
            $table->string('transaksi_id', 6);
            $table->string('pay_method', 25);

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
