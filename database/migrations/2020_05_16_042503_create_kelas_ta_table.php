<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelasTaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelas_ta', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('prodi_id');
            $table->unsignedBigInteger('matkul_id');
            $table->unsignedBigInteger('ta_id');
            $table->unsignedBigInteger('dosen_id');
            $table->unsignedBigInteger('asisten_id')->nullable();

            $table->string('nama');

            $table->timestamps();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->softDeletes();

            $table->foreign('prodi_id', 'kelas_ta_prodi_id_foreign')
                ->references('id')->on('prodi')
                ->onDelete('RESTRICT');

            $table->foreign('matkul_id', 'kelas_ta_matkul_id_foreign')
                ->references('id')->on('mata_kuliah')
                ->onDelete('RESTRICT');

            $table->foreign('ta_id', 'kelas_ta_ta_id_foreign')
                ->references('id')->on('tahun_ajaran')
                ->onDelete('RESTRICT');

            $table->foreign('dosen_id', 'kelas_ta_dosen_id_foreign')
                ->references('id')->on('dosen')
                ->onDelete('RESTRICT');

            $table->foreign('asisten_id', 'kelas_ta_asisten_id_foreign')
                ->references('id')->on('dosen')
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
        Schema::dropIfExists('kelas_ta');
    }
}
