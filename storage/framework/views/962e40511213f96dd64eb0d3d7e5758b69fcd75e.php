

<?php $__env->startSection('student'); ?>
    active
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_title'); ?>
    Admin Panel | Update Data
<?php $__env->stopSection(); ?>

<?php $__env->startSection('admin_content'); ?>
<div class="data_table">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h4 align="left" class="head">Update Data</h4>
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
            	
            	<form method="post" action="<?php echo e(route('update.data')); ?>">
            		<?php echo e(csrf_field()); ?>


                    <input type="hidden" value="<?php echo e($data->id); ?>" name="id">

                    <div class="form-group">
                        Student Id <input id="coupon" type="text" maxlength="11" name="student_id" class="from-control extra" style="margin-left: 43px;" value="<?php echo e($data->student_id); ?>" required/> 
                    </div>

                    <div class="form-group">
                         Student Name <input type="text" name="student_name" class="from-control extra" style="margin-left: 18px;" value="<?php echo e($data->student_name); ?>" />
                    </div>
            		
            		<div class="form-group">
            			Program & Batch <input type="text" name="program_batch" class="from-control extra" value="<?php echo e($data->program_batch); ?>" />
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
                                Term Fee <input type="text" name="term_fee" class="from-control extra"  value="<?php echo e($data->term_fee); ?> Taka" style="margin-left: 52px;"/>
                            </div>

                            <div class="form-group">
                                 Month Fee <input type="text" name="month_fee" class="from-control extra"  value="<?php echo e($data->month_fee); ?> Taka" style="margin-left: 43px;"/>
                            </div>

                            <div class="form-group">
                                Readmit Fee <input type="text" name="re_ad_fee" class="from-control extra"  value="<?php echo e($data->re_ad_fee); ?> Taka" style="margin-left: 30px;"/>
                            </div>

                            <div class="form-group">
                                 Retake Fee <input type="text" name="retake_fee" class="from-control extra"  value="<?php echo e($data->retake_fee); ?> Taka" style="margin-left: 40px;"/>
                            </div>

                            <div class="form-group">
                                Supple Fee <input type="text" name="supply_fee" class="from-control extra" style="margin-left: 39px;" value="<?php echo e($data->supply_fee); ?> Taka" />
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6">

                            <div class="form-group">
                                Others Fee <input type="text" name="others_fee" class="from-control extra" style="margin-left: 10px;"value="<?php echo e($data->others_fee); ?> Taka" />
                            </div>

                    		<div class="form-group">
                    			Hostel Rent <input type="text" name="hostel_rent" class="from-control extra" style="margin-left: 4px;"value="<?php echo e($data->hostel_rent); ?> Taka" />
                    		</div>

                             <div class="form-group">
                                Misce. Fee <input type="text" name="miscellaneous_fee" class="from-control extra" value="<?php echo e($data->miscellaneous_fee); ?> Taka" style="margin-left: 13px;"/>
                            </div>
                    
                            <div class="form-group">
                                 Mobile <input type="text" name="mobile_no" class="from-control extra" value="<?php echo e($data->mobile_no); ?>" style="margin-left: 38px;"/>
                            </div>
                         </div>
                    </div>     

            		<div class="form-group">
            			<input type="submit" value="Update" class="btn btn-primary" />
            		</div>
            	</form>
            </div>
    	</div>          
    </div> 
</div> 
<?php $__env->stopSection(); ?>   
    
    

<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\p400\resources\views/admin/pages/edit.blade.php ENDPATH**/ ?>