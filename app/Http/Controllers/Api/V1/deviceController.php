<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\device;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class deviceController extends Controller
{
    public function store(Request $request) 
    {
        $this->validateStore($request); 

        device::create([
            "android_id" => $request->android_id, 
            "model" => $request->model,
            "version" => $request->version 
        ]);
        return response()->json(["message"=>"created"], 200); 
    }

    public function validateStore($request) 
    {
        $request->validate([
            "android_id" => "required|string|max:255|unique:devices",
            "model" => "required|string|max:255", 
            "version" => "required|string|max:255"
        ]);
    }
}
