<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $__env->yieldContent('title'); ?></title>
  <link href="<?php echo e(asset('assets/css/output.css')); ?>" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <!-- FAVICON -->
  <link rel="icon" type="image/png" href="<?php echo e(asset('assets/img/favicon.ico')); ?>">
  <!-- REMIX ICON -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.css" rel="stylesheet">
</head>

<body>
  <div class="w-full">
    <?php echo $__env->make('includes.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->make('includes.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
  </div>

  <!-- JS -->
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const menuToggle = document.getElementById("menu-toggle");
      const dropdownMenu = document.getElementById("dropdown-menu");

      // Event untuk toggle dropdown menu (buka/close)
      menuToggle.addEventListener("click", () => {
        dropdownMenu.classList.toggle("hidden");
      });
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="<?php echo e(asset('assets/js/swiper.js')); ?>"></script>

</body>

</html><?php /**PATH C:\xampp\htdocs\blog-masterprima\resources\views/layouts/app.blade.php ENDPATH**/ ?>