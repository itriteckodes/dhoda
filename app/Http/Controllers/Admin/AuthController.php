<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){
        $creds = [
            'email' => $request->email,
            'password' => $request->password
        ];
        $admin = Admin::where('email',$request->email)->first();
        
        if(Auth::guard('admin')->attempt($creds))
        {
            toastr()->success('You Login Successfully');
            return redirect()->intended(route('admin.dashboard.index'));
        }   
        elseif( !$admin )
        {
            toastr()->warning('Please register your account');
            return redirect()->back()->withInput();
        }
        else {
            toastr()->warning('Password Wrong', 'Check Credentials');
             return redirect()->back()->withInput();
        }
    }
    
    public function logout()
    {
        Auth::guard('admin')->logout();
        toastr()->success('You Logout Successfully');
        return redirect('/');
    }
}
