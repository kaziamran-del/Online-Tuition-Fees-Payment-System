

<?php $__env->startSection('dashboard'); ?>
    active
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_title'); ?>
	Admin Panel 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('admin_content'); ?>
    <div class="data_table">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading"><?php echo e(Auth::user()->name); ?> 
                            <span class="badge badge-success">Active Now</span>

                            <b style="float: right;">Total Users <span class="badge badge-danger"><?php echo e(count($users)); ?></span></b>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped">
                                            <thead>                              
                                                <tr>
                                                    <th>SI No</th>
                                                    <th>User Id</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Created At</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($loop->index); ?></td>
                                                    <td>#000<?php echo e($user->id); ?></td>
                                                    <td><?php echo e($user->name); ?></td>
                                                    <td><?php echo e($user->email); ?></td>
                                                    <td><?php echo e($user->created_at); ?></td>
                                                </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                        
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.col-lg-4 (nested) -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>              
                    <!-- /.panel -->
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\p400\resources\views/admin/home/homeContent.blade.php ENDPATH**/ ?>