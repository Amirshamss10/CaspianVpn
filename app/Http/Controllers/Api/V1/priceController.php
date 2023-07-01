<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\price;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class priceController extends Controller
{
    protected $price;

    public function index()
    {
        $data = price::all();

        return response()->json(["data" => $data],200); 
    }

    public function show(Category $category) 
    {
        $data = $category->load("prices");

        return response()->json(["data"=> $category ],200);
    }

   
}
