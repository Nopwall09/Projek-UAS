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
        Schema::create('log_stok', function (Blueprint $table) {
            $table->string('log_id', 5)->primary();
            $table->foreignId('produk_id')->constrained('produk')->cascadeOnDelete();
            $table->string('perubahan', 55);
            $table->integer('stok_sebelumnya');
            $table->integer('stok_sesudah');
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
