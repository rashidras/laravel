

<?php $__env->startSection('title','Update the post'); ?>

<?php $__env->startSection('content'); ?>
<form action="<?php echo e(route('posts.update', ['post' => $post->id])); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <?php echo $__env->make('posts.partials.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div><input type="submit" value="Update"></div>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LARAVEL-PROJECTS\laravel1\resources\views/posts/edit.blade.php ENDPATH**/ ?>