@extends('admin.admin_master')

@section('shortCourse')
    active
@endsection

@section('page_title')
    Admin Panel | ShortCourse Fee Table
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
                     <a href="{{route('admin.shortCourse.create')}}" class="btn btn-primary">Insert Short Course Fee</a>
                </div>
                <div class="col-md-8"></div>               
            </div>

                <div class="row">
                    <div class="col-md-12"> 
                        <br/>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Android Application Development</th>                           
                                    <th>Microcontroller Programming And Robotics</th>
                                    <th>Journalism and Media Studies</th>   
                                    <th>Action</th>               
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($shortCourses as $shortCourse)
                                    <tr>                                    
                                        <td>{{$shortCourse->android_dep}} Taka</td>
                                        <td>{{$shortCourse->microcontroller_robotics}} Taka</td>
                                        <td>{{$shortCourse->journalism}} Taka</td>
                                                                                 
                                        <td><a href="{{url('admin/shortCourse/edit/' .$shortCourse->id)}}" class="btn btn-sm btn-warning" title="Edit">Edit</a></td>                 
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>            
                </div>
        </div>
    </div>
@endsection
