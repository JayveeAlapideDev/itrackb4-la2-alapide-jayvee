<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['name'=> 'Shampoo', 'price' => '10', 'stock'=> '50'],
            ['name'=> 'stick-O', 'price' => '100', 'stock'=> '20'],
            ['name'=> 'smart', 'price' => '50', 'stock'=> '30'],
        ];
        return view('products.index', ['products' => $products]);
    }
};
