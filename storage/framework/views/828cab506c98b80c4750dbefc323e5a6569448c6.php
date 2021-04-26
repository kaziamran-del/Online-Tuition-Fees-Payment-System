

<?php $__env->startSection('page_title'); ?>
	Admin panel 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('admin_content'); ?>
	<div class="header_top">
			<div class="container-fluid no_padding">
				<div class="header_left">
					<p>Admin panel</p>
				</div>
				<div class="admin_sidebar_menu">
					<div class="menu text-left">
						<ul>
							<li><a href="admin.html"><i class="fas fa-columns"></i>deshboard</a></li>
							<li><a href="faculty.html"><i class="far fa-user"></i>faculty</a></li>
							<li><a href="department.html"><i class="fab fa-accusoft"></i>departments</a></li>
							<li><a href="semester.html"><i class="far fa-bookmark"></i>semester</a></li>
							<li><a href=""><i class="fas fa-book-open"></i>course details</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		
		<div class="admin_area">
			<div class="container-fluid no_padding">
				<div class="header_right">
						
						<li><a href="#"><i class="fas fa-arrow-down"></i></a>
						<li>
							<ul>
								<li><a href="<?php echo e(route('logout')); ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                                                                                     
                       			</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\p400\resources\views/admin/home/adminContent.blade.php ENDPATH**/ ?>