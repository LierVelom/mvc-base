<?php /* C:\xampp\htdocs\mvc-base\app\views/backend/articles/edit.blade.php */ ?>
<?php $__env->startSection('content'); ?>
    <form style="max-width: 900px;" action="../update" method="POST">
        <input type="hidden" name="id" value="<?php echo e($article['id']); ?>">
        <div class="form-group">
            <label for="input-title">Title</label>
            <input id="input-title" class="form-control" type="text" name="title" value="<?php echo e($article['title']); ?>" required>
        </div>
        <div class="form-group">
            <div class="form-group">
                <label for="input-description">Description</label>
                <textarea id="input-description" class="form-control" rows="6" name="description" required><?php echo e($article['description']); ?></textarea>
            </div>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Update</button>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>