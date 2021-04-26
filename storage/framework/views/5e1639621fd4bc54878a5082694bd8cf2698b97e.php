<?php $__env->startSection('page_title'); ?>
    Reset Password | login
<?php $__env->stopSection(); ?>

<?php $__env->startSection('admin_content'); ?>
    <div id="login">
        <h3 class="text-center text-white pt-5">Reset Password</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">

                        <?php if(session('status')): ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo e(session('status')); ?>

                            </div>
                        <?php endif; ?>

                        <form id="login-form" class="form" action="<?php echo e(route('password.email')); ?>" method="POST">
                            <?php echo e(csrf_field()); ?>


                            <?php if(session('error')): ?>
                                <div> <?php echo e(session('error')); ?></div>                
                            <?php endif; ?>

                            <?php if(session('success')): ?>
                                <div> <?php echo e(session('success')); ?></div>    
                            <?php endif; ?>

                            <div class="form-group">
                                <label for="email" class="text-info"><?php echo e(__('E-Mail Address:')); ?></label><br>

                                <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus />

                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                           
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                     <?php echo e(__('Send Password Reset Link')); ?>

                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\p400\resources\views/auth/passwords/email.blade.php ENDPATH**/ ?>