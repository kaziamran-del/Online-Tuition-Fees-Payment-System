

<?php $__env->startSection('page_title'); ?>
	Fast Pay Service | Preview Page
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<!-- payment_area start -->
	<section class="payment_area">
		<div class="container">
			<div class="reciept area">

				<!-- header_area start -->
				<div class="row">
				    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="title">							
							<img src="<?php echo e(asset('front_end')); ?>/assets/img/logo.jpg" alt="" />
							<p>Student Tuition Fee Apps</p>
						</div>  
					</div>
				</div>		
				<!-- header_area end -->

				<!-- bank_area start -->
				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
						<div class="card bank_info">
						  	<img src="<?php echo e(asset('front_end')); ?>/assets/img/bank/1.png" class="card-img-top image_reduce" alt="logo icon" />
						  	<div class="card-body">
							    <h5 class="card-title account">Acc. No. 0021-0320000294</h5>
							    <p class="card-text">Sylhet Corporate Branch,Sylhet.</p>
						  </div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
						<div class="card bank_info">
						  	<img src="<?php echo e(asset('front_end')); ?>/assets/img/bank/2.png" class="card-img-top image_reduce" alt="logo icon" />
						  	<div class="card-body">
							    <h5 class="card-title account">Acc. No. 0116-36000000001</h5>
							    <p class="card-text">Dargah Gate,Sylhet.</p>
						  </div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
						<div class="card bank_info">
						  	<img src="<?php echo e(asset('front_end')); ?>/assets/img/bank/3.png" class="card-img-top image_reduce" alt="logo icon" />
						  	<div class="card-body">
							    <h5 class="card-title account">Acc. No. 117913116786245</h5>
							    <p class="card-text">Subidbazar Branch,Sylhet.</p>
						  </div>
						</div>
					</div>
				</div>
				<!-- bank_area end -->

				<!-- Reciept and Date start -->
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
							<label for="">Date : <?php echo e(Carbon\Carbon::now()->format('d-m-Y')); ?></label> 
						</div>
					</div>	
				</div>
				<!-- Reciept and Date end -->

				<br/>

				<!-- student info start -->
				
				<div class="row">
					<div class="col-md-12 col-sm-12">

						<div class="form-group row">
						    <label class="col-md-2 col-sm-2 control text-left" for="">Name of the  Student </label>
						   
							<div class="col-md-10 col-sm-10">
								<input style="text-transform: capitalize;" name="student_name" type="text" value="$lastinsertedname" class="form-control text-money field_width" readonly="readonly"/>
							</div>
						</div>

						<div class="form-group row">
						    <label class="col-md-2 col-sm-2 control text-left" for="">ID Number(9 digits) </label>
						   
							<div class="col-md-10 col-sm-10">
								<input name="student_id" type="text" value="$lastinsertedid" class="form-control text-money field_width" readonly="readonly"/>
							</div>
						</div>

						<div class="form-group row">
						    <label class="col-md-2 col-sm-2 control text-left" for="">Program & Batch </label>
						   
							<div class="col-md-10 col-sm-10">
								<input style="text-transform: capitalize;" name="program_batch" type="text" value="$lastinsertedprogram_batch" class="form-control text-money field_width" readonly="readonly"/>
							</div>
						</div>
					</div>	
				</div>
				
				<!-- student info start -->

			</div>	
		</div>
	</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front_end.frontend_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\p400\resources\views/front_end/pages/preview.blade.php ENDPATH**/ ?>