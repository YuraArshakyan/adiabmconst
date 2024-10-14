<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\forms;
use App\Models\User;
use App\Models\config;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\FormsExport;

class adminController extends Controller
{
    function forms(){
        if(Auth::user()){
            $forms = forms::all()->sortByDesc("created_at");
            $today = date('Y-m-d');
            $today_forms = count(forms::whereDate('created_at', $today)->get());
            $yesterday = date('Y-m-d', strtotime('-1 day'));
            $yesterday_forms = count(forms::whereDate('created_at', $yesterday)->get());
            $forms_count = 0;
            if($forms != null){
                $forms_count = count($forms);
            }
            
            return view('pages/admin_dash_forms')->with(compact('forms', 'forms_count', 'today_forms', 'yesterday_forms'));
        }
    }
    function settings(){
        if(Auth::user()){
            $forms = forms::all()->sortByDesc("created_at");
            return view('pages/admin_dash_settings')->with(compact('forms'));
        }
    }
    function changePassword(Request $request){
        if(Auth::user()){
            $prev_password = User::where('id', Auth::user()->id)->get();
            
            if(Hash::check($request->password, $prev_password[0]->password) && $request->new_password == $request->passwordConfirmation && $request->new_password != null && Str::length($request->new_password) >= 4 ){
                $prev_password[0]->password = Hash::make($request->passwordConfirmation);
                $prev_password[0]->save();

                notify()->success('Password has been changed');
                return redirect()->back();
            }
            notify()->error('error. New Password must be more then 4 symbols');
            return redirect()->back();
        }
    }

    public function exportVisibleForms($id)
    {
        switch ($id){
            case(1):
                $name = 'form_all_' . date('m-d-y') .'.xlsx';
                break;
            case(2):
                $name = 'form_Updates_' . date('m-d-y') .'.xlsx';
                break;

            default:
                $name = 'form_Contacts_' . date('m-d-y') .'.xlsx';
                break;
        }


        return Excel::download(new FormsExport($id), $name);
        
    }
    


    function configs(){
        $email = config::where('key', 'email')->get();
        $title = config::where('key', 'title')->get();
        $favicon = config::where('key', 'favicon')->get();
        $FrontEmail = config::where('key', 'FrontEmail')->get();
        $FrontPhone = config::where('key', 'FrontPhone')->get();
        $FacebookLink = config::where('key', 'FacebookLink')->get();
        $InstagramLink = config::where('key', 'InstagramLink')->get();
        $workingHoursFront = config::where('key', 'workingHoursFront')->get();

        return view('pages/admin_dash_config')->with(compact('email', 'title', 'favicon', 'FrontEmail', 'FrontPhone', 'FacebookLink', 'InstagramLink', 'workingHoursFront'));   
    }
}
