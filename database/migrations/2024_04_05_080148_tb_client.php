<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('nama_client');
            $table->string('hanphone_client');
            $table->string('link_toko_client');
            $table->string('harga_sesi_live')->nullable();
            $table->enum('status_pembayaran', ['Lunas', 'Belum Lunas']);
            $table->enum('status_live', ['Aktif', 'Tidak Aktif']);
            $table->string('kategori_produk');
            $table->unsignedBigInteger('host_terpilih')->nullable();
            $table->foreign('host_terpilih')->references('id')->on('hosts')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
};
