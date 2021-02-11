
<?php $__env->startSection('content'); ?>
    <!-- /.login-logo -->   
    <div class="card">
        <div class="card-body login-card-body">
        <?php if(session('status')): ?>
            <div class="alert alert-danger">
                <?php echo e(session('status')); ?>

            </div>
        <?php endif; ?>
        <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo e($error); ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <?php endif; ?>
        <form action="<?php echo e(route('admin.login')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="User Eamil" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>
            <div class="input-group-append">
                <div class="input-group-text">
                <span><img src="<?php echo e(asset('backend/img/user.png')); ?>"></span>
                </div>
            </div>
            </div>
            <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" name="password" required autocomplete="current-password">
            <div class="input-group-append">
                <div class="input-group-text">
                <span><img src="<?php echo e(asset('backend/img/pass.png')); ?>"></span>
                </div>
            </div>
            </div>
            <div class="row">
            <!-- /.col -->
            <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
            <div class="col-12">
                <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                    Remember Me
                </label>
                </div>
            </div>
            <!-- /.col -->
            </div>
        </form>
        <!-- /.social-auth-links -->

        <p class="mb-1">
            <a href="forgot-password.html">I forgot my password</a>
        </p>
        <p class="mb-0">
            <a href="register.html" class="text-center">Register a new membership</a>
        </p>
        </div>
        <!-- /.login-card-body -->
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\mangrove-hotel\resources\views/admin/login.blade.php ENDPATH**/ ?>