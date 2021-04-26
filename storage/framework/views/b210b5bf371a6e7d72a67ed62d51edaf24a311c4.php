
<?php $__env->startSection('payment'); ?>
    active
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_title'); ?>
    Admin Panel | Student Data
<?php $__env->stopSection(); ?>

<?php $__env->startSection('admin_content'); ?>
 <?php if($message = Session::get('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert" style="width: 50%;float: right;">
        <p><?php echo e($message); ?></p>
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>  

<?php if(session()->has('jsAlert')): ?>
    <script>
        alert("<?php echo e(session()->get('jsAlert')); ?>");
    </script>
<?php endif; ?> 
    <div class="data_table1">
        <div class="container">
                <div class="row">
                    <div class="col-md-12"> 
                        <br/>
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Student Id</th>                                                 
                                <th>Payment Tupe</th>
                                <th>Option Value</th>
                                <th>Total</th>   
                                <th>Is paid</th>          
                            </tr>
                                          
                            
                        </table>
                      
                    </div>            
                </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\p400\resources\views/admin/payment/index.blade.php ENDPATH**/ ?>