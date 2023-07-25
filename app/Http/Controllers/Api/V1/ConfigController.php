<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\config;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ConfigResource;

class ConfigController extends Controller
{
    public function index() 
    {
        $data = config::all()->sortByDesc("create_at"); 

        return ConfigResource::collection($data);
    }

    public function destroy(int $id) 
    {
        $data = config::findOrFail($id)->delete();
        
        return response()->json(["message" => "config deleted"],200); 
    } 
}
