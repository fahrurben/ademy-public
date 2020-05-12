<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserAddRoleField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user', function (Blueprint $table) {
            $table->unsignedBigInteger('mahasiswa_id')->nullable()->after('id');
            $table->unsignedBigInteger('dosen_id')->nullable()->after('mahasiswa_id');
            $table->unsignedSmallInteger('role')->after('email_verified_at');

            $table->foreign('mahasiswa_id', 'user_mahasiswa_id_foreign')
                ->references('id')->on('mahasiswa')
                ->onDelete('RESTRICT');

            $table->foreign('dosen_id', 'user_dosen_id_foreign')
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
        Schema::table('user', function (Blueprint $table) {
            $table->dropForeign('user_mahasiswa_id_foreign');
            $table->dropForeign('user_dosen_id_foreign');

            $table->removeColumn('mahasiswa_id');
            $table->removeColumn('dosen_id');
            $table->removeColumn('role');
        });
    }
}
