<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $category = category::get();

        return view('category/index', ['category' => $category]);
    }

    public function add()
    {
        return view('category.form');
    }

    public function save(Request $request)
    {
        category::create(['name' => $request->name]);

        return redirect()->route('category');
    }

    public function edit($id)
    {
        $category = category::find($id);
        // echo "$category";
        return view('category.form', ['category' => $category]);
    }
}
