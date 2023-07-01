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
        Schema::create('budaya', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 50);
            $table->text('foto_url');
            $table->text('deskripsi');
            $table->foreignId('prov_id')->references('id')->on('provinsi');
            $table->foreignId('kat_id')->references('id')->on('kategori');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('budaya');
    }
};
