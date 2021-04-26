

<?php $__env->startSection('shortCourse'); ?>
    active
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_title'); ?>
    Admin Panel | ShortCourse Fee Table
<?php $__env->stopSection(); ?>

<?php $__env->startSection('admin_content'); ?>
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

    <div class="data_table1">
        <div class="container">
            <div class="row">

                <br/>
                <div class="col-md-4" align="left" style="margin-top: 10px;">                       
                     <a href="<?php echo e(route('admin.shortCourse.create')); ?>" class="btn btn-primary">Insert Short Course Fee</a>
                </div>
                <div class="col-md-8"></div>               
            </div>

                <div class="row">
                    <div class="col-md-12"> 
                        <br/>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Android Application Development</th>                           
                                    <th>Microcontroller Programming And Robotics</th>
                                    <th>Journalism and Media Studies</th>   
                                    <th>Action</th>               
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $shortCourses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shortCourse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>                                    
                                        <td><?php echo e($shortCourse->android_dep); ?> Taka</td>
                                        <td><?php echo e($shortCourse->microcontroller_robotics); ?> Taka</td>
                                        <td><?php echo e($shortCourse->journalism); ?> Taka</td>
                                                                                 
                                        <td><a href="<?php echo e(url('admin/shortCourse/edit/' .$shortCourse->id)); ?>" class="btn btn-sm btn-warning" title="Edit">Edit</a></td>                 
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>            
                </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\p400\resources\views/admin/shortCourse/index.blade.php ENDPATH**/ ?>