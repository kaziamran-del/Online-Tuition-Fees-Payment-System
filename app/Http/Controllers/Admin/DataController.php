<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Data;
use App\User;


class DataController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Fetch data to the database
    public function index()
    {
    	$data = Data::latest()->get();
    	$data = Data::latest()->paginate(5);
    	return view('admin.pages.index', compact('data'));
    }

    // Create data to the database
    public function create()
    {
    	return view('admin.pages.create');
    }

    // store data to the database
    public function store(Request $req)
    {
    	$req->validate([
    		'student_id' 		  =>  'required|unique:data,student_id',
    		'student_name'  	  =>  'required',
            'program_batch'       =>  'required', 
            'term_fee'            =>  'required',
            'month_fee'           =>  'required',
            're_ad_fee'           =>  'required',
            'retake_fee'          =>  'required',
            'supply_fee'          =>  'required',
            'others_fee'          =>  'required',
            'hostel_rent'         =>  'required',
            'miscellaneous_fee'   =>  'required',
            'mobile_no'           =>  'required'
    	]);

    	Data::insert([
    		'student_id'          => $req->student_id,
    		'student_name'        => $req->student_name,
    		'program_batch'       => $req->program_batch,       
    		'term_fee'            => $req->term_fee,
    		'month_fee'           => $req->month_fee,
    		're_ad_fee'           => $req->re_ad_fee,
    		'retake_fee'          => $req->retake_fee,
    		'supply_fee'          => $req->supply_fee,
    		'others_fee'          => $req->others_fee,
    		'hostel_rent'         => $req->hostel_rent,
    		'miscellaneous_fee'   => $req->miscellaneous_fee,
    		'mobile_no'           => $req->mobile_no
    	]);

    	return redirect()->route('admin.pages.index')->with('success', 'Add Data Successfully!');

    }


    // edit data to the database 
    public function edit(Request $request)
    {
    	$data = Data::find($request->id);
    	return view('admin.pages.edit', compact('data'));
    }

    // update data to the database
    public function updateD(Request $request)
    {
        $request->validate([
            'student_name'        =>  'required',
            'program_batch'       =>  'required',
            'term_fee'            =>  'required',
            'month_fee'           =>  'required',
            're_ad_fee'           =>  'required',
            'retake_fee'          =>  'required',
            'supply_fee'          =>  'required',
            'others_fee'          =>  'required',
            'hostel_rent'         =>  'required',
            'miscellaneous_fee'   =>  'required',
            'mobile_no'           =>  'required'
        ]);

        $id = $request->id;

        Data::find($id)->update([
            'student_id'          => $request->student_id,
            'student_name'        => $request->student_name,
            'program_batch'       => $request->program_batch,
            'term_fee'            => $request->term_fee,
            'month_fee'           => $request->month_fee,
            're_ad_fee'           => $request->re_ad_fee,
            'retake_fee'          => $request->retake_fee,
            'supply_fee'          => $request->supply_fee,
            'others_fee'          => $request->others_fee,
            'hostel_rent'         => $request->hostel_rent,
            'miscellaneous_fee'   => $request->miscellaneous_fee,
            'mobile_no'           => $request->mobile_no
        ]);

        return redirect()->route('admin.pages.index')->with('success', 'Update Data Successfully!');
    }


    // search data to the database
    public function search(Request $request){ 

        $search = $_GET['search'];
        $adds= Data::where('student_name', 'LIKE', '%'.$search.'%')
        ->orwhere('student_id','like','%'.$search.'%')
        ->orwhere('program_batch','like','%'.$search.'%')
        ->orwhere('mobile_no','like','%'.$search.'%')
        ->get();

        return view('admin.pages.search', compact('adds'));
    }
}

