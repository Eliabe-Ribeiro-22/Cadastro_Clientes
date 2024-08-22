<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CLIENTES', function (Blueprint $table) {
            $table->id();
            $table->string('NOME', 50);
            $table->date('DT_NASCIMENTO');
            $table->string('CIDADE', 50);
            $table->string('CPF', 14);
            $table->integer('CELULAR');

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
        Schema::dropIfExists('CLIENTES');
    }
}
