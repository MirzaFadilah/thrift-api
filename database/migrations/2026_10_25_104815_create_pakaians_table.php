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
    Schema::create('pakaian', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->string('brand');
        $table->integer('harga');
        $table->string('kategori');
        $table->string('ukuran');
        $table->string('kondisi');
        $table->enum('status', ['tersedia', 'terjual'])->default('tersedia');
        $table->string('foto');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pakaian');
    }
};
