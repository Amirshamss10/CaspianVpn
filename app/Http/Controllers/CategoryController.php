<?php

namespace App\Http\Controllers;

use App\Models\price;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Category $category) 
    {
        $data = Category::with("prices")->get();
        return view("product.index")->with(["data" => $data]);
    }

    public function show(Request $request,  $id) 
    {
        $data = price::findOrFail($id);
        return view("product.show", ["data" => $data]); 
    }

    public function edit($id) 
    {
        // $data = price::findOrFail($id); 
        // return view("product.edit", ["data"=> $data]); 
    }
}
