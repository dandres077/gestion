<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departamentos', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('pais_id')->index()->nullable();
            $table->string('nombre')->nullable();
            $table->integer('status')->default(1); // 1: activo, 2:inactivo: 3: eliminado
            $table->integer('user_create')->nullable();
            $table->integer('user_update')->nullable();
            $table->timestamps();

            $table->foreign('pais_id')->references('id')->on('paises')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departamentos');
    }
}
