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
        Schema::create('kknunmuls', function (Blueprint $table) {
            $table->id();
            $table->string('namaProker');
            $table->string('pj');
            $table->string('deskripsiProker');
            $table->string('fotoProker');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kknunmuls');
    }
};
