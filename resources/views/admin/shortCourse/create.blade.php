@extends('admin.admin_master')

@section('regfee')
    active
@endsection

@section('page_title')
    Admin Panel | Short Course Fee Create
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
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h4 align="left" class="head">Insert Short Course Fee</h4>
                </div> 
            </div>

                <div class="row">
                    <div class="col-md-12 col-sm-12"> 
                        
                        <form method="post" action="{{route('shortCourse.store.data')}}">
                            {{csrf_field()}}

                            <div class="form-group">
                                Android Application Development <input type="text" name="android_dep" class="from-control extra" placeholder="Enter Short Course Fee" style="margin-left: 70px;" />
                            </div>

                            <div class="form-group">
                                Microcontroller Programming And Robotics <input type="text" name="microcontroller_robotics" class="from-control extra" placeholder="Enter Short Course Fee" style="margin-left: 10px;" />
                            </div>

                            <div class="form-group">
                                Journalism and Media Studies <input type="text" name="journalism" class="from-control extra" placeholder="Enter Short Course Fee" style="margin-left: 90px;" />
                            </div>

                            <div class="form-group">
                                <input type="submit" value="Insert" class="btn btn-sm btn-primary" />
                            </div>
                        </form>
                    </div>            
                </div>

        </div>
    </div>    
@endsection