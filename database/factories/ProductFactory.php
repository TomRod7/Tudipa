<?php

use Faker\Generator as Faker;
Use App\Product;

$factory->define(Product::class, function (Faker $faker) {
    return [
      'name' => substr($faker->sentence(3), 0, -1), // Nos devuelve con esto una palabra aleatoria. Solo con ->word nos va a dar una palabra como nombre de producto, pero si queremos 2 o mas hay que usar de la siguiente manera: ->words(2). Pero si usamos Words nos va a tirar un error fatal en la refresh de la migration asi que usamos sentence para las 3 palabras.
      // al usar sentence, nos va a dar 3 palabras pero on un punto al final, se lo sacamos con un substr. Entonces con el -1 le sacamos el ultimo caracter a la primera sentencia.
      'description' => $faker->sentence(10), // Nos devuelve una oracion compuesta de 10 palabras.
      'long_description' => $faker->text, // Nos devuelve un texto.
      'price' => $faker->randomFloat(2, 5, 3000), //Nos genera dos decimales, el tercer parametro es para que no valga mas que eso.
      'user_id' => 1,
      'video' => 'qk6X02zbUao',
      'category_id' => $faker->numberBetween(1, 5) // De una a 5 categorias.
    ];
});
