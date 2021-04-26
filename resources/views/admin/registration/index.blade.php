@extends('admin.admin_master')

@section('regfee')
    active
@endsection

@section('page_title')
    Admin Panel | Registration Fee Table
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
                <div class="col-md-4" align="left" style="margin-top: 10px;">                       
                     <a href="{{route('admin.registration.create')}}" class="btn btn-primary">Insert Registration Fee</a>
                </div>
                <div class="col-md-8"></div>               
            </div>

                <div class="row">
                    <div class="col-md-12"> 
                        <br/>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>                                           
                                    <th>English</th>
                                    <th>CSE</th>  
                                    <th>EEE</th>   
                                    <th>BBA</th>
                                    <th>Law & Justice</th> 
                                    <th>Economics</th>                       
                                    <th>Action</th>                  
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($regFees as $regFee)
                                <tr>                                    
                                    <td>{{$regFee->english}} Taka</td>
                                    <td>{{$regFee->cse}} Taka</td>
                                    <td>{{$regFee->eee}} Taka</td>   
                                    <td>{{$regFee->bba}} Taka</td> 
                                    <td>{{$regFee->law_justice}} Taka</td> 
                                    <td>{{$regFee->economics}} Taka</td>                                                             
                                    <td><a href="{{url('admin/registration/edit/' .$regFee->id)}}" class="btn btn-sm btn-warning" title="Edit">Edit</a></td>                 
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>            
                </div>
        </div>
    </div>
@endsection
