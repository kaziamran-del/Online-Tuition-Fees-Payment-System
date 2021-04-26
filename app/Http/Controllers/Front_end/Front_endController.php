<?php

namespace App\Http\Controllers\Front_end;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Data;
use App\Temporary;
use App\Payment;
use App\RegistrationFee;
use App\ShortCourse;
use App\LateFine;
use App\User;

class Front_endController extends Controller
{
    public function payment_bill(Request $request)
    {
        //dd($request->all());
        $date = Carbon::now()->toDateTimeString();
        $data = Data::where('student_id','=',$request->student_id)->first();
        if (!$data) {
            return redirect()->back()->with('success', 'This id is not register');
        }else{
            $regFees = RegistrationFee::latest()->get();
            $shortCourses = ShortCourse::latest()->get();
            $lateFines = LateFine::latest()->get();
        return view('front_end.pages.payment_bill', compact('data', 'regFees', 'shortCourses', 'lateFines'));
        }      
    }

    public function record($id)
    {
        $records = Payment::where('student_id',$id)->get();
        $std = Data::where('student_id',$id)->first();
        return view('front_end.pages.record',compact('records','std'));
    }

}
