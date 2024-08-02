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
        Schema::create('anggotaKepengurusan', function (Blueprint $table) {
            $table->id();
            $table->string('namaAnggota');
            $table->string('jabatanAnggota');
            $table->string('fotoAnggota');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggotaKepengurusan');
    }
};
