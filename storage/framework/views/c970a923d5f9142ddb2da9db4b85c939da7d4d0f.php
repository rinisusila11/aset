<?php $__env->startSection('title'); ?>
Manage Users
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="section">
  <div class="section-header">
    <h1>Opd</h1>
  </div>
  <div class="section-body">
      <users-component></users-component>
  </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\pkl\master\resources\views/admin/users/index.blade.php ENDPATH**/ ?>