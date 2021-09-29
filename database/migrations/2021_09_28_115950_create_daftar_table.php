<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_dokter');
            $table->string('nama_pemilik');
            $table->string('jenis_hewan');
            $table->integer('usia');
            $table->date('tanggal');
            $table->string('riwayat_penyakit');
            $table->string('alamat');
            $table->string('nama_dokter');
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
        Schema::dropIfExists('daftar');
    }
}
