<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Mascotas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('mascotas', function(Blueprint $table){
            $table->increments('id');
            $table->string('nombre');
            $table->string('sexo');
            $table->string('color');
            $table->string('edad');
            $table->integer('razas_id')->unsigned()->nullable();
            $table->foreign('razas_id')->references('id')->on('razas')
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
        Schema::dropIfExists('mascotas');
    }
}
