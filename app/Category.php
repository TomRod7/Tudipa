<?php
//Aca es donde podemos hacer las relaciones
//Una categoria pertenece a muchos productos, y un producto a una categoria. MUCHOS A 1.
namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  // Queremos que desde un objeto category podamos acceder a los productos que estan en dicha categoria.
  // Creamos el metodo
  public function products()
  {
    return $this->hasMany(Product::class); // De esta manera estamos diciendo que una categoria tiene muchos productos, y cada vez que necesitamos hacer uso de este metodo podemos hacerlo porque esta relacion hace uso de ella.

  }
}
