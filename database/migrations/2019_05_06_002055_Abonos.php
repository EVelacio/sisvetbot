<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Abonos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('abonos', function(Blueprint $table){
            $table->increments('id');
            $table->string('fecha');
            $table->string('pago');
            $table->integer('citas_id')->unsigned()->nullable();
            $table->foreign('citas_id')->references('id')->on('citas')
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
        Schema::dropIfExists('abonos');
    }
}
