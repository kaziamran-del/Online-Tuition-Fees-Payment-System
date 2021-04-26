@extends('admin.admin_master')

@section('dashboard')
    active
@endsection

@section('page_title')
	Admin Panel 
@endsection

@section('admin_content')
    <div class="data_table">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">{{Auth::user()->name}} 
                            <span class="badge badge-success">Active Now</span>

                            <b style="float: right;">Total Users <span class="badge badge-danger">{{count($users)}}</span></b>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped">
                                            <thead>                              
                                                <tr>
                                                    <th>SI No</th>
                                                    <th>User Id</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Created At</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($users as $user)
                                                <tr>
                                                    <td>{{$loop->index}}</td>
                                                    <td>#000{{$user->id}}</td>
                                                    <td>{{$user->name}}</td>
                                                    <td>{{$user->email}}</td>
                                                    <td>{{$user->created_at}}</td>
                                                </tr>
                                                @endforeach                                        
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.col-lg-4 (nested) -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>              
                    <!-- /.panel -->
                </div>
            </div>
        </div>
    </div>
@endsection
