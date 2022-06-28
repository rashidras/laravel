

<?php $__env->startSection('title','Create the post'); ?>

<?php $__env->startSection('content'); ?>
<form action="<?php echo e(route('posts.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo $__env->make('posts.partials.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div><input type="submit" value="Create"></div>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LARAVEL-PROJECTS\laravel1\resources\views/posts/create.blade.php ENDPATH**/ ?>