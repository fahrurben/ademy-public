<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMataKuliahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mata_kuliah', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('prodi_id');
            $table->string('nama');
            $table->string('kode');
            $table->unsignedSmallInteger('tipe');
            $table->unsignedSmallInteger('bobot');
            $table->unsignedSmallInteger('semester');
            $table->string('deskripsi')->nullable();
            $table->unsignedSmallInteger('status');

            $table->timestamps();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->softDeletes();

            $table->foreign('prodi_id', 'mata_kuliah_prodi_id_foreign')
                ->references('id')->on('prodi')
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
        Schema::dropIfExists('mata_kuliah');
    }
}
