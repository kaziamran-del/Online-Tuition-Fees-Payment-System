<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	 <!-- Title -->
	<title><?php echo $__env->yieldContent('page_title'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php echo $__env->make('front_end.partial.link', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<?php echo $__env->yieldContent('extra-css'); ?>
</head>	
<body>
	<?php echo $__env->yieldContent('content'); ?>
	<?php echo $__env->make('front_end.partial.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html><?php /**PATH E:\laragon\www\p400\resources\views/front_end/frontend_master.blade.php ENDPATH**/ ?>