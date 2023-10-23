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
        Schema::create('users', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name', 45)->nullable();
            $table->string('telefone', 45)->nullable();
            $table->string('endereco', 45)->nullable();
            $table->string('email', 45)->nullable();
            $table->string('descricao', 225)->nullable();
            $table->string('password', 100)->nullable();
            $table->string('email_verified_atSELECT', 45)->nullable();
            $table->string('remember_token', 45)->nullable();
            $table->string('Entidadecol', 45)->nullable();
            $table->string('created_at', 45)->nullable();
            $table->string('updated_at', 45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
