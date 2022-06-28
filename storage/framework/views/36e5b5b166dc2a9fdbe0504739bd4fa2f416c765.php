

<?php $__env->startSection('title', 'Blog Posts'); ?>

<?php $__env->startSection('content'); ?>
<!-- <?php echo $__env->renderEach('posts.partials.post', $posts, 'post'); ?> -->
<?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?> 
    <?php echo $__env->make('posts.partials.post', [], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div><?php echo e($key); ?>.<?php echo e($post['title']); ?></div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
NO POSTS FOUND!
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LARAVEL-PROJECTS\laravel1\resources\views/posts/index.blade.php ENDPATH**/ ?>