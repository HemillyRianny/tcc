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
        Schema::table('necessidades', function (Blueprint $table) {
            $table->foreign(['items_iditem'], 'fk_necessidades_items1')->references(['iditem'])->on('items')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['Receptor_idReceptor'], 'fk_necessidade_Receptor1')->references(['idReceptor'])->on('receptors')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('necessidades', function (Blueprint $table) {
            $table->dropForeign('fk_necessidades_items1');
            $table->dropForeign('fk_necessidade_Receptor1');
        });
    }
};
