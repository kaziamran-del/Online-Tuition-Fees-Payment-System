

<?php $__env->startSection('lateFine'); ?>
    active
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_title'); ?>
    Admin Panel | Update Late Fine
<?php $__env->stopSection(); ?>

<?php $__env->startSection('admin_content'); ?>
<div class="data_table">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h4 align="left" class="head">Update  Late Fine</h4>
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
            	
            	<form method="post" action="<?php echo e(route('update.lateFine.data')); ?>">
            		<?php echo e(csrf_field()); ?>


                    <input type="hidden" value="<?php echo e($lateFines->id); ?>" name="id" />

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group">
                                January <input type="text" name="jan" class="from-control extra"  value="<?php echo e($lateFines->jan); ?>" style="margin-left: 29px;"/>
                            </div>

                            <div class="form-group">
                                February <input type="text" name="feb" class="from-control extra"  value="<?php echo e($lateFines->feb); ?>" style="margin-left: 20px;"/>
                            </div>

                            <div class="form-group">
                                March <input type="text" name="mar" class="from-control extra"  value="<?php echo e($lateFines->mar); ?>" style="margin-left: 40px;"/>
                            </div>

                            <div class="form-group">
                                April <input type="text" name="apr" class="from-control extra"  value="<?php echo e($lateFines->apr); ?>" style="margin-left: 50px;"/>
                            </div>

                            <div class="form-group">
                                May <input type="text" name="may" class="from-control extra"  value="<?php echo e($lateFines->may); ?>" style="margin-left: 53px;"/>
                            </div>

                            <div class="form-group">
                                June <input type="text" name="jun" class="from-control extra"  value="<?php echo e($lateFines->jun); ?>" style="margin-left: 49px;"/>
                            </div>
                        </div>    

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group">
                                July <input type="text" name="jul" class="from-control extra"  value="<?php echo e($lateFines->jul); ?>" style="margin-left: 60px;"/>
                            </div>

                            <div class="form-group">
                                August <input type="text" name="aug" class="from-control extra"  value="<?php echo e($lateFines->aug); ?>" style="margin-left: 40px;"/>
                            </div>

                            <div class="form-group">
                                September <input type="text" name="sep" class="from-control extra"  value="<?php echo e($lateFines->sep); ?>" style="margin-left: 16px;"/>
                            </div>

                            <div class="form-group">
                                October <input type="text" name="oct" class="from-control extra"  value="<?php echo e($lateFines->oct); ?>" style="margin-left: 34px;"/>
                            </div>

                            <div class="form-group">
                                November <input type="text" name="nov" class="from-control extra"  value="<?php echo e($lateFines->nov); ?>" style="margin-left: 21px;"/>
                            </div>

                            <div class="form-group">
                                December <input type="text" name="dec" class="from-control extra"  value="<?php echo e($lateFines->dec); ?>" style="margin-left: 21px;"/>
                            </div>
                        </div> 
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
    
    

<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\p400\resources\views/admin/lateFine/edit.blade.php ENDPATH**/ ?>