<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataKehadiranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('data_kehadiran');
        Schema::create('data_kehadiran', function (Blueprint $table) {
            $table->id();
            $table->text('keterangan')->nullable(false);
            $table->dateTime('tanggal_kehadiran')->nullable(false);
            $table->unsignedBigInteger('guru_id')->nullable();
            $table->timestamps();
            $table->foreign('guru_id')->on('data_guru')->references('id')->onUpdate('set null')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_kehadiran');
    }
}
