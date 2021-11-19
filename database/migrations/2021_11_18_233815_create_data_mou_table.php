<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataMouTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('data_mou');
        Schema::create('data_mou', function (Blueprint $table) {
            $table->id();
            $table->text('keterangan')->nullable(false);
            $table->text('file')->nullable();
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
        Schema::dropIfExists('data_mou');
    }
}
