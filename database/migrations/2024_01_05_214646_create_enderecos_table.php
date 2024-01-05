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
        Schema::create('enderecos', function (Blueprint $table) {
            $table->id();
            $table->string('apelido');
            $table->string('logradouro');
            $table->string('numero');
            $table->string('complemento');
            $table->string('ponto_de_referencia');
            $table->string('bairro');
            $table->string('cep');
            $table->boolean('favorito');
            $table->foreignId('user_id')->constrained();
            $table->foreignId('cidade_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enderecos');
    }
};
