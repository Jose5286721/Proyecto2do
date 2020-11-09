<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnTramoIdInTramoComunidads extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tramo_comunidads', function (Blueprint $table) {
            $table->foreignId("tramo_id")->before("comunidad_id");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tramo_comunidads', function (Blueprint $table) {
            $table->dropColumn("tramo_id");
        });
    }
}
