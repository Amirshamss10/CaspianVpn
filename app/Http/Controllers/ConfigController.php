<?php

namespace App\Http\Controllers;

use App\Models\config;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function index() 
    {
        $data = Config::all()->sortByDesc("created_at"); 
        if($data->isEmpty()) {
            return redirect()->route("configs.create");
        }
        return view("config.index", ["data"=> $data]);
    }

    public function create() 
    {
        return view("config.create");
    } 

    public function store(Request $request)
    {
        $this->ValidateStore($request);

        config::create([
            "user_id" => auth()->user()->id,
            "config" => $request->config,
            "name" => $request->name
        ]);
        return redirect()->route("configs.index")->with("addVPN", true); 
    }

    public function destroy(config $config) 
    {
        $config->delete(); 

        return redirect()->route("configs.index");
    }

    public function ValidateStore($request) 
    {
        $request->validate([
            "name" => ["required", "unique:configs,name"], 
            "config" => ["required", "unique:configs,config"]
        ]); 
    }

}
