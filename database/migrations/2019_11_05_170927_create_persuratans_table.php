<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersuratansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persuratans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('nomor_surat');
            $table->string('jenis_surat');
            $table->string('pemohon');
            $table->bigInteger('surat');
            $table->enum('status_surat', ["Belum Diproses", "Cetak Sendiri", "Telah Diproses"])->default("Belum Diproses");
            $table->string('tanggal_terbit');
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
        Schema::dropIfExists('persuratans');
    }
}
