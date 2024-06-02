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
        Schema::create('register', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 15);
            $table->string('jabatan', 15);
            $table->string('perusahaan', 50);
            $table->string('alamat', 50);
            $table->string('telepon', 50);
            $table->string('email', 50);
            $table->string('totalhargastand', 50);
            $table->string('totalhargapromosi', 50);
            $table->string('paketsponsor', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('register');
    }
};
