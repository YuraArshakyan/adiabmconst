<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\forms;

class adminController extends Controller
{
    function forms(){
        if(Auth::user()){
            $forms = forms::all()->sortByDesc("created_at");
            return view('pages/admin_dash_forms')->with(compact('forms'));
        }
    }
    function settings(){
        
    }
    function config(){
        
    }
}
