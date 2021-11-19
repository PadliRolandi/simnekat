<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataGuruTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_guru', function (Blueprint $table) {
            $table->id();
            $table->char('nip', 18)->nullable();
            $table->string('nama', 150)->nullable(false);
            $table->enum('jenis_kelamin', ['L', 'P'])->nullable(false);
            $table->text('alamat')->nullable(false);
            $table->string('agama', 30)->nullable(false);
            $table->string('tempat_lahir', 30)->nullable(false);
            $table->date('tanggal_lahir')->nullable(false);
            $table->text('foto')->nullable();
            $table->tinyInteger('status_ptk')->nullable(false)->default(0);
            $table->unsignedBigInteger('users_id')->nullable();
            $table->timestamps();
            $table->foreign('users_id')->on('users')->references('id')->onUpdate('set null')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_guru');
    }
}
