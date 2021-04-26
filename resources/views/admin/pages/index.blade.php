@extends('admin.admin_master')

@section('student')
    active
@endsection

@section('page_title')
    Admin Panel | Student Data
@endsection

@section('admin_content')
    <div class="row">
        <div class="col-md-8"></div>
        <div class="col-md-4">
            @if($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <p>{{$message}}</p>
                    <button type="button" class="close" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
        </div>
    </div>      

    <div class="data_table1">
        <div class="container">
            <div class="row">

                <br/>
                <div class="col-md-9" align="left" style="margin-top: 10px;">                       
                     <a href="{{route('admin.pages.create')}}" class="btn btn-primary">Register ID</a>
                </div>

                <div class="col-md-3" align="right" style="margin-top: 10px;">             
                    <form action="{{route('admin.pages.search')}}" method="get">   
                        {{csrf_field()}}
                        <div class="input-group">
                            <input type="search" name="search" placeholder="search here.." class="form-control" required />
                            <span class="input-group-prepend">
                                <button type="submit" class="btn btn-primary">search</button>
                            </span>
                        </div>
                    </form>  
                </div>               
            </div>

                <div class="row">
                    <div class="col-md-12"> 
                        <br/>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Student Id</th>                                            
                                    <th>Student Name</th>
                                    <th>Department & Batch</th>  
                                    <th>Term Fee</th>   
                                    <th>Month Fee</th>
                                    <th>Readmit Fee</th> 
                                    <th>Retake Fee</th>
                                    <th>Supply Fee</th>
                                    <th>Others Fee</th>
                                    <th>Hostel Rent</th>  
                                    <th>Misce. Fee</th>
                                    <th>Mobile</th>         
                                    <th>Action</th>                  
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $row)
                                <tr>
                                      
                                    <td>{{$row->student_id}}</td>
                                    <td>{{$row->student_name}}</td>
                                    <td>{{$row->program_batch}}</td>
                                    <td>{{$row->term_fee}} Taka</td>   
                                    <td>{{$row->month_fee}} Taka</td> 
                                    <td>{{$row->re_ad_fee}} Taka</td> 
                                    <td>{{$row->retake_fee}} Taka</td> 
                                    <td>{{$row->supply_fee}} Taka</td> 
                                    <td>{{$row->others_fee}} Taka</td> 
                                    <td>{{$row->hostel_rent}} Taka</td>     
                                    <td>{{$row->miscellaneous_fee}} Taka</td>      
                                    <td>{{$row->mobile_no}}</td>                 
                                    <td><a href="{{url('admin/pages/edit/'.$row->id)}}" class="btn btn-sm btn-warning" title="Edit">Edit</a></td>                 
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$data->links()}}
                    </div>            
                </div>

            </div>
        </div>
@endsection