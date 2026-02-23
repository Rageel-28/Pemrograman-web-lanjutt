<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index');
    }

    public function category($name)
    {
        return view('products.category', ['category' => $name]);
    }
}