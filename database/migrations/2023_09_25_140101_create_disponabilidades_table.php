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
        Schema::create('disponabilidades', function (Blueprint $table) {
            $table->integer('iddisponabilidade', true);
            $table->integer('doador_iddoador')->index('fk_disponabilidade_doador1_idx');
            $table->integer('dataCadastro')->nullable();
            $table->integer('quantidade')->nullable();
            $table->date('validade')->nullable();
            $table->integer('items_iditem')->index('fk_disponabilidades_items1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('disponabilidades');
    }
};
