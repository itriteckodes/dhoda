<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Information;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request){
        
        $creds = [
            'email' => $request->email,
            'password' => $request->password
        ];
        $user = User::where('email',$request->email)->first();
        
        if(Auth::guard('user')->attempt($creds))
        {
            toastr()->success('You Login Successfully');
            return redirect()->intended(route('user.dashboard.index'));
        }   
        elseif( !$user )
        {
            toastr()->warning('Please register your account');
            return redirect()->back()->withInput();
        }
        else {
            toastr()->warning('Email or Password Wrong', 'Check Credentials');
             return redirect()->back()->withInput();
        }
    }
    public function register(Request $request)
    {
     
        $validator = Validator::make($request->all(),[
            'email' => 'required|unique:users'
        ]);

        if($validator->fails()){
            toastr()->error('Email Address already exists');
            return redirect()->back()->withInput();
        }
        User::create([
            'code' => uniqid()
        ]+$request->all());
        
        toastr()->success('Your Account Has Been successfully Created, Please Login and See Next Step Guides.');
        return redirect()->route('auth.login');
    }
    public function logout()
    {
        Auth::guard('user')->logout();
        toastr()->success('You Logout Successfully');
        return redirect()->route('home.index');
    }

    public function forgetPassword(){
        $information = Information::find(1);
        return view('user.auth.forgetpassword')->with('information',$information);
    }

    public function verification(Request $request){
        $user = User::where('email',$request->email)->first();
        if($user){
            $user->code = rand(111111,999999);
            $user->save();
            $this->sendMail($user);
            toastr()->info('Verification code sent');
            $information = Information::find(1);
            return view('user.auth.reset')->with('information',$information);
        }
        else{
            toastr()->error('Invalid email');
            return redirect()->back();
        }
    }

    private function sendMail($user){
        // $user->email = 'siddiqueakbar560@gmail.com';
        $data = ['code' => $user->code];
        Mail::send('mail', $data, function ($message) use ($user){
            $message->from('ameendhodahous@support.com', 'Ameen Dhoda House');
            $message->to($user->email, $user->name)
            ->subject('Reset Password');
        });
    }

    public function resetPassword(Request $request){
        $user = User::where('email',$request->email)->first();
        // dd($request);
        if($user){
            if($user->code == $request->code){
                $user->password =$request->password;
                $user->code = null;
                $user->save();
            }
            else{
                toastr()->error('Invalid code please try again');
                return redirect('user/forgetpassword');
            }
        }
        else{
            toastr()->error('Invalid email please try again');
            return redirect()->back('user/forgetpassword');
        }
        toastr()->success('Password reset successfuly');
        return redirect('login');
    }
}
