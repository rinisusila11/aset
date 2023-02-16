<form class="form-inline mr-auto" action="<?php echo e(route('admin.users')); ?>">
  <ul class="navbar-nav mr-3">
    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
    <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
  </ul>
  <div class="search-element">
    <input class="form-control" value="<?php echo e(Request::get('query')); ?>" name="query" type="search" placeholder="Search" aria-label="Search" data-width="250">
    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
    <div class="search-backdrop"></div>
    
  </div>
</form>
<ul class="navbar-nav navbar-right">
 
  <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
    <img alt="image" src="<?php echo e(Auth::user()->avatarlink); ?>" class="rounded-circle mr-1">
    <div class="d-sm-none d-lg-inline-block">Hi, <?php echo e(Auth::user()->name); ?></div></a>
    <div class="dropdown-menu dropdown-menu-right">
      <div class="dropdown-title">Welcome, <?php echo e(Auth::user()->name); ?></div>
          <a href="<?php echo e(Auth::user()->profilelink); ?>" class="dropdown-item has-icon"> 
            <i class="far fa-user"></i> Profile
          </a>
      <div class="dropdown-divider"></div>
          <a href="<?php echo e(route('logout')); ?>" class="dropdown-item has-icon text-danger">
            <i class="fas fa-sign-out-alt"></i> Logout
          </a>
    </div>
  </li>
</ul>
<?php /**PATH E:\pkl\master\resources\views/admin/partials/topnav.blade.php ENDPATH**/ ?>