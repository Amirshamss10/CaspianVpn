<?php

namespace App\Http\Controllers;

use App\Models\device;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class deviceController extends Controller
{
    public function index(Request $request) 
    {
        $devices = device::all()->count();
        // $devices = DB::table("devices")->get();
        return view("devices", ["count"=> $devices]); 
    }

    public function create(Request $request)    
    {
        // $devices = DB::table("devices")->get();
        // $data = device::where("android_id","oijdiowjeodwdjiojeoi")->get();

        
        if ($request->ajax()) {
            $devices = device::where("id", 1)->get();
            return Datatables::of($devices) 
            ->addIndexColumn()  
            ->addColumn('action', function($row){
                    $route = $row->id;
                    $actionBtn = "<a href='$route'" . 'class="edit btn btn-success btn-sm">detail</a>';                       
                    return "message";
                })
                ->rawColumns(['action'])
                ->make(true);
        }         
    }
}
