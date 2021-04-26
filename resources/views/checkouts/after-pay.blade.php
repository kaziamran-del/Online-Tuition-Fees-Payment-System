@extends('front_end.frontend_master')

@section('page_title')
	Fast Pay Service | Payment done | Payment Receipt
@endsection

@section('content')
    <div class="container">

		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="title">							
					<img src="{{asset('front_end')}}/assets/img/logo.jpg" alt="" />
					<p>Student Tuition Fee Apps</p>
				</div>  
			</div>
		</div>

		<div class="row" style="float : right;">
			<button onclick="window.print()" class="btn btn-sm btn-primary" style="margin-right : 10px;">Print</button>

			<a href="{{url('/preview-pdf')}}" class="btn btn-sm btn-info">Download Receipt!!</a>
		</div>		

		<div class="row">
            <div class="col-md-6 col-sm-6">
                
                <h5 style="margin-bottom: 30px;font-weight: bold;">Student Information</h5>

                    <div class="form-group row">
                        <label class="col-md-4 col-sm-4 control text-left" for="">Name of the  Student </label>
                       
                        <div class="col-md-8 col-sm-8">
                            <input style="text-transform: capitalize;" name="student_name" type="text" value="{{$cards->student_name}}" class="form-control text-money field_width" readonly="readonly"/>
                        </div>
                    </div>

					<div class="form-group row">
                        <label class="col-md-4 col-sm-4 control text-left" for="">ID Number(9 digits) </label>
                       
                        <div class="col-md-8 col-sm-8">
                            <input name="student_id" type="text" value="{{$cards->student_id}}" class="form-control text-money field_width" readonly="readonly"/>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-4 col-sm-4 control text-left" for="">Program & Batch </label>
                       
                        <div class="col-md-8 col-sm-8">
                            <input style="text-transform: capitalize;" name="program_batch" type="text" value="{{$cards->program_batch}}" class="form-control text-money field_width" readonly="readonly"/>
                        </div>
                    </div>   
            </div>

			<div class="col-md-6 col-sm-6" style="margin-top : 50px;">

				<div class="form-group row">
                    <label class="col-md-4 col-sm-4 control text-left" for="">Payment Name</label>
                   
                    <div class="col-md-8 col-sm-8">
                        <input style="text-transform: capitalize;" name="payment_type" type="text" value="{{$cards->payment_type}}" class="form-control text-money field_width" readonly="readonly"/>
                    </div>
                </div>

				<div class="form-group row">
                    <label class="col-md-4 col-sm-4 control text-left" for="">Select Option</label>
                   
                    <div class="col-md-8 col-sm-8">
                        <input style="text-transform: capitalize;" name="payment_val" type="text" value="{{$cards->payment_val}}" class="form-control text-money field_width" readonly="readonly"/>
                    </div>
                </div>

				<div class="form-group row">
                        <label class="col-md-4 col-sm-4 control text-left" for="">Total Amount(Taka)</label>
                       
                        <div class="col-md-8 col-sm-8">
                            <input style="text-transform: capitalize;" name="amount" type="text" value="{{$cards->amount}}" class="form-control text-money field_width" readonly="readonly"/>
                        </div>
                    </div>
			</div>
        </div>  
              		
		<div class="row" style="margin-top: 60px;margin-left: 310px;">
			<div class="card text-center"> 
				<div class="card-body">
					<h2 class="text-capitalize">Thanks for your payment.</h2>
					<h4>Your payment is done Successfully!!</h4>
				</div>
			</div>
		</div>
    </div>
@endsection
