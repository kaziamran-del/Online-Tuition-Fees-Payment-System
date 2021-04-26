

<?php $__env->startSection('regfee'); ?>
    active
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_title'); ?>
    Admin Panel | Update Registration Fee
<?php $__env->stopSection(); ?>

<?php $__env->startSection('admin_content'); ?>
<div class="data_table">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h4 align="left" class="head">Update Registration Fee</h4>
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
            	
            	<form method="post" action="<?php echo e(route('update.registration.data')); ?>">
            		<?php echo e(csrf_field()); ?>


                    <input type="hidden" value="<?php echo e($regFees->id); ?>" name="id" />

                        <div class="form-group">
                            English <input type="text" name="english" class="from-control extra"  value="<?php echo e($regFees->english); ?>" style="margin-left: 64px;"/>
                        </div> 

                        <div class="form-group">
                            CSE <input type="text" name="cse" class="from-control extra"  value="<?php echo e($regFees->cse); ?>" style="margin-left: 82px;"/>
                        </div>

                        <div class="form-group">
                            EEE <input type="text" name="eee" class="from-control extra"  value="<?php echo e($regFees->eee); ?>" style="margin-left: 82px;"/>
                        </div>

                        <div class="form-group">
                            BBA <input type="text" name="bba" class="from-control extra"  value="<?php echo e($regFees->bba); ?>" style="margin-left: 82px;"/>
                        </div>

                        <div class="form-group">
                            Law & justice <input type="text" name="law_justice" class="from-control extra"  value="<?php echo e($regFees->law_justice); ?>" style="margin-left: 27px;"/>
                        </div>

                        <div class="form-group">
                            Economics <input type="text" name="economics" class="from-control extra"  value="<?php echo e($regFees->economics); ?>" style="margin-left: 42px;"/>
                        </div>

                		<div class="form-group">
                			<input type="submit" value="Update" class="btn btn-sm btn-primary" />
                		</div>
            	</form>
            </div>
    	</div>          
    </div> 
</div> 
<?php $__env->stopSection(); ?>   
    
    

<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\p400\resources\views/admin/registration/edit.blade.php ENDPATH**/ ?>