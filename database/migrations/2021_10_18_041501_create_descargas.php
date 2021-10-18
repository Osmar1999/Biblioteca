<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDescargas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('descargas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usuarios_id')->nullable();
            $table->unsignedBigInteger('libros_id')->nullable();

            $table->foreign('usuarios_id')
            ->references('id')->on('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('libros_id')
            ->references('id')->on('libros')
            ->onDelete('set null')
            ->onUpdate('set null');

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
        Schema::dropIfExists('descargas');
    }
}
