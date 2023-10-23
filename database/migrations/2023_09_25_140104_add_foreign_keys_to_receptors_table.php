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
        Schema::table('receptors', function (Blueprint $table) {
            $table->foreign(['doacaos_iddoacao'], 'fk_receptors_doacaos1')->references(['iddoacao'])->on('doacaos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['users_id'], 'fk_receptors_users1')->references(['id'])->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('receptors', function (Blueprint $table) {
            $table->dropForeign('fk_receptors_doacaos1');
            $table->dropForeign('fk_receptors_users1');
        });
    }
};
