<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Roles;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Whoops\Run;

class AuthController extends Controller
{
    public function register_auth()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $this->validator($request);
        $data=$request->all();
        $admin= new Admin();
        $admin->name=$data['name'];
        $admin->phone=$data['phone'];
        $admin->email=$data['email'];
        $admin->password=md5($data['password']);
        try {
            $admin->save();
            Session::flash('success', 'Đăng kí thành công');
            return redirect()->route('register');
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
    public function login_auth()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $this->validator($request,[
            'email' => 'required|email|max:255',
            'password' => 'required|max:255',
        ]);
        $data=$request->all();
       if( Auth::attempt(['email'=>$request->email,'password'=>$request->password]))


    }

    public function validator($request)
    {
        $this->validate($request,[
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|max:255',
            'password' => 'required|max:255',
        ]);
    }
}
