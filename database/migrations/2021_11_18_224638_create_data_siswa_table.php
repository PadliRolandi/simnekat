<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_siswa', function (Blueprint $table) {
            $table->id();
            $table->char('nipd', 9)->nullable(false);
            $table->char('nisn', 10)->nullable(false);
            $table->string('nama', 150)->nullable(false);
            $table->enum('jenis_kelamin', ['L', 'P'])->nullable(false);
            $table->string('agama', 30)->nullable(false);
            $table->text('alamat')->nullable(false);
            $table->string('tempat_lahir', 30)->nullable(false);
            $table->date('tanggal_lahir')->nullable(false);
            $table->tinyInteger('status')->nullable(false)->default(0);
            $table->text('foto');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('kelas_id')->nullable();
            $table->unsignedBigInteger('jurusan_id')->nullable();
            $table->timestamps();
            /* $table->foreign('user_id')->on('users')->references('id')->onUpdate('set null')->onDelete('set null'); */
            /* $table->foreign('kelas_id')->on('data_kelas')->references('id')->onUpdate('set null')->onDelete('set null'); */
            /* $table->foreign('jurusan_id')->on('data_jurusan')->references('id')->onUpdate('set null')->onDelete('set null'); */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_siswa');
    }
}
