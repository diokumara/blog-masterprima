  <!-- Nav -->
  <div class="sticky top-0 z-50 flex justify-between py-5 px-4 lg:px-14 bg-white shadow-sm">
    <div class="flex gap-10 w-full">
      <!-- Logo dan Menu -->
      <div class="flex items-center justify-between w-full lg:w-auto">
        <!-- Logo -->
        <a href="<?php echo e(route('landing')); ?>">
          <div class="flex items-center gap-2">
            <img src="<?php echo e(asset('assets/img/Logo.png')); ?>" alt="Logo" style="width: 100px">
          </div>
        </a>
        <button class="lg:hidden text-primary text-2xl focus:outline-none" id="menu-toggle">
          ☰
        </button>
      </div>

      <!-- Menu Navigasi -->
      <div id="menu"
        class="hidden lg:flex flex-col lg:flex-row lg:items-center lg:gap-10 w-full lg:w-auto mt-5 lg:mt-0">
        <ul
          class="flex flex-col lg:flex-row items-start lg:items-center gap-4 font-medium text-base w-full lg:w-auto">
          <li><a href="<?php echo e(route('landing')); ?>" class="<?php echo e(request()->is('/') ? 'text-primary' : ''); ?> hover:text-primary">Beranda</a></li>
          <?php $__currentLoopData = \App\Models\NewsCategory::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li>
            <a href="<?php echo e(route('news.category', $category->slug)); ?>" class="<?php echo e(request()->is($category->slug) ? 'text-primary' : ''); ?> hover:text-primary"><?php echo e($category->title); ?>

            </a>
          </li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </div>
    </div>

    <!-- Search dan Login -->
    <div class="hidden lg:flex items-center gap-2 mt-4 lg:mt-0 w-full lg:w-auto relative">
      <div class="relative w-full lg:w-auto">
        <input type="text" placeholder="Cari Artikel..." class="border border-slate-300 rounded-full px-4 py-2 pl-8 w-full text-sm font-normal lg:w-auto focus:outline-none focus:ring-primary focus:border-primary" id="searchInput" />
        <!-- Icon Search -->
        <span class="absolute inset-y-0 left-3 flex items-center text-slate-400">
          <i class="ri-search-line"></i>
        </span>
      </div>
      <a href="<?php echo e(route('filament.admin.auth.login')); ?>"
        class="admin-button bg-primary px-8 py-2 rounded-full text-white font-semibold h-fit text-sm lg:text-base">
        Admin
      </a>
    </div>
  </div>
  <!-- Menu Dropdown untuk Mobile -->
  <div id="dropdown-menu"
    class="absolute top-0 left-0 w-full h-screen bg-white z-40 flex flex-col items-start gap-4 px-8 py-12 text-lg font-semibold shadow-md hidden">
        <a href="<?php echo e(route('landing')); ?>" class="<?php echo e(request()->is('/') ? 'text-primary' : ''); ?> hover:text-primary">Beranda
        </a>
    <?php $__currentLoopData = \App\Models\NewsCategory::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="<?php echo e(route('news.category', $category->slug)); ?>" class="<?php echo e(request()->is($category->slug) ? 'text-primary' : ''); ?> hover:text-primary"><?php echo e($category->title); ?>

        </a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div><?php /**PATH C:\xampp\htdocs\blog-masterprima\resources\views/includes/navbar.blade.php ENDPATH**/ ?>