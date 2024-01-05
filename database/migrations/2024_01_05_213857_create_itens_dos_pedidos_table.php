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
        Schema::create('itens_dos_pedidos', function (Blueprint $table) {
            $table->id();
            $table->integer('ordem');
            $table->string('codigo');
            $table->string('nome');
            $table->float('valor_unitario');
            $table->integer('quantidade');
            $table->float('desconto');
            $table->foreignId('pedido_id')->constrained();
            $table->foreignId('produto_id')->constrained();
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
        Schema::dropIfExists('itens_dos_pedidos');
    }
};
