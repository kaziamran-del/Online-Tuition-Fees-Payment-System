

<?php $__env->startSection('department'); ?>
    active
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_title'); ?>
    Admin Panel | CSE Department
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
                    <h4 align="left" class="head">CSE Department</h4>
                </div>

                <div class="col-md-3" align="right" style="margin-top: 10px;">             
                    <form action="<?php echo e(route('admin.pages.search')); ?>" method="get">   
                        <?php echo e(csrf_field()); ?>

                        <div class="input-group">
                            <input type="search" name="search" placeholder="search here.." class="form-control" required />
                            <span class="input-group-prepend">
                                <button type="submit" class="btn btn-primary">search</button>
                            </span>
                        </div>
                    </form>  
                </div>               
            </div>

                <div class="row">
                    <div class="col-md-12"> 
                        <br/>
                        <table class="table table-bordered table-striped">
                            <thead>
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
                                    <th>Action</th>                  
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                      
                                    <td><?php echo e($row->student_id); ?></td>
                                    <td><?php echo e($row->student_name); ?></td>
                                    <td><?php echo e($row->program_batch); ?></td>
                                    <td><?php echo e($row->term_fee); ?> Taka</td>   
                                    <td><?php echo e($row->month_fee); ?> Taka</td> 
                                    <td><?php echo e($row->re_ad_fee); ?> Taka</td> 
                                    <td><?php echo e($row->retake_fee); ?> Taka</td> 
                                    <td><?php echo e($row->supply_fee); ?> Taka</td> 
                                    <td><?php echo e($row->others_fee); ?> Taka</td> 
                                    <td><?php echo e($row->hostel_rent); ?> Taka</td>     
                                    <td><?php echo e($row->miscellaneous_fee); ?> Taka</td>      
                                    <td><?php echo e($row->mobile_no); ?></td>                 
                                    <td><a href="<?php echo e(url('admin/pages/edit/'.$row->id)); ?>" class="btn btn-sm btn-warning" title="Edit">Edit</a></td>                 
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        <?php echo e($data->links()); ?>

                    </div>            
                </div>

            </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\p400\resources\views/admin/department/cse.blade.php ENDPATH**/ ?>