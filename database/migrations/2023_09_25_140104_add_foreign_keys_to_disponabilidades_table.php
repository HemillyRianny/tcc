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
        Schema::table('disponabilidades', function (Blueprint $table) {
            $table->foreign(['items_iditem'], 'fk_disponabilidades_items1')->references(['iditem'])->on('items')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['doador_iddoador'], 'fk_disponabilidade_doador1')->references(['iddoador'])->on('doadors')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('disponabilidades', function (Blueprint $table) {
            $table->dropForeign('fk_disponabilidades_items1');
            $table->dropForeign('fk_disponabilidade_doador1');
        });
    }
};
