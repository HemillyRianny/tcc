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
        Schema::create('receptors', function (Blueprint $table) {
            $table->integer('idReceptor', true);
            $table->string('cnpj', 14)->nullable();
            $table->string('atuacao', 45)->nullable();
            $table->integer('users_id')->index('fk_receptors_users1_idx');
            $table->integer('doacaos_iddoacao')->nullable()->index('fk_receptors_doacaos1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('receptors');
    }
};
