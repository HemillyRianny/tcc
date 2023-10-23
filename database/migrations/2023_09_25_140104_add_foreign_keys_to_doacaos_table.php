<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('doacaos', function (Blueprint $table) {
            $table->foreign(['doadors_iddoador'], 'fk_doacaos_doadors1')->references(['iddoador'])->on('doadors')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('doacaos', function (Blueprint $table) {
            $table->dropForeign('fk_doacaos_doadors1');
        });
    }
};
