<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePosicaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posicaos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('inscricao_id')->unsigned();
            $table->foreign('inscricao_id')->references('id')->on('inscricaos')->onDelete('cascade');
            $table->string('time');
            $table->integer('P')->default(0);
            $table->integer('J')->default(0);
            $table->integer('V')->default(0);
            $table->integer('E')->default(0);
            $table->integer('D')->default(0);
            $table->integer('GP')->default(0);
            $table->integer('GC')->default(0);
            $table->integer('SG')->default(0);
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
        Schema::drop('posicaos');
    }
}
