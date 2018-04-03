<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class TestController extends Controller
{
    public function welcome ()
    {
      $products = Product::paginate(15); // Nos va a tirar error en esta linea si no la llamamos arriba desde Use App\Product
      return view('welcome')->with(compact('products')); // despues de -> lo que hace es crear un arreglo asociativo a partir de los parametros que se le indiquen. Con esto entonces, pasamos tanto parametros como variables tengamos.
      // Esto de arriba, si tengo mas variables, ademas de la de products puedo seguir agrendo mas ('products', var1, var2, etc) y seguiria crando el arreglo gracias a la funcion compact.

      // Otra forma de hacer esto ultimo seria manualmente asi:

      // $data = [];
      // $data['products'] = $products;
      // $data['var1'] = $var1;
      // $data['var2'] = $var2;
      // return view('welcome')->with($data);
    }

    public function course()
    {
        $products = Product::paginate(15);

      return view('cursos')->with(compact('products'));

    }

}
