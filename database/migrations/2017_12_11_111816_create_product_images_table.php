<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image'); // Va a indicar el nombre del archivo, para poder buscar la imagen.
            $table->boolean('featured')->default(false); // Por defecto las img nuevas que se creen sera en falso, para que el usuario manualmente la cargue.

            // foreign. Crearemos una clave forenea hacia la tabla de productos.
            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('products'); // Con esto cada producto podra tener varias imagenes, pero solo una de ella será la destacada, como la pagina principal.

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
        Schema::dropIfExists('product_images');
    }
}
