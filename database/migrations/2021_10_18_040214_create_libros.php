<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->string('titulo_libro',100);
            $table->string('edicion_libro',100);
            $table->date('fecha_lanzamiento_libro');
            $table->string('idioma_libro',50);
            $table->text('descripcion_libro');
            $table->integer('paginas_libro');

            $table->unsignedBigInteger('categoria_id')->nullable();
            $table->unsignedBigInteger('autor_id')->nullable();
            $table->unsignedBigInteger('editorial_id')->nullable();

            $table->foreign('categoria_id')
            ->references('id')->on('categorias')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('autor_id')
            ->references('id')->on('autores')
            ->onDelete('set null')
            ->onUpdate('set null');

            $table->foreign('editorial_id')
            ->references('id')->on('editoriales')
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
        Schema::dropIfExists('libros');
    }
}
