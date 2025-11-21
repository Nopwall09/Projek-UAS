<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('user_to_role', function (Blueprint $table) {
            $table->id('id'); // primary key pivot

            // FK ke users
            $table->foreignId('user_id')
                  ->constrained('users', 'user_id')
                  ->cascadeOnDelete();

            // FK ke role
            $table->foreignId('role_id')
                  ->constrained('role', 'role_id')
                  ->cascadeOnDelete();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user_to_role');
    }
};
