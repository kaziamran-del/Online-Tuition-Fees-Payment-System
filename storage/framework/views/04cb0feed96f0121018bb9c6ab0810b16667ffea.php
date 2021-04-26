<form class="form-inline" action="<?php echo e(route('carts.store')); ?>" method="post">
	<?php echo csrf_field(); ?>

	<input type="hidden" name="term_fine" value="<?php echo e($data->term_fee); ?>" />
	<input type="hidden" name="st_id" value="<?php echo e($data->student_id); ?>" />
	<button type="submit" class="btn btn-warning"><i class="fa fa-plus"></i> get payment</button>
</form><?php /**PATH E:\xampp\htdocs\p400\resources\views/front_end/pages/card_btn.blade.php ENDPATH**/ ?>