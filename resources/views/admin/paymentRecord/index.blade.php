@extends('admin.admin_master')

@section('record')
    active
@endsection

@section('page_title')
    Admin Panel | Payment Record
@endsection

@section('admin_content')
    <div class="data_table1">
        <div class="container">

            <div class="row">
                <div class="col-md-9"></div>
                <div class="col-md-3">
                    @if($message = Session::get('paid'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <p>{{$message}}</p>
                            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-md-9"></div>
                <div class="col-md-3">
                    @if($message = Session::get('unpaid'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <p>{{$message}}</p>
                            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-md-8"></div>
                <div class="col-md-4">
                    @if($message = Session::get('unpaid'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <p>{{$message}}</p>
                            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                </div>
            </div>

            <div class="row">

                <br/>
                <div class="col-md-9" align="left" style="margin-top: 10px;">                     
                     <h5 align="left" style="font-size: 18px;
                      border: 1px solid #333;
                      display: inline-block;
                      padding: 5px;
                      margin-bottom: 20px;">Payment Record</h5>
                </div>

                <div class="col-md-3" align="right" style="margin-top: 10px;">             
                    <form action="{{route('admin.paymentRecord.search')}}" method="get">   
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
                                <th>S/N</th>
                                <th>Student Id</th> 
                                <th>Student Name</th>                                             
                                <th>Payment Method</th>
                                <th>Payment Name</th>
                                <th>Select Option</th>
                                <th>Total</th>   
                                <th>Payment Status</th> 
                                <th>Date</th>         
                            </tr>
                        </thead>   

                        <tbody>
                            @foreach($payments as $payment)
                                <tr>
                                    <td>#00{{$payment->id}}</td>
                                    <td>{{$payment->student_id}}</td>
                                    <td style="text-transform: capitalize;">{{$payment->student_name}}</td>
                                    <td>{{$payment->payment_method}}</td> 
                                    <td>{{$payment->payment_type}}</td> 
                                    <td>{{$payment->payment_val}}</td>                
                                    <td>{{$payment->amount}}</td>
                                    <td>
                                        @if($payment->payment_status == 1)
                                            <span class="btn btn-sm btn-success">Paid</span>
                                        @else
                                            <span class="btn btn-sm btn-danger">Not Paid</span>
                                        @endif
                                    </td>
                                    <td>{{$payment->created_at}}</td>
                                    
                                </tr>
                            @endforeach
                        </tbody>          
                        
                    </table>
                  {{$payments->links()}}
                </div>            
            </div>

        </div>
    </div>
@endsection
