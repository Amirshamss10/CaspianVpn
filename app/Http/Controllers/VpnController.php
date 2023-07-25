<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VpnController extends Controller
{
    public function index() 
    {
        return view("vpn.index");
    }

    public function create(Request $request) 
    {
        // 
    }

    public function store(Request $request) 
    {

    }

    public function destory(Request $request, int $id)
    {

    }
}
