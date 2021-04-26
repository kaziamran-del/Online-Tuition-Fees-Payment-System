<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Payment;
use App\Temporary;
use App\Data;
use App\User;

class PaymentRecordController extends Controller
{
    // Fetch data to the database 
    public function index()
    {
  		$payments = Payment::orderBy('id', 'DESC')->get();
        $payments = Payment::latest()->paginate(4);
    	return view('admin.paymentRecord.index', compact('payments'));
    }

    // search data to the database
    public function search(Request $request){ 

        $search = $_GET['search'];
        $payments = Payment::where('student_name', 'LIKE', '%'.$search.'%')
        ->orwhere('student_id','like','%'.$search.'%')
        ->get();

        return view('admin.paymentRecord.search', compact('payments'));
    }
}
