<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('prodi_id');
            $table->unsignedBigInteger('tahun_ajaran_masuk_id');
            $table->string('nim');
            $table->string('no_id')->nullable();
            $table->string('nama_depan');
            $table->string('nama_belakang');
            $table->string('nama_lengkap');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('email')->nullable();
            $table->unsignedInteger('semester');
            $table->string('foto')->nullable();
            $table->unsignedInteger('status');

            $table->timestamps();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->softDeletes();

            $table->foreign('prodi_id', 'mahasiswa_prodi_id_foreign')
                ->references('id')->on('prodi')
                ->onDelete('RESTRICT');

            $table->foreign('tahun_ajaran_masuk_id', 'mahasiswa_tahun_ajaran_masuk_id_foreign')
                ->references('id')->on('tahun_ajaran')
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
        Schema::dropIfExists('mahasiswa');
    }
}
