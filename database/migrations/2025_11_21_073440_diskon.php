<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     *` Run the migrations.
     */
    public function up()
    {
        Schema::create('diskon', function (Blueprint $table) {
            $table->string('diskon_id', 3)->primary();
            $table->string('detail_id', 6);
            $table->string('kode_diskon', 30);
            $table->decimal('nilai_diskon', 10, 2);
            $table->string('jenis_diskon', 15);
            $table->string('status', 25);

            $table->foreign('detail_id')->references('detail_id')->on('detail_transaksi')->cascadeOnDelete();
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
