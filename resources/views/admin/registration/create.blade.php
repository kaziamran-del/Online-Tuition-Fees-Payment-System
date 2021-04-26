@extends('admin.admin_master')

@section('regfee')
    active
@endsection

@section('page_title')
    Admin Panel | Registration Fee Create
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
                    <h4 align="left" class="head">Insert Registration Fee</h4>
                </div> 
            </div>

                <div class="row">
                    <div class="col-md-12 col-sm-12"> 
                        
                        <form method="post" action="{{route('regFee.store.data')}}">
                            {{csrf_field()}}

                            <div class="form-group">
                                English <input type="text" name="english" class="from-control extra" placeholder="Enter Reg Fee" style="margin-left: 64px;" />
                            </div>

                            <div class="form-group">
                                CSE <input type="text" name="cse" class="from-control extra" placeholder="Enter Reg Fee" style="margin-left: 82px;" />
                            </div>

                            <div class="form-group">
                                EEE <input type="text" name="eee" class="from-control extra" placeholder="Enter Reg Fee" style="margin-left: 82px;" />
                            </div>

                            <div class="form-group">
                                BBA <input type="text" name="bba" class="from-control extra" placeholder="Enter Reg Fee" style="margin-left: 82px;" />
                            </div>

                            <div class="form-group">
                                Law & justice <input type="text" name="law_justice" class="from-control extra" placeholder="Enter Reg Fee" style="margin-left: 27px;" />
                            </div>

                            <div class="form-group">
                                Economics <input type="text" name="economics" class="from-control extra" placeholder="Enter Reg Fee" style="margin-left: 42px;" />
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