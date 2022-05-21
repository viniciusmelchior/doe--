<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('nome_social', 100);
            $table->boolean('nome_social_ativo');
            $table->string('numero_telefone', 11);
            $table->boolean('numero_whatsapp');
            $table->date('aniversario');
            $table->string('cpf', 11);
            $table->string('sexo_biologico', 20);
            $table->string('genero', 20);
            $table->date('ultima_doacao');
            $table->integer('xp');
            $table->string('url_imagem', 150);
            $table->rememberToken();
            $table->timestamps();
        });

    // ID_ENDEREÇO VARCHAR(30) NULL,
    // ID_CAMPANHA VARCHAR(30) NULL,
    // ID_RESULTADO_TESTE VARCHAR(30)NULL,
    // ID_CALENDARIO VARCHAR(30) NULL,

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
}
