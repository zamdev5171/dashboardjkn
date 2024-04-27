<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use DB;
use Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function register()
    {
        $role_name = DB::table('role_type_users')->get();
        return view('auth.register', compact('role_name'));
    }
    public function storeUser(Request $request)
    {
        $request->validate([
            'name'      => 'required|string|max:255',
            'email'     => 'required|string|email|max:255|unique:users',
            'role_name' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
            'password_confirmation' => 'required',
        ]);
        
        User::create([
            'name'      => $request->name,  
            'email'     => $request->email,
            'role_name' => $request->role_name,
            'password'  => Hash::make($request->password),
        ]);
        Toastr::success('Create new account successfully :)','Success');
        return redirect('login');
    }
}
