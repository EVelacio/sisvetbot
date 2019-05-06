<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Clientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('clientes', function(Blueprint $table){
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->string('edad');
            $table->string('calle');
            $table->string('numero');
            $table->string('colonia');
            $table->string('cp');
            $table->string('tel');
            $table->string('cel');
            $table->integer('users_id')->unsigned()->nullable();
            $table->foreign('users_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->integer('mascotas_id')->unsigned()->nullable();
            $table->foreign('mascotas_id')->references('id')->on('mascotas')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->timestamp('deleted_at');
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
        Schema::dropIfExists('clientes');
    }
}
