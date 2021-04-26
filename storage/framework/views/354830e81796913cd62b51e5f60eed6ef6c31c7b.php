

<?php $__env->startSection('student'); ?>
    active
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_title'); ?>
    Admin Panel | Create Student Data
<?php $__env->stopSection(); ?>

<?php $__env->startSection('admin_content'); ?>
<div class="data_table">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h4 align="left" class="head">Register ID</h4>
            </div> 
        </div>

    	<div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
            	<?php if(count($errors) > 0): ?>
            	<div class="alert alert-danger">
            		<ul>
            			<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            				<li><?php echo e($error); ?></li>
            			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            		</ul>
            	</div>
            	<?php endif; ?>

            	<?php if(\Session::has('success')): ?>
            	<div class="alert alert-success">
            		<p><?php echo e(\Session::get('success')); ?></p>
            	</div>
            	<?php endif; ?>
            	
            	<form method="post" action="<?php echo e(route('store.data')); ?>">
            		<?php echo e(csrf_field()); ?>


                    <div class="form-group">
                        Student Id <input id="coupon-id" type="text" maxlength="11" name="student_id" class="from-control extra" style="margin-left: 43px;" placeholder="Enter Student Id" required/> 
                    </div>

                    <div class="form-group">
                        Student Name <input type="text" name="student_name" class="from-control extra" style="margin-left: 18px;text-transform: capitalize;" placeholder="Enter Name" />
                    </div>
            		
            		<div class="form-group">
            			Program & Batch <input type="text" name="program_batch" class="from-control extra" style="text-transform: capitalize;" placeholder="Enter Program & Batch" />
            		</div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label class="col-md-12 col-sm-12 control description" for="">Description</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 col-sm-6">

                            <div class="form-group">
                                Term Fee <input type="text" name="term_fee" class="from-control extra" placeholder="Enter Term Fee" style="margin-left: 52px;"/>
                            </div>

                            <div class="form-group">
                                Month Fee <input type="text" name="month_fee" class="from-control extra" placeholder="Enter Month Fee"style="margin-left: 43px;" />
                            </div>

                            <div class="form-group">
                                Readmit Fee <input type="text" name="re_ad_fee" class="from-control extra" placeholder="Enter Readmit Fee" style="margin-left: 30px;"/>
                            </div>

                            <div class="form-group">
                                Retake Fee <input type="text" name="retake_fee" class="from-control extra" placeholder="Enter Retake Fee" style="margin-left: 40px;"/>
                            </div>

                            <div class="form-group">
                               Supple Fee <input type="text" name="supply_fee" class="from-control extra" style="margin-left: 39px;" placeholder="Enter Supply Fee" />
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6">

                            <div class="form-group">
                               Others Fee <input type="text" name="others_fee" class="from-control extra" style="margin-left: 10px;" placeholder="Enter Others Fee" />
                            </div>

                    		<div class="form-group">
                    			Hostel Rent <input type="text" name="hostel_rent" class="from-control extra" style="margin-left: 4px;" placeholder="Enter Hostel Rent" />
                    		</div>

                             <div class="form-group">
                                Misce. Fee <input type="text" name="miscellaneous_fee" class="from-control extra" placeholder="Enter Misce. Fee" style="margin-left: 13px;"/>
                            </div>
                    
                            <div class="form-group">
                                Mobile   <input type="text" name="mobile_no" class="from-control extra" placeholder="Enter Mobile Number" style="margin-left: 38px;"/>
                            </div>
                        </div>
                    </div>    

            		<div class="form-group">
            			<input type="submit" value="Register" class="btn btn-sm btn-primary" />
            		</div>
            	</form>
            </div>
    	</div>          
    </div> 
</div> 
<?php $__env->stopSection(); ?>   
    
    

<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\p400\resources\views/admin/pages/create.blade.php ENDPATH**/ ?>