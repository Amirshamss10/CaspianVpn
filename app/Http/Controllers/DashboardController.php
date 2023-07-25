<?php

namespace App\Http\Controllers;

use App\Models\device;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $totalUser = device::all()->count();
        return view("home", ["totalUser" => $totalUser]);
    }
}
