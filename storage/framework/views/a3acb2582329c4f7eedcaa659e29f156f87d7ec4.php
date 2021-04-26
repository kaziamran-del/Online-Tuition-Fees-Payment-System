

<?php $__env->startSection('page_title'); ?>
    Student Record Info
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="payment_area">
        <div class="container">
            <div class="reciept area">

                <!-- header_area start -->
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="title">                         
                            <img src="<?php echo e(asset('front_end')); ?>/assets/img/logo.jpg" alt="" />
                            <p>Student Tuition Fee Apps</p>
                        </div>  
                    </div>
                </div>           
                <!-- header_area end -->

                <!-- student_area end -->
                 <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <h6 style="margin-bottom: 30px;">Student Information</h6>

                        <div class="form-group row">
                            <label class="col-md-2 col-sm-2 control text-left" for="">Name of the  Student </label>
                           
                            <div class="col-md-10 col-sm-10">
                                <input style="text-transform: capitalize;" name="student_name" type="text" value="<?php echo e($std->student_name); ?>" class="form-control text-money field_width" readonly="readonly"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-sm-2 control text-left" for="">ID Number(9 digits) </label>
                           
                            <div class="col-md-10 col-sm-10">
                                <input name="student_id" type="text" value="<?php echo e($std->student_id); ?>" class="form-control text-money field_width" readonly="readonly"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-sm-2 control text-left" for="">Program & Batch </label>
                           
                            <div class="col-md-10 col-sm-10">
                                <input style="text-transform: capitalize;" name="program_batch" type="text" value="<?php echo e($std->program_batch); ?>" class="form-control text-money field_width" readonly="readonly"/>
                            </div>
                        </div>
                    </div> 
                </div>     

                <div class="row">
                    <div class="col-md-12 col-sm-12"> 
                        <h6 style="margin-bottom: 30px;">Payment Information</h6>
                        <br/>

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr> 
                                    <th>S/N</th>                                                
                                    <th>Payment Type</th>
                                    <th>Selected Option</th>
                                    <th>Total</th>   
                                    <th>Is paid</th>
                                    <th>Date</th>          
                                </tr>
                            </thead>

                            <tbody>
                                <?php $__currentLoopData = $records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($loop->index); ?></td>
                                    <td><?php echo e($row->payment_type); ?></td>
                                    <td><?php echo e($row->payment_val); ?></td>
                                    <td><?php echo e($row->amount); ?></td>
                                    <td>
                                        <?php if($row->payment_status == 1): ?>
                                            <span class="btn btn-sm btn-success">Paid</span>
                                        <?php else: ?>
                                            <span class="btn btn-sm btn-danger">Not Paid</span>
                                        <?php endif; ?>
                                    </td> 
                                    <td><?php echo e($row->created_at); ?>          
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>

                    </div>            
                </div>
                
            </div>
        </div>    
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front_end.frontend_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\p400\resources\views/front_end/pages/record.blade.php ENDPATH**/ ?>