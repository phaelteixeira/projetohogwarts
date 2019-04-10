<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlocacaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alocacao', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('departamento_id')->unsigned();
            $table->foreign('departamento_id')->references('id')->on('departamentos');
            $table->bigInteger('funcionario_id')->unsigned();
            $table->foreign('funcionario_id')->references('id')->on('funcionarios');
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
        Schema::dropIfExists('alocacao');
    }
}
