<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Payment;
use App\Temporary;
use App\Data;
use App\User;

class PaymentController extends Controller
{
    // Fetch data to the database 
    public function index()
    {
    	$payments = Payment::orderBy('id', 'DESC')->get();
        $payments = Payment::latest()->paginate(4);
    	return view('admin.payment.index', compact('payments'));
    }

    // Payment Store to the database
    public function payments(Request $request)
    {
        // dd(request()->all());
        $payments = new Payment;
        $payments->student_id       = $request->student_id;
        $payments->student_name     = $request->student_name;
        $payments->payment_method   = $request->payment_method;
        $payments->payment_type     = $request->payment_type;
        $payments->payment_val      = $request->payment_val;
        $payments->amount           = $request->amount;

        $payments->save();

     	return redirect()->back()->with('success', 'Add data to the payment table');
    }

    // Payment status unpaid
    public function notpaid($id)
    {
        Payment::find($id)->update(['payment_status' => 0]);
        return redirect()->back()->with('unpaid', 'Not paid');
    }

    // Payment status paid
    public function paid($id)
    {
        Payment::find($id)->update(['payment_status' => 1]);
        return redirect()->back()->with('paid', 'Paid Successfully!!');
    }

    // Payment status delette
    public function delete($id)
    {
        Payment::findOrFail($id)->delete();
        return redirect()->back()->with('delete', 'Successfully Data Deleted!!');
    }
}
