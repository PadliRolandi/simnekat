<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataAgendaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_agenda', function (Blueprint $table) {
            $table->id();
            $table->string('nama_acara', 100)->nullable(false);
            $table->string('penyelenggara', 30)->nullable(false);
            $table->text('tempat')->nullable(false);
            $table->text('deskripsi')->nullable(false);
            $table->dateTime('tanggal')->nullable(false);
            $table->dateTime('due_date')->nullable(false);
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
        Schema::dropIfExists('data_agenda');
    }
}
