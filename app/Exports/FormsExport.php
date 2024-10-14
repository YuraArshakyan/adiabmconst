<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use App\Models\forms;

class FormsExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    protected $data;
    public function __construct($id)
    {
        if($id == 1){
            $this->data = forms::all();
        }else if($id == 2){
            $this->data = forms::where('form_name', 'Updates')->get();
        }else{
            $this->data = forms::where('form_name', 'Contacts')->get();
        }
        
    }

    public function view(): View{
        return view('exports.forms_export_updates', [

            'forms' => $this->data
        ]);
    }

}
