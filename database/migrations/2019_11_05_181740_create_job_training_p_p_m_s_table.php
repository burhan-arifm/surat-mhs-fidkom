<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobTrainingPPMSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_training_p_p_m_s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('instansi_penerima');
            $table->text('alamat_instansi');
            $table->string('dosen_pembimbing');
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
        Schema::dropIfExists('job_training_p_p_m_s');
    }
}
