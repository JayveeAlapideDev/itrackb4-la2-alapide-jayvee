<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function featured()
    {
        $products = $this->products();
        $featured = $products[4];

        return view('products.show', ['product'=> $featured]);
    }

    public function filter($value =null)
    {
      $products = $this->products();
       
      if ($value === null) {

        $filtered = $products;
        $message = 'showing all items';
      } else {

      $filtered = array_filter($products, function ($product) use ($value) {
        return $product['tag'] == $value;
      });
      $message = 'Filtering by tag: ' . $value;
      }

      return view('products.filter', ['products' => $filtered, 'message' => $message
      ]);
    } 

    public function index()
    {
        return view('products.index', ['products'=> $this -> products()]);
    }
    public function show($id)
    {
        $products = $this->products();

        if(!isset($products[$id]))
            {
                abort(404);
            }

        return view('products.show', ['product' => $products[$id]]);
    }
    
    private function products(){
        return [
            1 => ['id' => 1,'name'=> 'Shampoo', 'price' => 10, 'stock'=> 50, 'tag' => 1, 'is_available' => true],
            2 => ['id' => 2,'name'=> 'stick-O', 'price' => 100, 'stock'=> 20, 'tag' => 1, 'is_available' => true],
            3 => ['id' => 3,'name'=> 'smart', 'price' => 50, 'stock'=> 30, 'tag' => 3, 'is_available' => false],
            4 => ['id' => 4,'name'=> 'joy', 'price' => 20, 'stock' => 40, 'tag' => 4, 'is_available' => true],
            5 => ['id' => 5,'name'=> 'coffee', 'price' => 60, 'stock' => 70, 'tag' => 1, 'is_available' => false],
            6 => ['id' => 6,'name' => 'lollipop', 'price' => 80, 'stock' => 9, 'tag' => 6, 'is_available' => true],
        ];
    }
}
