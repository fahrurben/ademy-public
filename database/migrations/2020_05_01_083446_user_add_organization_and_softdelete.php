<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserAddOrganizationAndSoftdelete extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user', function (Blueprint $table) {
            $table->softDeletes()->after('remember_token');
            $table->unsignedBigInteger('organization_id')->nullable()->after('id');

            $table->foreign('organization_id', 'user_organization_id_foreign')
                ->references('id')->on('organization')
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
            $table->dropForeign('user_organization_id_foreign');
            $table->dropColumn('organization_id');
            $table->dropSoftDeletes();
        });
    }
}
