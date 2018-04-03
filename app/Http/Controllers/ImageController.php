<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductImage;
use File;

class ImageController extends Controller
{
    public function index($id)
    {
      $product = Product::find($id);
      $images = $product->images;
      return view('products.images.index')->with(compact('product', 'images'));
    }

    public function store(Request $request, $id)
    {
      // guardar imagen en el proyecto
      // tener registro en la db, product_images
      $file = $request->file('photo');
      $path = public_path() . '/images/products'; // Ruta absoluta
      $fileName = uniqid() . $file->getClientOriginalName(); // Nombre para el archivo uniqued va a asignar un id
      $move = $file->move($path, $fileName); // Para que se guarde

      // Crear registro en la tabla de productos
      if ($move) {
        $productImage = new ProductImage();
        $productImage->image = $fileName;
        // $productImage->featured = ;
        $productImage->product_id = $id;
        $productImage->save();
      }


      return back();

    }

    public function destroy(Request $request, $id)
    {
      $productImage = ProductImage::find($request->image_id);
      if (substr($productImage->image, 0, 4) === "http") {
        $deleted = true;
      } else {
        $fullPath = public_path() . '/images/products/' . $productImage->image;
        $deleted = File::delete($fullPath);
      }


      if ($deleted) {
        $productImage->delete();
      }

      return back();
    }
}
