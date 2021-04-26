
<?php $__env->startSection('regfee'); ?>
    active
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_title'); ?>
    Admin Panel | Registration Fee Table
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
                <div class="col-md-9" align="left" style="margin-top: 10px;">                       
                     <a href="<?php echo e(route('admin.pages.create')); ?>" class="btn btn-primary">Insert Fee</a>
                </div>               
            </div>

                <div class="row">
                    <div class="col-md-12"> 
                        <br/>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Field Name</th>                                            
                                    <th>English</th>
                                    <th>CSE</th>  
                                    <th>EEE</th>   
                                    <th>BBA</th>
                                    <th>Law & Justice</th> 
                                    <th>Economics</th>                       
                                    <th>Edit</th>                  
                                </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $regFees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $regFee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                  
                                <td><?php echo e($regFee->field_name); ?></td>
                                <td><?php echo e($regFee->english); ?></td>
                                <td><?php echo e($regFee->cse); ?></td>
                                <td><?php echo e($regFee->eee); ?></td>   
                                <td><?php echo e($regFee->bba); ?></td> 
                                <td><?php echo e($regFee->law_justice); ?></td> 
                                <td><?php echo e($regFee->economics); ?></td>                                                             
                                <td><a href="" class="btn btn-sm btn-warning" title="Edit">Edit</a></td>                 
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>            
                </div>

            </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\p400\resources\views/admin/pages/registrationfee.blade.php ENDPATH**/ ?>