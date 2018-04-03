<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductImage;

class ProductController extends Controller
{
    public function index()
    {
      $user = auth()->user();
      if ($user->admin) {
        $products = Product::paginate(15); // Si dejamos All(); nos va a tirar todos los productos, por eso vamos a usar paginate para que nos muestre menos cantidad.
      } else {
        $products = $user->productsCreated()->paginate(15);
      }
      return view('products.index')->with(compact('products')); // Nos va permitir ver el listado de productos. admin.products.index nos va a delvolver la vista que se creo.
    }

    public function create()
    {
      return view('products.create'); // Nos va a permitir ver el listado de productos
    }

    public function store(Request $request) // Va a registrar el nuevo producto a la base de datos
    {
      // Validar
      $rules = [
        'name' => 'required|min:3',
        'description' => 'required|max:200',
        'price' => 'required|numeric|min:0',
        'video' => 'required|max:50'
      ];

      $messages = [
            'name.required' => 'Ingresa el nombre del curso.',
            'name.min' => 'El nombre del curso tiene que tener 3 caracteres.',
            'description.required' => 'Ingresa la descripción corta.',
            'description.max' => 'La descripción corta puede tener solo 200 caracteres.',
            'price.required' => 'Ingresa un precio para el curso.',
            'price.numeric' => 'Ingresa un precio valido.',
            'price.min' => 'No podes ingresar valores negativos.',
            'video.required' => 'Ingresa la id del video',
            'video.max' => 'El id del video puede tener solo 50 caracteres'
        ];

      $this->validate($request, $rules, $messages);

      // dd($request->all());
      $product = new Product();
      $product->name = $request->input('name');
      $product->description = $request->input('description');
      $product->price = $request->input('price');
      $product->long_description = $request->input('long_description');
      $product->video = $request->input('video');
      $product->user_id = auth()->user()->id;
      $product->category_id = 1;
      $product->save(); // Con el metodo save lo que hacemos es insertarlo en la base de datos.

      $productImage = new ProductImage();
      $productImage->image = "https://lorempixel.com/250/250/?28855";
      $productImage->product_id = $product->id;
      $productImage->save();

      return redirect('/products'); // Con redirect, cuando se termine de insertar el nuevo curso, nos va a redireccionar a la ruta que le indiquemos.

    }

    public function edit($id)
    {
      // return "Mostrar aca el formulario de edicion $id";
      $product = Product::find($id);
      if ($product->user_id != auth()->user()->id) return redirect('/');
      else return view('products.edit')->with(compact('product'));
    }

    public function update(Request $request, $id)
    {
      $rules = [
        'name' => 'required|min:3',
        'description' => 'required|max:200',
        'price' => 'required|numeric|min:0',
        'video' => 'required|max:50'

      ];

      $messages = [
            'name.required' => 'Ingresa el nombre del curso.',
            'name.min' => 'El nombre del curso tiene que tener 3 caracteres.',
            'description.required' => 'Ingresa la descripción corta.',
            'description.max' => 'La descripción corta puede tener solo 200 caracteres.',
            'price.required' => 'Ingresa un precio para el curso.',
            'price.numeric' => 'Ingresa un precio valido.',
            'price.min' => 'No podes ingresar valores negativos.',
            'video.required' => 'Ingresa la id del video',
            'video.max' => 'El id del video puede tener solo 50 caracteres'
        ];

      $this->validate($request, $rules, $messages);

      $product = Product::find($id);
      $product->name = $request->input('name');
      $product->description = $request->input('description');
      $product->price = $request->input('price');
      $product->long_description = $request->input('long_description');
      $product->video = $request->input('video');
      $product->save(); // Guardara en el existente

      return redirect('/products');

    }

    public function destroy($id)
    {
      $product = Product::find($id);

      // si no hay compradores, lo borra
      if ($product->buyers->count() == 0) {
        ProductImage::where('product_id', $id)->delete();
        $product->delete(); // DELETE
      } else {
        // hay compradores
      }
      return back();

    }

    public function view($id) {
      $product = Product::find($id);
      if ($product->isBought()) return view('products.video', compact('product'));
      return view('products.view', compact('product'));
    }


    // cursos comprados
    public function bought() {
      $products = auth()->user()->productsBought()->paginate(15);
      return view('products.bought', compact('products'));
    }
}
