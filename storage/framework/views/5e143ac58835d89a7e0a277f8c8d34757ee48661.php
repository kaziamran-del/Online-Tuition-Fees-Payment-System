

<?php $__env->startSection('lateFine'); ?>
    active
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_title'); ?>
    Admin Panel | Late Fine 
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
                    <h4 align="left" class="head">Input Late Fine </h4>
                </div> 
            </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12"> 
                        
                        <form method="post" action="<?php echo e(route('lateFine.store.data')); ?>">
                            <?php echo e(csrf_field()); ?>


                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        January <input type="text" name="jan" class="from-control extra" placeholder="Enter Late Fine" style="margin-left: 29px;" />
                                    </div>

                                    <div class="form-group">
                                        February <input type="text" name="feb" class="from-control extra" placeholder="Enter Late Fine" style="margin-left: 20px;" />
                                    </div>

                                    <div class="form-group">
                                        March <input type="text" name="mar" class="from-control extra" placeholder="Enter Late Fine" style="margin-left: 40px;" />
                                    </div>

                                    <div class="form-group">
                                        April <input type="text" name="apr" class="from-control extra" placeholder="Enter Late Fine" style="margin-left: 50px;" />
                                    </div>

                                    <div class="form-group">
                                        May <input type="text" name="may" class="from-control extra" placeholder="Enter Late Fine" style="margin-left: 53px;" />
                                    </div>

                                    <div class="form-group">
                                        June <input type="text" name="jun" class="from-control extra" placeholder="Enter Late Fine" style="margin-left: 49px;" />
                                    </div>
                                </div>    

                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        July <input type="text" name="jul" class="from-control extra" placeholder="Enter Late Fine" style="margin-left: 60px;" />
                                    </div>

                                    <div class="form-group">
                                        August <input type="text" name="aug" class="from-control extra" placeholder="Enter Late Fine" style="margin-left: 40px;" />
                                    </div>

                                    <div class="form-group">
                                        September <input type="text" name="sep" class="from-control extra" placeholder="Enter Late Fine" style="margin-left: 16px;" />
                                    </div>

                                    <div class="form-group">
                                        October <input type="text" name="oct" class="from-control extra" placeholder="Enter Late Fine" style="margin-left: 34px;" />
                                    </div>

                                    <div class="form-group">
                                        November <input type="text" name="nov" class="from-control extra" placeholder="Enter Late Fine" style="margin-left: 21px;" />
                                    </div>

                                    <div class="form-group">
                                        December <input type="text" name="dec" class="from-control extra" placeholder="Enter Late Fine" style="margin-left: 21px;" />
                                    </div>
                                </div> 
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
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\p400\resources\views/admin/lateFine/create.blade.php ENDPATH**/ ?>