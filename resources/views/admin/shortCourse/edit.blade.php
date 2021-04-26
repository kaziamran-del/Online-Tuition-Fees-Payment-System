@extends('admin.admin_master')

@section('shortCourse')
    active
@endsection

@section('page_title')
    Admin Panel | Update Short Course Fee
@endsection

@section('admin_content')
<div class="data_table">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h4 align="left" class="head">Update Short Course Fee</h4>
            </div> 
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                @if(\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{ \Session::get('success') }}</p>
                </div>
                @endif
                
                <form method="post" action="{{route('update.shortCourse.data')}}">
                    {{csrf_field()}}

                    <input type="hidden" value="{{$shortCourses->id}}" name="id" />

                        <div class="form-group">
                            Android Application Development <input type="text" name="android_dep" class="from-control extra"  value="{{$shortCourses->android_dep}}" style="margin-left: 70px;"/>
                        </div>

                        <div class="form-group">
                            Microcontroller Programming And Robotics <input type="text" name="microcontroller_robotics" class="from-control extra"  value="{{$shortCourses->microcontroller_robotics}}" style="margin-left: 10px;"/>
                        </div>

                        <div class="form-group">
                            Journalism and Media Studies <input type="text" name="journalism" class="from-control extra"  value="{{$shortCourses->journalism}}" style="margin-left: 90px;"/>
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Update" class="btn btn-sm btn-primary" />
                        </div>
                </form>
            </div>
        </div>          
    </div> 
</div> 
@endsection   
    
    
