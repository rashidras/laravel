<?php if($loop->even): ?>
<div><?php echo e($key); ?>.<?php echo e($post->title); ?></div>
<?php else: ?>
<div style="background-color: silver"><?php echo e($key); ?>.<?php echo e($post->title); ?></div>
<?php endif; ?>
<div>
    <form action="<?php echo e(route('posts.destroy', ['post' => $post->id])); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <div><input type="submit" value="Delete!"></div>
    </form>
</div><?php /**PATH C:\xampp\htdocs\LARAVEL-PROJECTS\laravel1\resources\views/posts/partials/post.blade.php ENDPATH**/ ?>