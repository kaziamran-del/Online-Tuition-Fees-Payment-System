

<?php $__env->startSection('page_title'); ?>
	Fast Pay Service | tuition fees apps
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<!-- payment_area start -->
	<section class="payment_area">
		<div class="container">
			<div class="row">
		        <div class="col-md-8"></div>
		        <div class="col-md-4">
		            <?php if($message = Session::get('success')): ?>
		                <div class="alert alert-success alert-dismissible fade show" role="alert">
		                    <p><?php echo e($message); ?></p>
		                    <button type="button" class="close" data-dismiss="alert" aria-label="close">
		                        <span aria-hidden="true">&times;</span>
		                    </button>
		                </div>
		            <?php endif; ?>
		        </div>
		    </div>
		    
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
				<br/>
				
				<form method="post" action="<?php echo e(route('temporary.save.data')); ?>">
					<?php echo e(csrf_field()); ?>


					<div class="row">
						<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

							<div class="col-md-12 col-sm-12">
								<div class="form-group row">
								   <label class="col-md-2 col-sm-2 control text-left" for="">Name of the Student </label>
								   
									<div class="col-md-10 col-sm-10">
										<input style="text-transform: capitalize;" name="student_name" type="text" value="<?php echo e($row->student_name); ?>" class="form-control text-money field_width" readonly="readonly"/>
									</div>
								</div>
								
								<div class="form-group row">
								   <label class="col-md-2 col-sm-2 control text-left" for="">ID Number(9 digits) </label>
								   
									<div class="col-md-10 col-sm-10">
										<input id="" name="student_id" type="text" value="<?php echo e($row->student_id); ?>" class="form-control text-money field_width" readonly="readonly"/>
									</div>
								</div>
								
								<div class="form-group row">
									<label class="col-md-2 col-sm-2 control text-left" for="">Program & Batch </label>
									
									<div class="col-md-10 col-sm-10">
										<input style="text-transform: capitalize;" name="program_batch" type="text" value="<?php echo e($row->program_batch); ?>" class="form-control text-money field_width" readonly="readonly"/>
									</div>
								</div>
							</div>

						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
					
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="form-group">
								<label class="col-md-12 col-sm-12 control description" for="">Description</label>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<?php $__currentLoopData = $regFees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $regfee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

								<div class="form-group row">
									<input type="hidden" name="payment_type" value="Registration Fee" />
									<label class="col-lg-2 col-md-3 col-sm-2 control text-left" for="">1. Registration Fee</label>

									<div class="col-lg-6 col-md-6 col-sm-4">
										<select class="form-control" id="registration" name="payment_val">
											<option  name="" data-value="" value="" selected="select">Select a department</option>
											<option  name="english" data-value="<?php echo e($regfee->english); ?>" value="English">English</option>
											<option name="cse" data-value="<?php echo e($regfee->cse); ?>" value="CSE">CSE</option>
											<option  name="eee" data-value="<?php echo e($regfee->eee); ?>" value="EEE">EEE</option>
											<option  name="bba" data-value="<?php echo e($regfee->bba); ?>" value="BBA">BBA</option>
											<option  name="law_justice" data-value="<?php echo e($regfee->law_justice); ?>" value="Law & Justice">Law & Justice</option>
											<option  name="economics" data-value="<?php echo e($regfee->economics); ?>" value="Economics">Economics</option>
										</select>
									</div>
								  
									<div class="col-lg-2 col-md-3 col-sm-4">
										<input id="reg_fee" name="" type="text" class="form-control text-money textselect" readonly="readonly"/>
									</div>
								</div>

							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	

						
							<div class="form-group row">
								<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	

								<input type="hidden" name="payment_type" value="Term Admission Fee" />
								<label class="col-lg-2 col-md-3 col-sm-2 control text-left" for="">2. Term Admission Fee</label>

								<div class="col-lg-6 col-md-6 col-sm-4">
									<select class="form-control" id="season" multiple="multiple" name="payment_val[]">
										<option  name="term_fee" data-value="<?php echo e($row->term_fee); ?>" value="Spring">Spring</option>
										<option name="term_fee" data-value="<?php echo e($row->term_fee); ?>" value="Summer">Summer</option>
										<option  name="term_fee" data-value="<?php echo e($row->term_fee); ?>" value="Autumn">Autumn</option>
									</select>
								</div>

								<div class="col-lg-2 col-md-3 col-sm-4">
									<input id="fees" name="" type="text" class="form-control text-money textselect" readonly="readonly" />
								</div>
							</div>
					
							<div class="form-group row">
								<input type="hidden" name="payment_type" value="Monthly Tuition Fee" />
								<label class="col-lg-2 col-md-3 col-sm-2 control text-left" for="">3. Monthly Tuition Fee</label>

								<div class="col-lg-6 col-md-6 col-sm-4">
									<select class="form-control select" id="monthSelect" multiple="multiple" name="payment_val[]">
										<option name="month_fee" data-value="<?php echo e($row->month_fee); ?>" value="January">January</option>
										<option name="month_fee" data-value="<?php echo e($row->month_fee); ?>" value="February">February</option>
										<option name="month_fee" data-value="<?php echo e($row->month_fee); ?>" value="March">March</option>
										<option name="month_fee" data-value="<?php echo e($row->month_fee); ?>" value="April">April</option>
										<option name="month_fee" data-value="<?php echo e($row->month_fee); ?>" value="May">May</option>
										<option name="month_fee" data-value="<?php echo e($row->month_fee); ?>" value="June">June</option>
										<option name="month_fee" data-value="<?php echo e($row->month_fee); ?>" value="July">July</option>
										<option name="month_fee" data-value="<?php echo e($row->month_fee); ?>" value="August">August</option>
										<option name="month_fee" data-value="<?php echo e($row->month_fee); ?>" value="September">September</option>
										<option name="month_fee" data-value="<?php echo e($row->month_fee); ?>" value="October">October</option>
										<option name="month_fee" data-value="<?php echo e($row->month_fee); ?>" value="November">November</option>
										<option name="month_fee" data-value="<?php echo e($row->month_fee); ?>" value="December">December</option>
									</select>
								</div>
								
								<div class="col-lg-2 col-md-3 col-sm-4">
									<input id="monthlyFee" name="" type="text" class="form-control text-money textselect" readonly="readonly" />
								</div>
							</div>
							
							<div class="form-group row">
								<input type="hidden" name="payment_type" value="Re-admission Fee" />
								<label class="col-lg-2 col-md-3 col-sm-2 control text-left" for="">4. Re-admission Fee</label>

								<div class="col-lg-6 col-md-6 col-sm-4">
									<select class="form-control" id="readmission" multiple="multiple" name="payment_val[]">
										<option name="re_ad_fee" data-value="<?php echo e($row->re_ad_fee); ?>" value="Spring">Spring</option>
										<option name="re_ad_fee" data-value="<?php echo e($row->re_ad_fee); ?>" value="Summer">Summer</option>
										<option name="re_ad_fee" data-value="<?php echo e($row->re_ad_fee); ?>" value="Autumn">Autumn</option>
									</select>
								</div>
								
								<div class="col-lg-2 col-md-3 col-sm-4">
									<input id="readmissionFee" name="" type="text" class="form-control text-money textselect" readonly="readonly" />
								</div>
							</div>
					
							<div class="form-group row">
								<input type="hidden" name="payment_type" value="Retake Fee" />
								<label class="col-lg-2 col-md-3 col-sm-2 control text-left" for="">5. Retake Fee</label>

								<div class="col-lg-6 col-md-6 col-sm-4">
									<select class="form-control" id="retake" name="payment_val[]">
										<option  name="registration_fee" data-value="" value="" selected="select">Select number of retake</option>
										<option name="retake_fee" data-value="<?php echo e($row->retake_fee); ?>" value="One Course">One Course</option>
										<option name="retake_fee" data-value="<?php echo e($row->retake_fee*2); ?>" value="Two Course">Two Course</option>
										<option name="retake_fee" data-value="<?php echo e($row->retake_fee*3); ?>" value="Three Course">Three Course</option>				
									</select>
								</div>
								<div class="col-lg-2 col-md-3 col-sm-4">
									<input id="retakeFee" name="" type="text" class="form-control text-money textselect" readonly="readonly" />
								</div>
							</div>

						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 	
						 	<!-- create new database -->
							<div class="form-group row">
								<?php $__currentLoopData = $shortCourses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shortCourse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

									<input type="hidden" name="payment_type" value="Short Course Fee" />
									<label class="col-lg-2 col-md-3 col-sm-2 control text-left" for="">6. Short Course Fee</label>

									<div class="col-lg-6 col-md-6 col-sm-4">
										<select class="form-control" id="short_course" multiple="multiple" name="payment_val[]">			
											<option name="android_dep" data-value="<?php echo e($shortCourse->android_dep); ?>" value="Android Application Development">Android Application Development</option>

											<option name="microcontroller_robotics" data-value="<?php echo e($shortCourse->microcontroller_robotics); ?>" value="Microcontroller Programming And Robotics">Microcontroller Programming And Robotics</option>

											<option name="journalism" data-value="<?php echo e($shortCourse->journalism); ?>" value="Journalism and Media Studies">Journalism and Media Studies</option>					
										</select>
									</div>
									<div class="col-lg-2 col-md-3 col-sm-4">
										<input id="short_courseFee" type="text" class="form-control text-money textselect" name="" readonly="readonly" />
									</div>

								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
							</div>

							<div class="form-group row">
								<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	

									<input type="hidden" name="payment_type" value="Supplymentary Exam Fee" />
									<label class="col-lg-2 col-md-3 col-sm-2 control text-left" for="">7. Supplementary Exam Fee</label>

									<div class="col-lg-6 col-md-6 col-sm-4">
										<select class="form-control" id="supply" name="payment_val[]">	
											<option  name="registration_fee" data-value="" value="" selected="select">Select number of supple</option>			
											<option name="supply_fee" data-value="<?php echo e($row->supply_fee); ?>"  value="One Course">One Course</option>
											<option name="supply_fee" data-value="<?php echo e($row->supply_fee*2); ?>" value="Two Course">Two Course</option>
											<option name="supply_fee" data-value="<?php echo e($row->supply_fee*3); ?>" value="Three Course">Three Course</option>							
											row<option name="supply_fee" data-value="<?php echo e($row->supply_fee*4); ?>" value="Four Course">Four Course</option>
											<option name="supply_fee" data-value="<?php echo e($row->supply_fee*5); ?>" value="Five Course">Five Course</option>
										</select>
									</div>
									<div class="col-lg-2 col-md-3 col-sm-4">
										<input id="supplyFee" type="text" class="form-control text-money textselect" name="" readonly="readonly" />
									</div>

								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</div>

							<div class="form-group row">
								<?php $__currentLoopData = $lateFines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lateFine): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

									<label class="col-lg-2 col-md-3 col-sm-2 control text-left" for="">8. Late Fine</label>
									
									<div class="col-lg-6 col-md-6 col-sm-4">
										<input type="text" class="form-control" placeholder="If you pay tuition fees on time than no late fine will be counted" readonly="readonly" />
									</div>
									
									<div class="col-lg-2 col-md-3 col-sm-4">
										<span class="currency">Tk</span><input id="lateFine" name="jan" type="text" value="" data-value="" class="form-control text-money" readonly="readonly" /> 
									</div>

								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
							</div>
			
							<div class="form-group row">
								<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

								<input type="hidden" name="payment_type" value="Others Fee" />
								<label class="col-lg-2 col-md-3 col-sm-2 control text-left" for="">9. Others Fee(if you need)</label>

								<div class="col-lg-6 col-md-6 col-sm-4">
									<select class="form-control" id="other" multiple="multiple" name="payment_val[]">				
										<option name="others_fee" data-value="<?php echo e($row->others_fee); ?>" value="Transcript">Transcript</option>
										<option name="others_fee" data-value="<?php echo e($row->others_fee); ?>" value="Provisional Certificate">Provisional Certificate</option>
										<option name="others_fee" data-value="<?php echo e($row->others_fee); ?>" value="Original Certificate">Original Certificate</option>
									</select>
								</div>
								<div class="col-lg-2 col-md-3 col-sm-4">
									<input id="otherFee" type="text" class="form-control text-money textselect" name="" readonly="readonly" />
								</div>
							</div>
				
							<div class="form-group row">
								<input type="hidden" name="payment_type" value="Hostel Rent" />
								<label class="col-lg-2 col-md-3 col-sm-2 control text-left" for="">10. Hostel Rent</label>

								<div class="col-lg-6 col-md-6 col-sm-4">											
									<select class="form-control select" id="hostelRent" multiple="multiple" name="payment_val[]">			
										<option name="hostel_rent" data-value="<?php echo e($row->hostel_rent); ?>" value="January">January</option>
										<option name="hostel_rent" data-value="<?php echo e($row->hostel_rent); ?>" value="February">February</option>
										<option name="hostel_rent" data-value="<?php echo e($row->hostel_rent); ?>" value="March">March</option>
										<option name="hostel_rent" data-value="<?php echo e($row->hostel_rent); ?>" value="April">April</option>
										<option name="hostel_rent" data-value="<?php echo e($row->hostel_rent); ?>" value="May">May</option>
										<option name="hostel_rent" data-value="<?php echo e($row->hostel_rent); ?>" value="June">June</option>
										<option name="hostel_rent" data-value="<?php echo e($row->hostel_rent); ?>" value="July">July</option>
										<option name="hostel_rent" data-value="<?php echo e($row->hostel_rent); ?>" value="August">August</option>
										<option name="hostel_rent" data-value="<?php echo e($row->hostel_rent); ?>" value="9">September</option>
										<option name="hostel_rent" data-value="<?php echo e($row->hostel_rent); ?>" value="October">October</option>
										<option name="hostel_rent" data-value="<?php echo e($row->hostel_rent); ?>" value="November">November</option>
										<option name="hostel_rent" data-value="<?php echo e($row->hostel_rent); ?>" value="December">December</option>
									</select>
								</div>
								<div class="col-lg-2 col-md-3 col-sm-4">
									<input id="hostelfee" type="text" class="form-control text-money textselect" name="" readonly="readonly" />
								</div>
							</div>

							<div class="form-group row">
								<input type="hidden" name="payment_type" value="Miscellaneous Fee" />
								<label class="col-lg-2 col-md-3 col-sm-2 control text-left" for="">11. Miscellaneous Fee</label>

								<div class="col-lg-6 col-md-6 col-sm-4">
									<select class="form-control" id="miscellaneous" multiple="multiple" name="payment_val[]">
										<option name="miscellaneous_fee" data-value="<?php echo e($row->miscellaneous_fee); ?>" value="Spring">Spring</option>
										<option name="miscellaneous_fee" data-value="<?php echo e($row->miscellaneous_fee); ?>" value="Summer">Summer</option>
										<option name="miscellaneous_fee" data-value="<?php echo e($row->miscellaneous_fee); ?>" value="Autumn">Autumn</option>
									</select>
								</div>
								
								<div class="col-lg-2 col-md-3 col-sm-4">
									<input id="miscellaneousFee" type="text" class="form-control text-money textselect" name="" readonly="readonly"/>
									
								</div>							
								
							</div>
				
							<div class="form-group row">
								<div class="col-lg-4 col-md-4 col-sm-4"></div>

							    <div class="col-lg-4 col-md-5 col-sm-4 text_position">		
									<label class="total_amount total" for="">Total amount</label>
							    </div>

								<div class="col-lg-2 col-md-3 col-sm-2">
									<span class="currency">Tk</span><input id="number" name="amount" type="text" class="form-control text-money text-left totalAmount" readonly="readonly"/>
								</div>
							</div>

							<div class="form-group row">
								<label class="col-lg-2 col-md-2 col-sm-2 control text-left" for="">In Words </label>

								<div class="ccol-lg-10 col-md-10 col-sm-10">
									<input id="takaInWords" type="text" value=""
									class="form-control field_width text-left text-money" readonly="readonly"/>
								</div>
							</div>
						
						</div>
					</div>
					<br/>
					
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="text-center">
								<h6>প্রতি মাসের  ১০ তারিখের মধ্যে বেতন পরিশোধ করার জন্য অনুরোধ করা <br/> 
								যাচ্ছে । অন্যথায় প্রতিদিন  ১০/- টাকা হারে বিলম্বিত ফি প্রদান করতে হবে । </h6>
								<h6 class="bank_hour">ব্যাংকিং সময়<br/> 
								১০.০০ - ২.০০<br/>
								৪.০০ - ৬.০০</h6>
							</div>
						</div>
					</div>
					<br/>
					<br/>
					<br/>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="form-group">
				              <label class="control" for="">Student's Signature</label>					
								<div class="form-group">
									<label for="">Mobile No : <?php echo e($row->mobile_no); ?></label>		
								</div>
				            </div>
						</div>
						
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="form-group text_position">
				              <label class="control" for="">Official Signature</label>
				            </div>
						</div>
					</div>
				
					<div class="row pb-20">
						<div class="col-lg-2 col-md-2 col-sm-2">
							<input class="btn btn-info" type="button" value="Print The Document" onclick="window.print()" />
						</div>

						<div class="col-lg-2 col-md-2 col-sm-2">
            				<input type="submit" value="Preview" class="btn btn-primary" />
            			</div>
	  
					</div>
					
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</form>	
			</div>
		</div>
	</section>
	<!-- payment_area end -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front_end.frontend_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\p400\resources\views/front_end/pages/payment_bill.blade.php ENDPATH**/ ?>