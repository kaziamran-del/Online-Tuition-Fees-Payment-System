

<?php $__env->startSection('student'); ?>
    active
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_title'); ?>
	Admin Panel | Search Data
<?php $__env->stopSection(); ?>

<?php $__env->startSection('admin_content'); ?>
    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>
    <div class="data_table1">
    	<div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h4 align="left" class="head">Search Data</h4>
                </div> 
            </div>

                <div class="row">
                    <div class="col-md-12"> 
                        <br/>
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Student Id</th>                                                 
                                <th>Student Name</th>
                                <th>Program & Batch</th>                  
                                <th>Term Fee</th>   
                                <th>Month Fee</th>
                                <th>Readmit Fee</th> 
                                <th>Retake Fee</th>
                                <th>Supply Fee</th>
                                <th>Others Fee</th>
                                <th>Hostel Rent</th>  
                                <th>Misce. Fee</th>
                                <th>Mobile</th>         
                                <th>Edit</th>
                            </tr>
                            <?php $__currentLoopData = $adds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $add): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($add->student_id); ?></td>
                                <td><?php echo e($add->student_name); ?></td>
                                <td><?php echo e($add->program_batch); ?></td>                
                                <td><?php echo e($add->term_fee); ?></td>   
                                <td><?php echo e($add->month_fee); ?></td> 
                                <td><?php echo e($add->re_ad_fee); ?></td> 
                                <td><?php echo e($add->retake_fee); ?></td> 
                                <td><?php echo e($add->supply_fee); ?></td> 
                                <td><?php echo e($add->others_fee); ?></td> 
                                <td><?php echo e($add->hostel_rent); ?></td>     
                                <td><?php echo e($add->miscellaneous_fee); ?></td>      
                                <td><?php echo e($add->mobile_no); ?></td>                 
                                <td><a href="<?php echo e(url('admin/pages/edit/'.$add->id)); ?>" class="btn btn-sm btn-warning" title="Edit">Edit</a></td> 
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>

                    </div>            
                </div>

            </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\p400\resources\views/admin/pages/search.blade.php ENDPATH**/ ?>