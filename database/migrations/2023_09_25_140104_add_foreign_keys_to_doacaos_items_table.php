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
        Schema::table('doacaos_items', function (Blueprint $table) {
            $table->foreign(['doacaos_iddoacao'], 'fk_doacaos_has_items_doacaos1')->references(['iddoacao'])->on('doacaos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['items_iditem'], 'fk_doacaos_has_items_items1')->references(['iditem'])->on('items')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('doacaos_items', function (Blueprint $table) {
            $table->dropForeign('fk_doacaos_has_items_doacaos1');
            $table->dropForeign('fk_doacaos_has_items_items1');
        });
    }
};
