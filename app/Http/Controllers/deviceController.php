<?php

namespace App\Http\Controllers;

use DataTables;
use App\Models\User;
use App\Models\config;
use App\Models\device;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class deviceController extends Controller
{
    public function index(Request $request) 
    {
       $total = device::all()->count();
       return view("users", ["total"=> $total]);
    }

    public function create(Request $request)    
    {
        if ($request->ajax()) {
            $data =  device::latest()->get();
            return Datatables::of($data) 
            ->addIndexColumn()  
            ->addColumn('action', function($row){
                    $route = $row->id;
                    $actionBtn = "<a href='$route'" . 'class="edit btn btn-success btn-sm">detail</a>';                       
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
}
