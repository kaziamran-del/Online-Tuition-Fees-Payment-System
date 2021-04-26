<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ShortCourse;

class ShortCourseController extends Controller
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
    	$shortCourses = ShortCourse::latest()->get();
    	return view('admin.shortCourse.index', compact('shortCourses'));
    }

    //
    public function create()
    {
    	return view('admin.shortCourse.create');
    }

    //
    public function store(Request $request)
    {
        $request->validate([
            'android_dep'     				=>  'required',
            'microcontroller_robotics'      =>  'required',
            'journalism'                    =>  'required' 
        ]);

        ShortCourse::insert([
            'android_dep'                   => $request->android_dep,
            'microcontroller_robotics'      => $request->microcontroller_robotics,
            'journalism'                    => $request->journalism   
        
        ]);

        return redirect()->route('admin.shortCourse.index')->with('success', 'Add ShortCourse Fee Successfully!');
    
    }	

    //
    public function edit(Request $request)
    {
    	$shortCourses = ShortCourse::find($request->id);
    	return view('admin.shortCourse.edit', compact('shortCourses'));
    }

    //
    public function updateD(Request $request)
    {
        $request->validate([
            'android_dep'     			   =>  'required',
            'microcontroller_robotics'     =>  'required',
            'journalism'                   =>  'required'        
        ]);

        $id = $request->id;

        ShortCourse::find($id)->update([
            'android_dep'                  => $request->android_dep,
            'microcontroller_robotics'     => $request->microcontroller_robotics,
            'journalism'                   => $request->journalism             
        ]);

        return redirect()->route('admin.shortCourse.index')->with('success', 'Update ShortCourse Fee Successfully!');
    }

}
