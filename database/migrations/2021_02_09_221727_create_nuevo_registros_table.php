<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNuevoRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nuevo_registros', function (Blueprint $table) {
            $table->id();
            $table->integer('id_stock');
            $table->bigInteger('id_art');
            $table->string('color');
            $table->string('talla');
            $table->integer('unidades_nuevas');
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
        Schema::dropIfExists('nuevo_registros');
    }
}
