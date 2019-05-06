<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Razas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('razas', function (Blueprint $table){
            $table->increments('id');
            $table->string('nombre');
            $table->integer('especies_id')->unsigned()->nullable();
            $table->foreign('especies_id')->references('id')->on('especies')
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
        Schema::dropIfExists('razas');
    }
}
