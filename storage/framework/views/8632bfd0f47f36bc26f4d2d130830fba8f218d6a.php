

<?php $__env->startSection('title', $post['title']); ?>

<?php $__env->startSection('content'); ?>
<?php if($post['is_new']): ?>
<div>A new bog is post! using if</div>
<?php elseif(!$post['is_new']): ?>
<div>blog post is old! using elseif</div>
<?php endif; ?>
<?php if (! ($post['is_new'])): ?>
<div>it is an old post...using unless</div>
<?php endif; ?>
    <h1><?php echo e($post['title']); ?></h1>
    <p><?php echo e($post['content']); ?></p>

<?php if(isset($post['has_comments'])): ?>
<div>the post has some comments... using isset</div>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LARAVEL-PROJECTS\laravel1\resources\views/posts/show.blade.php ENDPATH**/ ?>