<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->text('long_description')->nullable();
            $table->float('price');
            $table->string('video');

            // usuario que crea el producto
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            //Primero se crea el campo en la table y segundo con el foreign hace que cada producto pertenezca a una categoria.
            $table->integer('category_id')->unsigned()->nullable(); //nullable para aquellos productos que no pertenezcan a una categoria especifica y que ademas para que pertenezca a una sola categoria.
            $table->foreign('category_id')->references('id')->on('categories');

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
        Schema::dropIfExists('products');
    }
}
