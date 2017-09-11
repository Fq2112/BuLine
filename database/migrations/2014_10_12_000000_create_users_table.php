<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('id_prodi')->unsigned();
            $table->foreign('id_prodi')->references('id')->on('prodi')->onUpdate('CASCADE')->onDelete('SET NULL');
            $table->string('id')->primary()->unique();
            $table->string('angkatan')->default('-');
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('no_telepon')->default('-');
            $table->string('jenis_kelamin')->default('-');
            $table->date('tanggal_lahir')->nullable();
            $table->text('alamat_asal')->default('-');
            $table->text('alamat_tinggal')->default('-');
            $table->text('foto')->default('-');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
