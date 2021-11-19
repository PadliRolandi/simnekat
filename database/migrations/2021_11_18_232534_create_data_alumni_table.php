<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataAlumniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('data_alumni');
        Schema::create('data_alumni', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 150)->nullable(false);
            $table->text('keterangan')->nullable(false);
            $table->string('status', 100)->nullable(false);
            $table->year('angkatan')->nullable(false);
            $table->year('tahun_lulus')->nullable(false);
            $table->unsignedBigInteger('jurusan_id')->nullable();
            $table->timestamps();
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
        Schema::dropIfExists('data_alumni');
    }
}
