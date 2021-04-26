

<?php $__env->startSection('record'); ?>
    active
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_title'); ?>
    Payment Record
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
                <div class="col-md-12 col-sm-12">
                    <div class="table-responsive">
                        <form method="post" id="dynamic_form">
                            <span id="result"></span>
                            <table class="table table-bordered table-striped" id="user_table">
                                <thead>
                                <tr>                                                      
                                    <th>Student Name</th>
                                    <th>Fee name</th>
                                    <th>Fee value</th>   
                                    <th>amount</th>  
                                    <th>action</th>                                            
                                </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="4" align="right">&nbsp;</td>
                                        <td>
                                            <?php echo csrf_field(); ?>
                                            <input type="submit" name="save" id="save" class="btn btn-primary" value="Save" />
                                        </td>
                                    </tr>
                                </tfoot>
                        </form>
                    </div>
                </div>
            </div>    
        </div>
    </div>





<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\p400\resources\views/admin/paymentRecord/index.blade.php ENDPATH**/ ?>