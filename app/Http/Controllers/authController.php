<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    function  register(Request $request){
        if($request->password == $request->repassword && $request->password != null && $request->repassword != null){
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);
            $user->save();
            return redirect()->back();
        }else{
            notify()->error('error');
            return redirect()->back();
        }
    }
    function login(Request $request){
        $login = $request->except(['_token']);

        if(Auth::attempt($login)){

            return redirect()->route('adminController.forms');
        }else{
            notify()->error('error');
            return redirect()->back();
        }
    }
}
