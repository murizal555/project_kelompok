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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id('id_booking');
            $table->foreignId('id_pelanggan');
            // $table->foreignId('id_transaksi');
            $table->string('nm');
            $table->string('room');
            $table->string('fasilitas');
            $table->date('cek_in');
            $table->date('cek_out');
            $table->string('email');
            $table->string('no_tlp');
            $table->integer('jumlah_tamu');
            $table->foreign('id_pelanggan')->references('id_pelanggan')->on('pelanggans');
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
        Schema::dropIfExists('bookings');
    }
};
