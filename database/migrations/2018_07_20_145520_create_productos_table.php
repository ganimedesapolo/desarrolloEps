<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('descripcion_pdf')->nullable();
            $table->string('foto')->nullable();
            $table->string('video_youtube_1')->nullable();
            $table->string('video_youtube_2')->nullable();
            $table->integer('idLineaNegocio')->unsigned();

             $table->foreign('idLineaNegocio')->references('id')->on('linea_negocios')
                ->onDelete('cascade')
                ->onUpdate('cascade');

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
        Schema::dropIfExists('productos');
    }
}
