

<?php $__env->startSection('lateFine'); ?>
    active
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_title'); ?>
    Admin Panel | Late Fine Table
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
                     <a href="<?php echo e(route('admin.lateFine.create')); ?>" class="btn btn-primary">Insert Late Fine</a>
                </div>
                <div class="col-md-8"></div>               
            </div>

                <div class="row">
                    <div class="col-md-12"> 
                        <br/>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>January</th>                                            
                                    <th>February</th>
                                    <th>March</th>  
                                    <th>April</th>   
                                    <th>May</th>
                                    <th>June</th> 
                                    <th>July</th>                       
                                    <th>August</th>  
                                    <th>September</th>  
                                    <th>October</th> 
                                    <th>November</th>
                                    <th>December</th>  
                                    <th>Action</th>          
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $lateFines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lateFine): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>                                    
                                    <td><?php echo e($lateFine->jan); ?> Taka</td>
                                    <td><?php echo e($lateFine->feb); ?> Taka</td>
                                    <td><?php echo e($lateFine->mar); ?> Taka</td>
                                    <td><?php echo e($lateFine->apr); ?> Taka</td>   
                                    <td><?php echo e($lateFine->may); ?> Taka</td> 
                                    <td><?php echo e($lateFine->jun); ?> Taka</td> 
                                    <td><?php echo e($lateFine->jul); ?> Taka</td>
                                    <td><?php echo e($lateFine->aug); ?> Taka</td>
                                    <td><?php echo e($lateFine->sep); ?> Taka</td>
                                    <td><?php echo e($lateFine->oct); ?> Taka</td>
                                    <td><?php echo e($lateFine->nov); ?> Taka</td>
                                    <td><?php echo e($lateFine->dec); ?> Taka</td>                                                             
                                    <td><a href="<?php echo e(url('admin/lateFine/edit/' .$lateFine->id)); ?>" class="btn btn-sm btn-warning" title="Edit">Edit</a></td>                 
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>            
                </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\p400\resources\views/admin/lateFine/index.blade.php ENDPATH**/ ?>