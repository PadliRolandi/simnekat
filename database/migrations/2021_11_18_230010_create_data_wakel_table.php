<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataWakelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_wakel', function (Blueprint $table) {
            $table->id();
            $table->year('tahun_ajaran')->nullable(false);
            $table->tinyInteger('status')->nullable(false)->default(0);
            $table->unsignedBigInteger('guru_id')->nullable();
            $table->unsignedBigInteger('kelas_id')->nullable();
            $table->unsignedBigInteger('jurusan_id')->nullable();
            $table->timestamps();
            $table->foreign('guru_id')->on('data_guru')->references('id')->onUpdate('set null')->onDelete('set null');
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
        Schema::dropIfExists('data_wakel');
    }
}
