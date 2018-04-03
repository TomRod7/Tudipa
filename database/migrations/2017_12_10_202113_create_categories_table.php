<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id'); //incremento automatico, y clave primaria
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('image')->nullable(); // en campo se va a guardar el nombre del archivo de la imagen, pero se le aplica nullable, porque puede no tener una imagen asociada, y se usaria una imagen por defecto
            $table->timestamps(); //añade dos columanas de fecha exacta de cuando se registro una categoria y actualización

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
