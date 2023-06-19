<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UpdatePasswordController extends Controller
{
    public function changePasswordForm()
    {
        return view("Auth.changePassword");
    }

    public function updatePassword(Request $request)
    {
        $this->ValidateForm($request);

        if(!Hash::check($request->old_password, Auth()->user()->password))
        {
            return back()->with("changePasswordFailed", true);
        }
        User::whereId(Auth()->user()->id)->update([
            "password" => Hash::make($request->new_password)
        ]);
        return back()->with("changePassword", true);
    }

    protected function ValidateForm($request) 
    {
        $request->validate([
            "old_password" => ["required", "max:255"],
            "new_password" => ["required", "min:8", "max:255", "confirmed"] 
        ]);
    }
}
