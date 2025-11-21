<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');

            $table->foreignId('role_id')
                ->constrained('role', 'role_id')
                ->cascadeOnDelete();

            $table->string('user_nama', 55);
            $table->string('user_usn', 25);
            $table->string('user_pw', 255);
            $table->string('user_email', 50);
            $table->integer('user_no');
            $table->timestamp('last_login')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
