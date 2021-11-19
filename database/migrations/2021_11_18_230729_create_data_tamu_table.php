<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTamuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_tamu', function (Blueprint $table) {
            $table->id();
            $table->string('nama_tamu', 150)->nullable(false);
            $table->text('asal_tempat')->nullable(false);
            $table->date('tanggal_mengunjungi')->nullable(false);
            $table->text('keterangan')->nullable();
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
        Schema::dropIfExists('data_tamu');
    }
}
