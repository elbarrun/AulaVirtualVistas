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
        Schema::create('messages', function (Blueprint $table) {
            $table->primary(['user_idOrigen','user_idDestino']);
            $table->string('destacados');
            $table->bigInteger('user_idOrigen')->unsigned();
            $table->bigInteger('user_idDestino')->unsigned();
            $table->string('grupo');
            $table->string('privado');
            $table->timestamps();
            $table->foreign('user_idOrigen')
                ->references('id')
                ->on('users');
            $table->foreign('user_idDestino')
                ->references('id')
                ->on('users');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
};
