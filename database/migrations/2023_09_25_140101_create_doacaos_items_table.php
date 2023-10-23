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
        Schema::create('doacaos_items', function (Blueprint $table) {
            $table->integer('doacaos_iddoacao')->index('fk_doacaos_has_items_doacaos1_idx');
            $table->integer('items_iditem')->index('fk_doacaos_has_items_items1_idx');

            $table->primary(['doacaos_iddoacao', 'items_iditem']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doacaos_items');
    }
};
