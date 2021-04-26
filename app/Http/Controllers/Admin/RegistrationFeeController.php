<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\RegistrationFee;

class RegistrationFeeController extends Controller
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

    //
	public function index()
	{
		$regFees = RegistrationFee::latest()->get();
    	return view('admin.registration.index', compact('regFees'));
	}

	//
    public function create()
    {
    	return view('admin.registration.create');
    }

    //
    public function store(Request $request)
    {
        $request->validate([
            'english'        =>  'required',
            'cse'            =>  'required',  
            'eee'            =>  'required',
            'bba'            =>  'required',
            'law_justice'    =>  'required',
            'economics'      =>  'required'
         
        ]);

        RegistrationFee::insert([
            'english'        => $request->english,
            'cse'            => $request->cse,    
            'eee'            => $request->eee,
            'bba'            => $request->bba,
            'law_justice'    => $request->law_justice,
            'economics'      => $request->economics
        ]);

        return redirect()->route('admin.registration.index')->with('success', 'Add Data Successfully!');
    
    }	

    //----edit data(admin panel) 
    public function edit(Request $request)
    {
        $regFees = RegistrationFee::find($request->id);
        return view('admin.registration.edit', compact('regFees'));
    }

    public function updateD(Request $request)
    {
        $request->validate([
            'english'        =>  'required',
            'cse'            =>  'required',  
            'eee'            =>  'required',
            'bba'            =>  'required',
            'law_justice'    =>  'required',
            'economics'      =>  'required'
         
        ]);

        $id = $request->id;

        RegistrationFee::find($id)->update([
            'english'        => $request->english,
            'cse'            => $request->cse,    
            'eee'            => $request->eee,
            'bba'            => $request->bba,
            'law_justice'    => $request->law_justice,
            'economics'      => $request->economics
        ]);

        return redirect()->route('admin.registration.index')->with('success', 'Update Data Successfully!');
    }
    
}
