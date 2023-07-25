<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\price;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\CategoryCollection;

class priceController extends Controller
{
    public function index()
    {
        $data = price::all();

        return CategoryCollection::collection(price::all());
    }

    public function show(Category $category) 
    {
        return new CategoryResource($category);
    }

   
}
