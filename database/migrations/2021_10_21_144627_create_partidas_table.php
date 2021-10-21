<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partidas', function (Blueprint $table) {
            $table->id();

            $table->string('codigo')->nullable();

            $table->unsignedBigInteger('modelo_id')->nullable();
            $table->foreign('modelo_id')
                ->references('id')->on('modulos')
                ->onDelete('set null');

            $table->unsignedBigInteger('programador_id')->nullable();
            $table->foreign('programador_id')
                ->references('id')->on('programadors')
                ->onDelete('set null');

            $table->unsignedBigInteger('error_id')->nullable();
            $table->foreign('error_id')
                ->references('id')->on('errors')
                ->onDelete('set null');

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
        Schema::dropIfExists('partidas');
    }
}
