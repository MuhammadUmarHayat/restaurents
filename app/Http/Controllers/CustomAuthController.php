<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserStoreRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }
    public function registration()
    {
        return view("auth.registration");
    }
    public function registerUser(UserStoreRequest $request)
    {
        if ($request->validated()) {
            $res =  User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);
            if ($res) {
                return back()->with('success', 'You are registered successfully !');
            } else {
                return back()->with('fail', 'Something is wrong !');
            }
        }
    }

    public function loginUser(UserLoginRequest $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials) && Auth::user()->is_admin == 1)
        {
            return view('admin.index');
        }
        else  if (Auth::attempt($credentials)&& Auth::user()->is_admin == 0)
        {
            return "user is customer"; //  return to_route('dashboard');
        }
        else
        {
            return back()->with('fail', 'Password dosenot match');
        }
    }

    public function dashboard()
    {
        $data = array();
        if (Session::has('loginId')) {
            $data = User::where('id', '=', Session::get('loginId'))->first();
        }
        return view("dashboard", compact('data'));
    }
    public function logout()
    {
        if (Session::has('loginId')) {
            Session::pull('loginId');
            return redirect('login');
        }
    }
}
