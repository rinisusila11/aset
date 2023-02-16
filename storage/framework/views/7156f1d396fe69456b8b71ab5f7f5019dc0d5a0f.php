<?php $__env->startSection('title'); ?>
Edit Profile (<?php echo e($user->name); ?>)
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="section">
<div class="section-header">
    <h1>Profile</h1> 
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="dashboard">Dashboard</a></div>
        <div class="breadcrumb-item active"><a href="dashboard">Profil</a></div>
        <div class="breadcrumb-item ">Update profil</div>
      </div>    
  </div>  
  <div class="section-body">
      <profile-component user='<?php echo $user->toJson(); ?>'></profile-component>
  </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\pkl\master\resources\views/admin/users/edit.blade.php ENDPATH**/ ?>