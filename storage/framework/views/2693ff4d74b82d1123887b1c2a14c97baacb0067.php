

<?php $__env->startSection('regfee'); ?>
    active
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_title'); ?>
    Admin Panel | Short Course Fee Create
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
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h4 align="left" class="head">Insert Short Course Fee</h4>
                </div> 
            </div>

                <div class="row">
                    <div class="col-md-12 col-sm-12"> 
                        
                        <form method="post" action="<?php echo e(route('shortCourse.store.data')); ?>">
                            <?php echo e(csrf_field()); ?>


                            <div class="form-group">
                                Android Application Development <input type="text" name="android_dep" class="from-control extra" placeholder="Enter Short Course Fee" style="margin-left: 70px;" />
                            </div>

                            <div class="form-group">
                                Microcontroller Programming And Robotics <input type="text" name="microcontroller_robotics" class="from-control extra" placeholder="Enter Short Course Fee" style="margin-left: 10px;" />
                            </div>

                            <div class="form-group">
                                Journalism and Media Studies <input type="text" name="journalism" class="from-control extra" placeholder="Enter Short Course Fee" style="margin-left: 90px;" />
                            </div>

                            <div class="form-group">
                                <input type="submit" value="Insert" class="btn btn-sm btn-primary" />
                            </div>
                        </form>
                    </div>            
                </div>

        </div>
    </div>    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\p400\resources\views/admin/shortCourse/create.blade.php ENDPATH**/ ?>