

<?php $__env->startSection('title','Employee List'); ?>

<?php $__env->startSection('content'); ?>

<a href="index.php?action=create">Add Employee</a>

<ul>
<?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li>
        <b><?php echo e($e['name']); ?></b> - <?php echo e($e['title']); ?>


        <ul>
        <?php $__currentLoopData = explode(',', $e['skills']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e(trim($s)); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>

        <a href="index.php?action=edit&id=<?php echo e($e['id']); ?>">Edit</a> |
        <a href="index.php?action=delete&id=<?php echo e($e['id']); ?>">Delete</a>
    </li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Workshop8\app\views/employee/index.blade.php ENDPATH**/ ?>