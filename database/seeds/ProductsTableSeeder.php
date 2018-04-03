<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\Category;
use App\ProductImage;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Model factory para poder crear datos ficticios
        // Luego del -> tenemos dos metodos para crear la cantidad de elementos que necesitamos
        // El metodo make, que crea objetos, y el create hace lo mismo y ademas lo guarda en la base da datos.

        // factory(Product::class)->create(); Utilizando esta sola linea creamos solo un producto

        // Con la siguiente creamos mas de un 1 producto.

        //Con esto podriamos tener categorias sin productos o sin imagenes.

        // factory(Category::class, 5)->create();
        // factory(Product::class, 100)->create();
        // factory(ProductImage::class, 200)->create();

        // Ahora, sin embargo si queremos que cada categoria tenga 20 productos, y que cada producto tenga 5 imagenes, entonces el enfoque a seguir cambia.

        // $users = factory(App\User::class, 3)
        //   ->create()
        //   ->each(function ($u){
        //     $u->posts()->save(factory(App\Post::class)->make());
        //   });

        //Con esto vamos a lograr asociar 5 images con 1 producto, y 20 productos con una categoria.

          $categories = factory(Category::class, 5)->create();
          $categories->each(function ($category) {
            $products = factory(Product::class, 20)->make();
            $category->products()->saveMany($products);

            $products->each(function ($p) {
              $images = factory(ProductImage::class, 5)->make(); //Cuando tiene create las guarda en la base de datos, con make nosotros la vamos a generar y guardar manualmente.
              $p->images()->saveMany($images);
            });
          });


    }
}
