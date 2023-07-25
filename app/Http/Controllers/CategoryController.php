<?php

namespace App\Http\Controllers;

use App\Models\price;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;

class CategoryController extends Controller
{
    public function index() 
    {
        $data = Category::with("prices")->orderBy("created_at", "desc")->get();

        $productCount = price::all()->count();

        if(empty($productCount)) {
            return redirect()->route("products.create");
        }

        return view("product.index")->with(["data" => $data, "productCount" => $productCount]);
    }

    public function create() 
    {
        $category = Category::all();

        return view("product.create", ["category" => $category]);
    }

    public function store(ProductRequest $request) 
    {
        $data = price::create([
            "category_id" => $request->category_id, 
            "title" => $request->title, 
            "price" => $request->price
        ]);
        return redirect()->route("products.show", $data->id)->with("addProduct", true);
    }

    public function show(Request $request,  price $price) 
    {
        return view("product.show", ["data" => $price]); 
    }

    public function edit(price $price) 
    {
        $category = Category::all();

        return view("product.edit", ["product"=> $price, "category" => $category]);
    }

    public function update(ProductRequest $request, price $price) 
    {
        $price->update([
            "category_id" => $request->category_id,
            "price" => $request->price,
            "title"=> $request->title
        ]);

        return redirect()->route("products.show", $price->id)->with("updateProduct", true);
    }

    public function destroy(Request $request, price $price) 
    {
        $price->delete(); 
        
        return redirect()->route("products.index")->with("deleteProduct", true); 
    }
   
}
