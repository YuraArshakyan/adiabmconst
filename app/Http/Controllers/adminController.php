<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\forms;
use App\Models\User;
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

    public function exportVisibleForms(Request $request)
    {
        // $visibleForms = $request->input(); // Get the JSON data
    
        // // Convert it to a suitable format for exporting
        // $exportData = collect($visibleForms)->map(function ($form) {
        //     return [
        //         $form['id'],
        //         $form['status'],
        //         $form['error'],
        //         $form['name'],
        //         $form['email'],
        //         $form['phone'],
        //         $form['message'],
        //         $form['form_name'],
        //         $form['created_at'],
        //     ];
        // });
    
        // // Use the Laravel Excel export class or create a new one
        // return Excel::download(new FormsExport($exportData), 'visible_forms.xlsx');
    }
    


    function config(){
        
    }
}
