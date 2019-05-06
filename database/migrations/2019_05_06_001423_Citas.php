<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Citas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('citas', function(Blueprint $table){
            $table->increments('id');
            $table->string('fecha_cita');
            $table->string('fecha_remision');
            $table->string('hora_cita');
            $table->string('tipo_servicio');
            $table->string('importe');
            $table->string('saldo');
            
            $table->integer('veterinarios_id')->unsigned()->nullable();
            $table->foreign('veterinarios_id')->references('id')->on('veterinarios')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->integer('mascotas_id')->unsigned()->nullable();
            $table->foreign('mascotas_id')->references('id')->on('mascotas')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->integer('clientes_id')->unsigned()->nullable();
            $table->foreign('clientes_id')->references('id')->on('clientes')
                ->onUpdate('cascade')->onDelete('cascade');
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
        //
        Schema::dropIfExists('citas');
    }
}
