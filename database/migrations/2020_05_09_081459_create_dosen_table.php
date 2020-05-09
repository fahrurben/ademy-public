<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosen', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('fakultas_id');
            $table->string('nid');
            $table->string('no_id')->nullable();
            $table->string('nama_depan');
            $table->string('nama_belakang');
            $table->string('nama_lengkap');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('email')->nullable();
            $table->unsignedInteger('jabatan')->nullable();
            $table->string('foto')->nullable();
            $table->unsignedInteger('status');

            $table->timestamps();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->softDeletes();

            $table->foreign('fakultas_id', 'dosen_fakultas_id_foreign')
                ->references('id')->on('fakultas')
                ->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dosen');
    }
}
