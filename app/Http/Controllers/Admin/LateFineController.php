<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\LateFine;

class LateFineController extends Controller
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
    	$lateFines = LateFine::latest()->get();
    	return view('admin.lateFine.index', compact('lateFines'));
    } 

    // Create data to the database
    public function create()
    {
    	return view('admin.lateFine.create');
    }

    // Store data to the database
    public function store(Request $request)
    {
    	$request->validate([
    		'jan' => 'required',
    		'feb' => 'required',
    		'mar' => 'required',
    		'apr' => 'required',
    		'may' => 'required',
    		'jun' => 'required',
    		'jul' => 'required',
    		'aug' => 'required',
    		'sep' => 'required',
    		'oct' => 'required',
    		'nov' => 'required',
    		'dec' => 'required'

    	]);

		LateFine::insert([
			'jan' => $request->jan,
			'feb' => $request->feb,
			'mar' => $request->mar,
			'apr' => $request->apr,
			'may' => $request->may,
			'jun' => $request->jun,
			'jul' => $request->jul,
			'aug' => $request->aug,
			'sep' => $request->sep,
			'oct' => $request->oct,
			'nov' => $request->nov,
			'dec' => $request->dec
			
		]); 

		return redirect()->route('admin.lateFine.index')->with('success', 'Add Late Fine Successfully!!');   	
    }

    // Edit data to the database
    public function edit(Request $request)
    {
    	$lateFines = LateFine::find($request->id);
    	return view('admin.lateFine.edit', compact('lateFines'));
    }

    // Update data to the database
    public function updateD(Request $request)
    {
        $request->validate([
    		'jan' => 'required',
    		'feb' => 'required',
    		'mar' => 'required',
    		'apr' => 'required',
    		'may' => 'required',
    		'jun' => 'required',
    		'jul' => 'required',
    		'aug' => 'required',
    		'sep' => 'required',
    		'oct' => 'required',
    		'nov' => 'required',
    		'dec' => 'required'

    	]);

        $id = $request->id;

        LateFine::find($id)->update([
            'jan' => $request->jan,
			'feb' => $request->feb,
			'mar' => $request->mar,
			'apr' => $request->apr,
			'may' => $request->may,
			'jun' => $request->jun,
			'jul' => $request->jul,
			'aug' => $request->aug,
			'sep' => $request->sep,
			'oct' => $request->oct,
			'nov' => $request->nov,
			'dec' => $request->dec           
        ]);

        return redirect()->route('admin.lateFine.index')->with('success', 'Update Late Fine Successfully!');
    }
}
