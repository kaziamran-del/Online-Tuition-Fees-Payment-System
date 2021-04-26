@extends('front_end.frontend_master')

@section('page_title')
	Fast Pay Service | Preview Page
@endsection

@section('content')
<!-- payment_area start -->
	<section class="payment_area">
		<div class="container">
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

				<!-- bank_area start -->
				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
						<div class="bank_info">
						  	<img src="{{asset('front_end')}}/assets/img/bank/1.png" class="card-img-top image_reduce" alt="logo icon" />
						  	<div class="card-body">
							    <h5 class="card-title account">Acc. No. 0021-0320000294</h5>
							    <p class="card-text">Sylhet Corporate Branch,Sylhet.</p>
						  </div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
						<div class="bank_info">
						  	<img src="{{asset('front_end')}}/assets/img/bank/2.png" class="card-img-top image_reduce" alt="logo icon" />
						  	<div class="card-body">
							    <h5 class="card-title account">Acc. No. 0116-36000000001</h5>
							    <p class="card-text">Dargah Gate,Sylhet.</p>
						  </div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
						<div class="bank_info">
						  	<img src="{{asset('front_end')}}/assets/img/bank/3.png" class="card-img-top image_reduce" alt="logo icon" />
						  	<div class="card-body">
							    <h5 class="card-title account">Acc. No. 117913116786245</h5>
							    <p class="card-text">Subidbazar Branch,Sylhet.</p>
						  </div>
						</div>
					</div>
				</div>
				<!-- bank_area end -->
				
				<div class="row">
					
					<div class="col-lg-8 col-md-8 col-sm-8"></div>
					<!-- Auto generate Reciept No -->
					<div class="col-lg-2 col-md-2 col-sm-2">
						<div class="form-group row">
							<label for="">Reciept No. 
								 <?php
									$b = chr(84).chr(70).chr(110);
									$a = rand(10,200000);
									echo "$b"."$a"
								  ?>	
							</label>
						</div>
					</div>

					<!-- Auto generate Date -->
					<div class="col-lg-2 col-md-2 col-sm-2">
						<div class="form-group row">
							<label for="">Date : {{Carbon\Carbon::now()->format('d-m-Y')}}</label> 
						</div>
					</div>	
				</div>
				<br/>
				
				<form id="payment-form" method="post" action="{{route('save.data')}}">
					{{csrf_field()}}
				<div class="row">
					<div class="col-md-12 col-sm-12">
					
					<h6 style="margin-bottom: 30px;">Student Information</h6>

						<div class="form-group row">
						    <label class="col-md-2 col-sm-2 control text-left" for="">Name of the  Student </label>
						   
							<div class="col-md-10 col-sm-10">
								<input style="text-transform: capitalize;" name="student_name" type="text" value="{{$views->student_name}}" class="form-control text-money field_width" readonly="readonly"/>
							</div>
						</div>

						<div class="form-group row">
						    <label class="col-md-2 col-sm-2 control text-left" for="">ID Number(9 digits) </label>
						   
							<div class="col-md-10 col-sm-10">
								<input name="student_id" type="text" value="{{$views->student_id}}" class="form-control text-money field_width" readonly="readonly"/>
							</div>
						</div>

						<div class="form-group row">
						    <label class="col-md-2 col-sm-2 control text-left" for="">Department & Batch </label>
						   
							<div class="col-md-10 col-sm-10">
								<input style="text-transform: capitalize;" name="program_batch" type="text" value="{{$views->program_batch}}" class="form-control text-money field_width" readonly="readonly"/>
							</div>
						</div>		
					</div>	
				</div>
				

				<div class="row">
					<div class="col-md-12 col-sm-12">
						<br/>
						<h6 style="margin-bottom: 30px;">Payment Detailes</h6>

                        <table class="table table-bordered table-striped">
                        	<thead>
	                            <tr>
	                                <th>S/N</th>                                             
	                                <th>Payment Name</th>                         	         
	                                <th>Select Option</th>  	                       
	                                <th>Late Fine</th>
	                                <th>Total Amount</th>   
	                            </tr>
                            </thead>

                            <tbody>                      

                            	@php
                            		$i = 1
                            	@endphp
                            	
                            	@php
                            		$total = 0;
                            	@endphp
                            	
                            	<tr>
                            		<td>{{$i++}}</td>
                            		<td>{{$views->payment_type}}</td>                        
                            		<td>{{$views->payment_val}}</td>                           
                            		<td>Tk {{$views->late_fine}}</td>
                            		<td>
                            			@php
		                            		$total += $views->amount;
		                            	@endphp
                            			Tk {{$views->amount}}
                            		</td>
                            	</tr>                     

                            	<tr>
                            		<td colspan="3"></td>
                            		<td><strong>Total</strong></td>
                            		<td>
                            			<strong>Tk {{$total}}</strong>
                            		</td>
                            	</tr>
                            	
                            </tbody>
                        </table>
                    </div>
                </div>                   
					
			
				<input type="hidden" name="student_id" value="{{$views->student_id}}">	
				<input type="hidden" name="payment_type" value="{{$views->payment_type}}">
				<input type="hidden" name="payment_val" value="{{$views->payment_val}}">	
				<input type="hidden" name="amount" value="{{$views->amount}}">

				<div class="row">
					<div class="col-md-4 col-sm-4">		
						<div class="payment_method">
							<h6>Select Payment Method</h6>
							<select class="form-control" name="payment_method" id="count" style="margin-top: 20px;">
								<option value="0">---Select Payment Method---</option>
								<option value="On Cash">On Cash</option>
								<option value="Stripe">Stripe</option>
								<option value="Bkash">Bkash</option>
								<option value="Roket">Roket</option>
							</select>

							<div class="one" style="display: none; margin-top: 20px;">
								<button class="btn btn-success">Confirm</button>
							</div>

							<div class="two" style="display: none; margin-top: 20px;">
								<button class="btn btn-success">Confirm</button> 
								<a href="{{route('checkout.credit-card')}}" class="btn btn-info">Go Stripe Account</a>
								
							</div>

							<div class="three" style="display: none; margin-top: 20px;">
								<label>three input field</label><br>
								<input type="text" name="" placeholder="eeeeee">
							</div>

							<div class="four" style="display: none; margin-top: 20px;">
								<label>four input field</label><br>
								<input type="text" name="" placeholder="eeeeee">
							</div>
						</div>	
					</div>
				</div>
			</form>	

				
			</div>
		</div>
	</section>
@endsection

@push('scripts')
<script>
	$(document).ready(function(){

	    $("#count").change(function(){
	        if($('#count').val()  == 'On Cash')
	        {
	        	$('.one').show();
	        	$('.two').hide();
	        	$('.three').hide();
	        	$('.four').hide();
	        }

	        else if($('#count').val()  == 'Stripe')
	        {
	        	$('.two').show();
	        	$('.one').hide();
	        	$('.three').hide();
	        	$('.four').hide();
	        }

	        else if($('#count').val()  == 'Bkash')
	        {
	        	$('.three').show();
	        	$('.one').hide();
	        	$('.two').hide();
	        	$('.four').hide();
	        }

	        else if($('#count').val()  == 'Roket')
	        {
	        	$('.four').show();
	        	$('.one').hide();
	        	$('.two').hide();
	        	$('.three').hide();
	        }

	        else if($('#count').val()  == '0')
	        {
	        	$('.one').hide();
	        	$('.two').hide();
	        	$('.three').hide();
	        	$('.four').hide();
	        }

	    });
	});
</script>
@endpush