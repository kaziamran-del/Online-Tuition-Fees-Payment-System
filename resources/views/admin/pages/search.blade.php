@extends('admin.admin_master')

@section('student')
    active
@endsection

@section('page_title')
	Admin Panel | Search Data
@endsection

@section('admin_content')
    @if($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif
    <div class="data_table1">
    	<div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h4 align="left" class="head">Search Data</h4>
                </div> 
            </div>

                <div class="row">
                    <div class="col-md-12"> 
                        <br/>
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Student Id</th>                                                 
                                <th>Student Name</th>
                                <th>Program & Batch</th>                  
                                <th>Term Fee</th>   
                                <th>Month Fee</th>
                                <th>Readmit Fee</th> 
                                <th>Retake Fee</th>
                                <th>Supply Fee</th>
                                <th>Others Fee</th>
                                <th>Hostel Rent</th>  
                                <th>Misce. Fee</th>
                                <th>Mobile</th>         
                                <th>Edit</th>
                            </tr>
                            @foreach($adds as $add)
                            <tr>
                                <td>{{$add->student_id}}</td>
                                <td>{{$add->student_name}}</td>
                                <td>{{$add->program_batch}}</td>                
                                <td>{{$add->term_fee}}</td>   
                                <td>{{$add->month_fee}}</td> 
                                <td>{{$add->re_ad_fee}}</td> 
                                <td>{{$add->retake_fee}}</td> 
                                <td>{{$add->supply_fee}}</td> 
                                <td>{{$add->others_fee}}</td> 
                                <td>{{$add->hostel_rent}}</td>     
                                <td>{{$add->miscellaneous_fee}}</td>      
                                <td>{{$add->mobile_no}}</td>                 
                                <td><a href="{{url('admin/pages/edit/'.$add->id)}}" class="btn btn-sm btn-warning" title="Edit">Edit</a></td> 
                            </tr>
                            @endforeach
                        </table>

                    </div>            
                </div>

            </div>
        </div>
@endsection