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
        Schema::create('necessidades', function (Blueprint $table) {
            $table->integer('idnecessidade', true);
            $table->integer('Receptor_idReceptor')->index('fk_necessidade_Receptor1_idx');
            $table->integer('dataCadastro')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->integer('quantidade')->nullable();
            $table->integer('items_iditem')->index('fk_necessidades_items1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('necessidades');
    }
};
