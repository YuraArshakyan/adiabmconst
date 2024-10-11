<?php

namespace App\Http\Controllers;

use App\Models\forms;
use App\Models\config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class FormsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $form = forms::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'phone' => $request->phone,
        //     'message' => $request->message,
        //     'form_name' => $request->form_name
        // ]);
        // $form->save();
        // return redirect()->back();
        return response()->json(['status' => $request->email]);
    }

    public function addFormConfig(Request $request){
        $form = forms::create([
            'email' => $request->email,
            'form_name' => 'Updates'
        ]);
        $form->save();
        return response()->json(['status' => 'done']);
    }
    public function changeConfigFront(Request $request){
        $get_val= config::where('key', 'FrontEmail')->get();
        if($get_val[0]->value != $request->emailFront){
            $get_val[0]->value = $request->emailFront;
            $get_val[0]->save();
        }

        $get_val= config::where('key', 'FrontPhone')->get();
        if($get_val[0]->value != $request->phoneFront){
            $get_val[0]->value = $request->phoneFront;
            $get_val[0]->save();
        }

        $get_val= config::where('key', 'FacebookLink')->get();
        if($get_val[0]->value != $request->facebookLink){
            $get_val[0]->value = $request->facebookLink;
            $get_val[0]->save();
        }
        
        $get_val= config::where('key', 'InstagramLink')->get();
        if($get_val[0]->value != $request->instagramLink){
            $get_val[0]->value = $request->instagramLink;
            $get_val[0]->save();
        }

        $get_val= config::where('key', 'InstagramLink')->get();
        if($get_val[0]->value != $request->instagramLink){
            $get_val[0]->value = $request->instagramLink;
            $get_val[0]->save();
        }

        $get_val= config::where('key', 'workingHoursFront')->get();
        if($get_val[0]->value != $request->workingHoursFront){
            $get_val[0]->value = $request->workingHoursFront;
            $get_val[0]->save();
        }


        notify()->success('done');
        return redirect()->back();
    }

    public function changeConfig(Request $request){


        
        //correctInputs
            //title correct Input
                $get_val_for_title = config::where('key', 'title')->get();
                $get_val_for_title[0]->value = $request->title;
                $get_val_for_title[0]->save();

            //favicon Correct Input
                if($request->file('favicon') != null){
                    $get_val_for_favicon = config::where('key', 'favicon')->get();
                    if($get_val_for_favicon[0]->value != null){
                        File::delete($get_val_for_favicon[0]->value);
                    }

                    $name = date('Ymd-H-I');
                    $client_oreginal_ext = $request->file('favicon')->extension();
                    $name_final = "favicon".$name.".".$client_oreginal_ext;
        
                    $file = $request->file('favicon');
                    $file->move(public_path(), $name_final);
        
                    
                    $get_val_for_favicon[0]->value = $name_final;
                    $get_val_for_favicon[0]->save();
                }

            //email Correct Input
                $checkboxForms = 0;
                $checkboxUpdates = 0;
            
                if($request->checkboxForms == "on"){
                    $checkboxForms = 1;
                }
                if($request->checkboxUpdates == "on"){
                    $checkboxUpdates = 1;
                }


                $get_val_for_formsEmail = config::where('key', 'formsEmail')->get();
                $get_val_for_formsEmail[0]->value = $checkboxForms;
                $get_val_for_formsEmail[0]->save();
                
                $get_val_for_updatesEmail = config::where('key', 'updatesEmail')->get();
                $get_val_for_updatesEmail[0]->value = $checkboxUpdates;
                $get_val_for_updatesEmail[0]->save();

                $get_val_for_Email = config::where('key', 'email')->get();
                $get_val_for_Email[0]->value = $request->email;
                $get_val_for_Email[0]->save();
                notify()->success('done');

        //correctInputsEnd  






        return redirect()->back();
    }
    /**
     * Display the specified resource.
     */
    public function show(forms $forms)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(forms $forms)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, forms $forms)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(forms $forms)
    {
        //
    }
}
