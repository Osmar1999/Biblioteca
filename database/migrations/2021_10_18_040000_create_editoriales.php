<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEditoriales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('editoriales', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_editorial', 50);
            $table->string('direccion_editorial', 100);
            $table->integer('numero_editorial');
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
        Schema::dropIfExists('editoriales');
    }
}
