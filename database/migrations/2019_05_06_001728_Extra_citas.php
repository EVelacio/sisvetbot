<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ExtraCitas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('extra_citas', function(Blueprint $table){
            $table->increments('id');
            $table->string('nota');
            $table->string('nota_dinero');
            $table->string('fecha');
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
        Schema::dropIfExists('extra_citas');
    }
}
