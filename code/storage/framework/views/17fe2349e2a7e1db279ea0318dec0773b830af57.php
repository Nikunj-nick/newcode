 <header>
     <nav class="navbar navbar-expand navbar-light" style="background-color: white;">
         <div class="container-fluid">
             <a href="#" class="burger-btn d-block">
                 <i class="bi bi-justify fs-3"></i>
             </a>
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                 data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                 aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <div class="dropdown">
                     <a href="#" id="topbarUserDropdown"
                         class="user-dropdown d-flex align-items-center dropend dropdown-toggle"
                         data-bs-toggle="dropdown" aria-expanded="false">
                         <div class="avatar avatar-md2">
                             <i class="bi bi-translate"></i>
                         </div>
                         <div class="text">
                         </div>
                     </a>
                     <ul class="dropdown-menu dropdown-menu-end topbarUserDropdown"
                         aria-labelledby="topbarUserDropdown">
                         <?php $__currentLoopData = get_language(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                             <li>
                                 <a class="dropdown-item"
                                     href="<?php echo e(url('set-language') . '/' . $language->code); ?>"><?php echo e($language->name); ?></a>
                             </li>
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                         <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                             <?php echo e(csrf_field()); ?>


                         </form>
                     </ul>
                 </div>
                 &nbsp;&nbsp;
                 <div class="dropdown">
                     <a href="#" id="topbarUserDropdown"
                         class="user-dropdown d-flex align-items-center dropend dropdown-toggle"
                         data-bs-toggle="dropdown" aria-expanded="false">
                         <div class="avatar avatar-md2">
                             <img src="<?php echo e(url('assets/images/faces/2.jpg')); ?> ">
                         </div>
                         <div class="text">
                             <h6 class="user-dropdown-name"><?php echo e(Auth::user()->name); ?></h6>
                             <p class="user-dropdown-status text-sm text-muted">

                             </p>
                         </div>
                     </a>
                     <ul class="dropdown-menu dropdown-menu-end topbarUserDropdown"
                         aria-labelledby="topbarUserDropdown">
                         <li><a class="dropdown-item" href="<?php echo e(route('changepassword')); ?>"><i
                                     class="icon-mid bi bi-gear me-2"></i>Change Password</a></li>
                         <li><a class="dropdown-item" href="<?php echo e(route('changeprofile')); ?>"><i
                                     class="icon-mid bi bi-person me-2"></i>Change Profile</a></li>
                         <li><a class="dropdown-item" href="<?php echo e(route('logout')); ?> "
                                 onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"><i
                                     class="icon-mid bi bi-box-arrow-left me-2"></i> Logout</a></li>

                         <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                             <?php echo e(csrf_field()); ?>


                         </form>
                     </ul>
                 </div>
             </div>
         </div>
     </nav>
 </header>
<?php /**PATH /home/wrteam-dev/ebroker/resources/views/layouts/topbar.blade.php ENDPATH**/ ?>