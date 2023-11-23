<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;

class ProductController extends Controller
{
    public function index()
    {
        $product = products::get();

        return view('products.index', ['data' => $product]);
    }

    public function add()
    {
        return view('products.form');
    }
}
