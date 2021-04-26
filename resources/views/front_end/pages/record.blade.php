@extends('front_end.frontend_master')

@section('page_title')
    Student Record Info
@endsection

@section('content')
    <section class="payment_area">
        <div class="container">
            <div class="reciept area">

                <!-- header_area start -->
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="title">                         
                            <img src="{{asset('front_end')}}/assets/img/logo.jpg" alt="" />
                            <p>Student Tuition Fee Apps</p>
                        </div>  
                    </div>
                </div>           
                <!-- header_area end -->

                <!-- student_area end -->
                 <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <h6 style="margin-bottom: 30px;">Student Information</h6>

                        <div class="form-group row">
                            <label class="col-md-2 col-sm-2 control text-left" for="">Name of the  Student </label>
                           
                            <div class="col-md-10 col-sm-10">
                                <input style="text-transform: capitalize;" name="student_name" type="text" value="{{$std->student_name}}" class="form-control text-money field_width" readonly="readonly"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-sm-2 control text-left" for="">ID Number(9 digits) </label>
                           
                            <div class="col-md-10 col-sm-10">
                                <input name="student_id" type="text" value="{{$std->student_id}}" class="form-control text-money field_width" readonly="readonly"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-sm-2 control text-left" for="">Department & Batch </label>
                           
                            <div class="col-md-10 col-sm-10">
                                <input style="text-transform: capitalize;" name="program_batch" type="text" value="{{$std->program_batch}}" class="form-control text-money field_width" readonly="readonly"/>
                            </div>
                        </div>
                    </div> 
                </div>     

                <div class="row">
                    <div class="col-md-12 col-sm-12"> 
                        <h6 style="margin-bottom: 30px;">Payment Information</h6>
                        <br/>

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr> 
                                    <th>S/N</th>                                                
                                    <th>Payment Type</th>
                                    <th>Selected Option</th>
                                    <th>Total</th>   
                                    <th>Is paid</th>
                                    <th>Date</th>          
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($records as $row)
                                <tr>
                                    <td>{{$loop->index}}</td>
                                    <td>{{$row->payment_type}}</td>
                                    <td>{{$row->payment_val}}</td>
                                    <td>{{$row->amount}}</td>
                                    <td>
                                        @if($row->payment_status == 1)
                                            <span class="btn btn-sm btn-success">Paid</span>
                                        @else
                                            <span class="btn btn-sm btn-danger">Not Paid</span>
                                        @endif
                                    </td> 
                                    <td>{{$row->created_at}}          
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>            
                </div>
                
            </div>
        </div>    
    </section>
@endsection