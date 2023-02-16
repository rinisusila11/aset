<?php $__env->startSection('content'); ?>
<div class="card card-primary">
  <div class="card-header"><h4>Register</h4></div>

  <div class="card-body">
    <form method="POST" action="<?php echo e(route('register')); ?>">
        <?php echo csrf_field(); ?>
        <div class="form-group">
          <label for="id_pengguna">ID User</label>
          <input id="id_pengguna" type="text" class="form-control<?php echo e($errors->has('id_pengguna') ? ' is-invalid' : ''); ?>" name="id_pengguna" tabindex="1" placeholder="ID User" value="<?php echo e(old('id_pengguna')); ?>" autofocus>
          <div class="invalid-feedback">
            <?php echo e($errors->first('id_pengguna')); ?>

          </div>
        </div>
        <div class="form-group">
          <label for="name">ID OPD</label>
          <input id="name" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" tabindex="1" placeholder="ID OPD" value="<?php echo e(old('name')); ?>" autofocus>
          <div class="invalid-feedback">
            <?php echo e($errors->first('name')); ?>

          </div>
        </div>
        <div class="form-group">
          <label for="name">Name</label>
          <input id="name" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" tabindex="1" placeholder="Full name" value="<?php echo e(old('name')); ?>" autofocus>
          <div class="invalid-feedback">
            <?php echo e($errors->first('name')); ?>

          </div>
        </div>
        <div class="form-group">
          <label for="name">NIP</label>
          <input id="name" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" tabindex="1" placeholder="NIP" value="<?php echo e(old('name')); ?>" autofocus>
          <div class="invalid-feedback">
            <?php echo e($errors->first('name')); ?>

          </div>
        </div>
        <div class="form-group">
          <label for="name">Gol/Pangkat</label>
          <input id="name" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" tabindex="1" placeholder="Golongan/Pangkat" value="<?php echo e(old('name')); ?>" autofocus>
          <div class="invalid-feedback">
            <?php echo e($errors->first('name')); ?>

          </div>
        </div>
        <div class="form-group">
          <label for="name">Username</label>
          <input id="name" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" tabindex="1" placeholder="Username" value="<?php echo e(old('name')); ?>" autofocus>
          <div class="invalid-feedback">
            <?php echo e($errors->first('name')); ?>

          </div>
        </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" placeholder="Email address" name="email" tabindex="1" value="<?php echo e(old('email')); ?>" autofocus>
        <div class="invalid-feedback">
          <?php echo e($errors->first('email')); ?>

        </div>
      </div>

      <div class="form-group">
        <label for="password" class="control-label">Password</label>
        <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid': ''); ?>" placeholder="Set account password" name="password" tabindex="2">
        <div class="invalid-feedback">
          <?php echo e($errors->first('password')); ?>

        </div>
      </div>

      <div class="form-group">
        <label for="password_confirmation" class="control-label">Confirm Password</label>
        <input id="password_confirmation" type="password" placeholder="Confirm account password" class="form-control<?php echo e($errors->has('password_confirmation') ? ' is-invalid': ''); ?>" name="password_confirmation" tabindex="2">
        <div class="invalid-feedback">
          <?php echo e($errors->first('password_confirmation')); ?>

        </div>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
          Register
        </button>
      </div>
    </form>
  </div>
</div>
<div class="mt-5 text-muted text-center">
 Already have an account? <a href="<?php echo e(route('login')); ?>">Sign In</a>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\pkl\master\resources\views/auth/register.blade.php ENDPATH**/ ?>