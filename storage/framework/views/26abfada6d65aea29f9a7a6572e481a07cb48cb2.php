<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	 <!-- Title -->
	<title><?php echo $__env->yieldContent('page_title'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php echo $__env->make('admin.include.link', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>	
<body>
	
	<div class="admin">
        <div class="row">
    		<div class="col-lg-12">
    			<?php if(auth()->guard()->guest()): ?>
				<?php else: ?>
					<?php echo $__env->make('admin.include.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make('admin.include.header_nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				<?php endif; ?>
            	<?php echo $__env->yieldContent('admin_content'); ?>           
            </div>
            <!-- /.col-lg-12 -->
        </div> 
        <!-- /.row -->    
    </div>
    <!-- /#page-wrapper -->
	
	<?php echo $__env->make('admin.include.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>	
</html><?php /**PATH E:\xampp\htdocs\p400\resources\views/admin/admin_master.blade.php ENDPATH**/ ?>