@extends('front_end.frontend_master')

@section('page_title')
	Fast Pay Service | Tuition Fees Apps
@endsection

@section('content')

	<!-- header_area start -->
	<section class="header_area pt-20">
		<div class="container">

			<div class="row">
		        <div class="col-md-9"></div>
		        <div class="col-md-3">
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

			<div class="row">
			    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="title">
						<img src="{{asset('front_end')}}/assets/img/logo.jpg" alt="" />
						<p>Student Tuition Fees Apps</p>
					</div>  
				</div>
			</div>
		</div>
	</section>			
	<!-- header_area end -->

	<!-- id_from start -->
	<section class="id_from">
		<div class="container">

			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<form method="get" action="{{url('/payment_bill')}}" >
						<div class="from-field">
							<label for="">id number(9 digits)</label>
							 
							<input id="coupon-field" type="text" name="student_id" maxlength="11" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" title="Please enter exactly 9 digits" placeholder="enter id" required/> 
							
							<button type="submit" class="btn btn-sm btn-primary" style="text-transform: capitalize;">
                                {{ __('find') }}
                            </button>

						</div>							
					</form>
				</div>
			</div>
		</div>
	</section>	
	<!-- id_from end -->
@endsection