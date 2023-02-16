<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title><?php echo $__env->yieldContent('title', 'Data Aset Diskominfo Malang'); ?> &mdash; <?php echo e(env('APP_NAME')); ?></title>
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('assets/css/components.css')); ?>">
  <link rel="shortcut icon" href="logo2.png">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <?php echo $__env->make('admin.partials.topnav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </nav>
      <div class="main-sidebar">
        <?php echo $__env->make('admin.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <?php echo $__env->yieldContent('content'); ?>
      </div>
      <footer class="main-footer">
        <?php echo $__env->make('admin.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </footer>
    </div>
  </div>

  <script src="<?php echo e(route('js.dynamic')); ?>"></script>
  <script src="<?php echo e(asset('js/app.js')); ?>?<?php echo e(uniqid()); ?>"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="<?php echo e(asset('assets/js/stisla.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/scripts.js')); ?>"></script>
  <?php echo $__env->yieldContent('scripts'); ?>
</body>
</html>
<?php /**PATH E:\pkl\master\resources\views/layouts/admin-master.blade.php ENDPATH**/ ?>