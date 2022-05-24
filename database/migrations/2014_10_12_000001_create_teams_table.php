<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->dateTime('fecha_hora_entrenamiento')->nullable();
            $table->dateTime('fecha_hora_competicion')->nullable();
            $table->timestamps();

            $table->unsignedBigInteger('game_id');
            $table->foreign('game_id')->references('id')->on('games')->delete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teams');
    }
};
