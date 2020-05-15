<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateMahasiswaAddAlamat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mahasiswa', function (Blueprint $table) {
            $table->unsignedBigInteger('alamat_id')->nullable()->after('tahun_ajaran_masuk_id');

            $table->foreign('alamat_id', 'mahasiswa_alamat_id_foreign')
                ->references('id')->on('alamat')
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
        Schema::table('user', function (Blueprint $table) {
            $table->dropForeign('mahasiswa_alamat_id_foreign');

            $table->removeColumn('alamat_id');
        });
    }
}
