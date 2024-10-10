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
    Schema::create('produks', function (Blueprint $table) {
        $table->id('id_produk');
        $table->foreignId('id_barang')->constrained('barangs');
        $table->string('nama_produk');
        $table->decimal('harga', 10, 2);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
