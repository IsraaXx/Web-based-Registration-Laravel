

<?php $__env->startSection('title', 'Index Users'); ?>

<?php $__env->startSection('head-extra'); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php if($message = Session::get('success')): ?>

        <div class="alert alert-success">
            <?php echo e($message); ?>

        </div>

    <?php endif; ?>

    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col col-md-6"><b>Student Data</b></div>
                <div class="col col-md-6">
                    <a href="<?php echo e(url('/')); ?>" class="btn btn-success btn-sm float-end">Add</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>Image</th>
                    <th>UserName</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
                <?php if(count($users) > 0): ?>

                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <tr>
                            <td><img src="<?php echo e(asset('images/' . $row->student_img)); ?>" width="75" /></td>
                            <td><?php echo e($row->user_name); ?></td>
                            <td><?php echo e($row->email); ?></td>
                            <td><?php echo e($row->user_role); ?></td>
                            <td>
                                <form method="post" action="<?php echo e(route('users.destroy', $row->id)); ?>">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <a href="<?php echo e(route('users.show', $row->id)); ?>" class="btn btn-primary btn-sm">View</a>
                                    <a href="<?php echo e(route('users.edit', $row->id)); ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <input type="submit" class="btn btn-danger btn-sm" value="Delete" />
                                </form>

                            </td>
                        </tr>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php else: ?>
                    <tr>
                        <td colspan="5" class="text-center">No Data Found</td>
                    </tr>
                <?php endif; ?>
            </table>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\user\Downloads\Web-Laravel\IS333_Web-based-laravel_User-Registration-webpage\resources\views/users/index.blade.php ENDPATH**/ ?>