@extends('admin.admin_master')

@section('lateFine')
    active
@endsection

@section('page_title')
    Admin Panel | Late Fine Table
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
                     <a href="{{route('admin.lateFine.create')}}" class="btn btn-primary">Insert Late Fine</a>
                </div>
                <div class="col-md-8"></div>               
            </div>

                <div class="row">
                    <div class="col-md-12"> 
                        <br/>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>January</th>                                            
                                    <th>February</th>
                                    <th>March</th>  
                                    <th>April</th>   
                                    <th>May</th>
                                    <th>June</th> 
                                    <th>July</th>                       
                                    <th>August</th>  
                                    <th>September</th>  
                                    <th>October</th> 
                                    <th>November</th>
                                    <th>December</th>  
                                    <th>Action</th>          
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($lateFines as $lateFine)
                                <tr>                                    
                                    <td>{{$lateFine->jan}} Taka</td>
                                    <td>{{$lateFine->feb}} Taka</td>
                                    <td>{{$lateFine->mar}} Taka</td>
                                    <td>{{$lateFine->apr}} Taka</td>   
                                    <td>{{$lateFine->may}} Taka</td> 
                                    <td>{{$lateFine->jun}} Taka</td> 
                                    <td>{{$lateFine->jul}} Taka</td>
                                    <td>{{$lateFine->aug}} Taka</td>
                                    <td>{{$lateFine->sep}} Taka</td>
                                    <td>{{$lateFine->oct}} Taka</td>
                                    <td>{{$lateFine->nov}} Taka</td>
                                    <td>{{$lateFine->dec}} Taka</td>                                                             
                                    <td><a href="{{url('admin/lateFine/edit/' .$lateFine->id)}}" class="btn btn-sm btn-warning" title="Edit">Edit</a></td>                 
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>            
                </div>
        </div>
    </div>
@endsection