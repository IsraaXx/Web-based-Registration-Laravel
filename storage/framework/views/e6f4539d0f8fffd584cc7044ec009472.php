

<?php $__env->startSection('title', 'View Student Details'); ?>

<?php $__env->startSection('head-extra'); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div style="margin-top: 100px;">
        <h1 style="text-align: center; margin-top: 0;">Student Profile</h1>

        <div class="card mb-3" style="max-width: 600px; margin: auto;">
            <div class="row g-0">
                <div class="col-md-4 d-flex align-items-center justify-content-center">
                    <img src="<?php echo e(asset('images/' . $user->student_img)); ?>"
                         class="img-fluid rounded-start"
                         alt="Profile Image"
                         style="width: 150px; height: 150px; object-fit: cover; border-radius: 50%;">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <p><strong>Full Name:</strong> <?php echo e($user->full_name); ?></p>
                        <p><strong>Username:</strong> <?php echo e($user->user_name); ?></p>
                        <p><strong>Email:</strong> <?php echo e($user->email); ?></p>
                        <p><strong>Phone:</strong> <?php echo e($user->phone); ?></p>
                        <p><strong>WhatsApp:</strong> <?php echo e($user->whatsup_number); ?></p>
                        <p><strong>Address:</strong> <?php echo e($user->address); ?></p>
                        <p><strong>User Role:</strong> <?php echo e(ucfirst($user->user_role)); ?></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-4">
            <a href="<?php echo e(route('users.edit', $user->id)); ?>" class="btn btn-warning">Edit</a>
            <a href="<?php echo e(route('users.index')); ?>" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\user\Downloads\Web-Laravel\IS333_Web-based-laravel_User-Registration-webpage\resources\views/users/show.blade.php ENDPATH**/ ?>