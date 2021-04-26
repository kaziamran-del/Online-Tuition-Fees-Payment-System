

<?php $__env->startSection('record'); ?>
    active
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_title'); ?>
    Admin Panel | Payment Record
<?php $__env->stopSection(); ?>

<?php $__env->startSection('admin_content'); ?>
    <div class="data_table1">
        <div class="container">

            <div class="row">
                <div class="col-md-9"></div>
                <div class="col-md-3">
                    <?php if($message = Session::get('paid')): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <p><?php echo e($message); ?></p>
                            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="row">
                <div class="col-md-9"></div>
                <div class="col-md-3">
                    <?php if($message = Session::get('unpaid')): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <p><?php echo e($message); ?></p>
                            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8"></div>
                <div class="col-md-4">
                    <?php if($message = Session::get('unpaid')): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <p><?php echo e($message); ?></p>
                            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="row">

                <br/>
                <div class="col-md-9" align="left" style="margin-top: 10px;">                     
                     <h5 align="left" style="font-size: 18px;
                      border: 1px solid #333;
                      display: inline-block;
                      padding: 5px;
                      margin-bottom: 20px;">Payment Record</h5>
                </div>

                <div class="col-md-3" align="right" style="margin-top: 10px;">             
                    <form action="<?php echo e(route('admin.paymentRecord.search')); ?>" method="get">   
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
                                <th>S/N</th>
                                <th>Student Id</th> 
                                <th>Student Name</th>                                             
                                <th>Payment Method</th>
                                <th>Payment Name</th>
                                <th>Select Option</th>
                                <th>Total</th>   
                                <th>Payment Status</th> 
                                <th>Date</th>         
                            </tr>
                        </thead>   

                        <tbody>
                            <?php $__currentLoopData = $payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>#00<?php echo e($payment->id); ?></td>
                                    <td><?php echo e($payment->student_id); ?></td>
                                    <td style="text-transform: capitalize;"><?php echo e($payment->student_name); ?></td>
                                    <td><?php echo e($payment->payment_method); ?></td> 
                                    <td><?php echo e($payment->payment_type); ?></td> 
                                    <td><?php echo e($payment->payment_val); ?></td>                
                                    <td><?php echo e($payment->amount); ?></td>
                                    <td>
                                        <?php if($payment->payment_status == 1): ?>
                                            <span class="btn btn-sm btn-success">Paid</span>
                                        <?php else: ?>
                                            <span class="btn btn-sm btn-danger">Not Paid</span>
                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo e($payment->created_at); ?></td>
                                    
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>          
                        
                    </table>
                  <?php echo e($payments->links()); ?>

                </div>            
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\p400\resources\views/admin/paymentRecord/index.blade.php ENDPATH**/ ?>