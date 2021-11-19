<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataJadwalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('data_jadwal');
        Schema::create('data_jadwal', function (Blueprint $table) {
            $table->id();
            $table->char('kode_semester', 30)->nullable(false);
            $table->time('jam')->nullable(false);
            $table->string('hari', 10)->nullable(false);
            $table->tinyInteger('status')->nullable(false)->default(0);
            $table->unsignedBigInteger('mapel_id')->nullable();
            $table->unsignedBigInteger('kelas_id')->nullable();
            $table->unsignedBigInteger('jurusan_id')->nullable();
            $table->timestamps();
            $table->foreign('mapel_id')->on('data_mapel')->references('id')->onUpdate('set null')->onDelete('set null');
            $table->foreign('kelas_id')->on('data_kelas')->references('id')->onUpdate('set null')->onDelete('set null');
            $table->foreign('jurusan_id')->on('data_jurusan')->references('id')->onUpdate('set null')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_jadwal');
    }
}
