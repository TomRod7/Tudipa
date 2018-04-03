<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Product;

class CartController extends Controller
{
    //
    public function add($id) {
      $items = Session::get('cart');
      if ($items) {
        $items[] = $id;
      } else {
        $items = [$id];
      }
      Session::put('cart', $items);
      return redirect('/');
    }

    public function remove($id) {
      $items = Session::get('cart');
      if ($items) {
        unset($items[array_search($id, $items)]);
      }
      Session::put('cart', $items);
      return redirect('/');
    }

    public function buy() {
      $products = $this->getProducts();
      foreach ($products as $product) {
        auth()->user()->productsBought()->detach($product);
        auth()->user()->productsBought()->attach($product);
      }
      Session::put('cart', []);
      $products = auth()->user()->productsBought()->paginate(15);
      return view('products.bought', compact('products'));
    }

    public function view() {
      $products = $this->getProducts();
      return view('cart', compact('products'));
    }

    private function getProducts() {
      $items = Session::get('cart');
      $products = [];
      if ($items) {
        foreach ($items as $item) {
          $products[] = Product::find($item);
        }
      }
      $products = collect($products);
      return $products;
    }

}
