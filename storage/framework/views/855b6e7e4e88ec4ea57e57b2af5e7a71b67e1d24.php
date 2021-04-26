<div class="nav-side-menu">
    <div class="brand" style="font-size: 20px;">Admin Panel</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  
        <div class="menu-list">
  
            <ul id="menu-content" class="menu-content collapse out">
                <li>
                  <a href="<?php echo e(url('home')); ?>" class=" <?php echo $__env->yieldContent('dashboard'); ?>">
                    <i class="fas fa-chart-line"></i> Dashboard
                  </a>
                </li>

                <li  data-toggle="collapse" data-target="#products" class=" <?php echo $__env->yieldContent('department'); ?>">
                  <a href="#"><i class="fa fa-gift fa-lg"></i> Department</a>
                </li>
                <ul class="sub-menu collapse" id="products">
                    <li><a href="<?php echo e(route('admin.department.cse')); ?>" class=" <?php echo $__env->yieldContent('department'); ?>">CSE</a></li>
                    <li><a href="#">BBA</a></li>
                    <li><a href="#">EEE</a></li>
                    <li><a href="#">English</a></li>
                </ul> 

                <li>
                  <a href="<?php echo e(url('/')); ?>" target="_blank">
                  <i class="fas fa-eye"></i> Visit Site
                  </a>
                </li>


                <li>
                  <a href="<?php echo e(route('admin.pages.index')); ?>" class=" <?php echo $__env->yieldContent('student'); ?>">
                  <i class="fa fa-user fa-lg"></i> Student Data Table
                  </a>
                </li>

                <li>
                  <a href="<?php echo e(route('admin.payment.index')); ?>" class=" <?php echo $__env->yieldContent('payment'); ?>">
                    <i class="fa fa-users fa-lg"></i> Payment
                  </a>
                </li>

                <li>
                  <a href="<?php echo e(route('admin.paymentRecord.index')); ?>" class=" <?php echo $__env->yieldContent('record'); ?>">
                   <i class="fas fa-shopping-bag"></i> Payment Record
                  </a>
                </li>

                <li>
                  <a href="<?php echo e(route('admin.registration.index')); ?>" class=" <?php echo $__env->yieldContent('regfee'); ?>">
                  <i class="fab fa-discourse"></i> Registration Fee
                  </a>
                </li>

                <li>
                  <a href="<?php echo e(route('admin.shortCourse.index')); ?>" class=" <?php echo $__env->yieldContent('shortCourse'); ?>">
                  <i class="fas fa-random"></i></i> Short Course Info
                  </a>
                </li>

                <li>
                  <a href="<?php echo e(route('admin.lateFine.index')); ?>" class=" <?php echo $__env->yieldContent('lateFine'); ?>">
                  <i class="far fa-clock"></i> Late Fine
                  </a>
                </li>
            </ul>
     </div>
</div>  

<?php /**PATH E:\laragon\www\p400\resources\views/admin/include/sidebar.blade.php ENDPATH**/ ?>