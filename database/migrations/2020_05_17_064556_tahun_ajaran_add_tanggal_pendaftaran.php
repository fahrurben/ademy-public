<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TahunAjaranAddTanggalPendaftaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tahun_ajaran', function (Blueprint $table) {
            $table->dateTime('tanggal_pendaftaran_mulai')->nullable()->after('tahun_akhir');
            $table->dateTime('tanggal_pendaftaran_akhir')->nullable()->after('tanggal_pendaftaran_mulai');
            $table->dateTime('tanggal_aktif')->nullable()->after('tanggal_pendaftaran_akhir');
            $table->dateTime('tanggal_selesai')->nullable()->after('tanggal_aktif');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tahun_ajaran', function (Blueprint $table) {
            $table->removeColumn('tanggal_pendaftaran_mulai');
            $table->removeColumn('tanggal_pendaftaran_akhir');
            $table->removeColumn('tanggal_aktif');
            $table->removeColumn('tanggal_selesai');
        });
    }
}
