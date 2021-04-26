<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Data;
use App\User;

class DepartmentController extends Controller
{
    //
    // Fetch data to the database
    public function cse($department_name)
    {
    	$data = Data::where('department_name',$department_name)->get('department_name');
    	return view('admin.department.cse', compact('data'));
    }
}
