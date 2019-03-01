<?php /* C:\xampp\htdocs\mvc-base\app\views/backend/articles/create.blade.php */ ?>
<?php $__env->startSection('content'); ?>
    <form style="max-width: 900px;" action="store" method="POST">
        <div class="form-group">
            <label for="input-title">Title</label>
            <input id="input-title" class="form-control" type="text" name="title" required>
        </div>
        <div class="form-group">
            <div class="form-group">
                <label for="input-description">Description</label>
                <textarea id="input-description" class="form-control" rows="6" name="description" required></textarea>
            </div>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Create</button>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>