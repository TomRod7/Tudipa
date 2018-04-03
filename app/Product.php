<?php
//Aca es donde podemos hacer las relaciones
//Un producto pertenece a una categoria, y una categoria pertenece a muchos productos. RELACION 1 A MUCHOS.
namespace App;

use Illuminate\Database\Eloquent\Model;
// Para declarar relaciones entre modelos, hay que declarar metodos dentro de los modelos, segun la relacion que se quiera implementar.
class Product extends Model
{
    // Ahora vamos a hacer la relacion inversa, es decir, como se asocia un producto con una categoria.

    // Esta relacion nos va permitir consultar la categoria de un producto determinado.
    // Es decir, a que categoria pertence un producto en especifico cuando tengamos acceso a un producto en formato de objetos, nos permite conocer la categoria de un producto entonces.

    public function category()
    {
      return $this->belongsTo(Category::class); // Aca estamos diciendo que un producto pertenece a una categoria
    }

    //$product->images

    // Con esto estamos diciendo que dentro del metodo product, este tiene muchas imagenes.

    public function images()
    {
      return $this->hasMany(ProductImage::class); // Aca estamos diciendo que un producto pertenece a una categoria
    }

    // compradores del producto
    public function buyers() {
      return $this->belongsToMany(User::class, 'users_products');
    }

    // determina si un curso esta comprado
    public function isBought() {
      $id = $this->id;
      $products = auth()->user()->productsBought;
      foreach ($products as $product) {
        if ($product->id == $this->id) return true;
      }
      return false;
    }

    public function getFeaturedImageUrlAttribute()
    {
        $featuredImage = $this->images()->where('featured', true)->first();
        if (!$featuredImage)
            $featuredImage = $this->images()->first();

        if ($featuredImage) {
            return $featuredImage->url;
        }

        // default
        return '/images/products/default.png';
    }
}
