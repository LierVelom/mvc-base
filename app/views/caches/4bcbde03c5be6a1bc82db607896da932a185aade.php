<?php /* C:\xampp\htdocs\mvc-base\app\views/frontend/articles/show.blade.php */ ?>
 

<?php $__env->startSection('content'); ?>
    <h1 class="text-center mt-5">Show detail article</h1>
    <div class="article mt-5">
        <h5>Title: <?php echo e($article['title']); ?></h5>
        <h5>Description: <?php echo e($article['description']); ?></h5>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', ['title' => $article['title']], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>