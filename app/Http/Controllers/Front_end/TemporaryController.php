<?php

namespace App\Http\Controllers\Front_end;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Temporary;
use App\Data;
use App\User;
use Illuminate\Support\Facades\Session;

class TemporaryController extends Controller
{
   
    public function preview(Request $request)
    {
        $views = Temporary::orderBy('id', 'DESC')->first();
        return view('front_end.pages.preview', compact('views'));
    }   

    //try to add data temporary database
    public function temporary(Request $request)
    { 
        $request->validate([
            'student_id'        => 'required',
            'student_name'      => 'required',
            'program_batch'     => 'required',
            'payment_type'      => 'required',
            'payment_val'       => 'required',
            'amount'            => 'required'
        ]);

        $request->merge([
            'payment_type' => implode(' | ', (array) $request->payment_type),    
            'payment_val' => implode(',', (array) $request->payment_val)
        ]);

        // $request->merge([
        //     'payment_type' => implode(',', (array) $request->payment_type)
        // ]);

        $request->input('payment_type');

        Temporary::insert([
            'student_id'        => $request->student_id,
            'student_name'      => $request->student_name,
            'program_batch'     => $request->program_batch,
            'payment_type'      => $request->payment_type,
            'payment_val'       => $request->payment_val,
            'late_fine'         => $request->late_fine,
            'amount'            => $request->amount

        ]);

        
        Session()->put('payment', ['user' => $request->student_id, 'amount'=> $request->amount]);               
        return redirect()->route('front_end.pages.preview');
    }
}
