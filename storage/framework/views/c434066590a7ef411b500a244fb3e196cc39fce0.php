

<?php $__env->startSection('shortCourse'); ?>
    active
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_title'); ?>
    Admin Panel | Update Short Course Fee
<?php $__env->stopSection(); ?>

<?php $__env->startSection('admin_content'); ?>
<div class="data_table">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h4 align="left" class="head">Update Short Course Fee</h4>
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
                
                <form method="post" action="<?php echo e(route('update.shortCourse.data')); ?>">
                    <?php echo e(csrf_field()); ?>


                    <input type="hidden" value="<?php echo e($shortCourses->id); ?>" name="id" />

                        <div class="form-group">
                            Android Application Development <input type="text" name="android_dep" class="from-control extra"  value="<?php echo e($shortCourses->android_dep); ?>" style="margin-left: 70px;"/>
                        </div>

                        <div class="form-group">
                            Microcontroller Programming And Robotics <input type="text" name="microcontroller_robotics" class="from-control extra"  value="<?php echo e($shortCourses->microcontroller_robotics); ?>" style="margin-left: 10px;"/>
                        </div>

                        <div class="form-group">
                            Journalism and Media Studies <input type="text" name="journalism" class="from-control extra"  value="<?php echo e($shortCourses->journalism); ?>" style="margin-left: 90px;"/>
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
    
    

<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\p400\resources\views/admin/shortCourse/edit.blade.php ENDPATH**/ ?>