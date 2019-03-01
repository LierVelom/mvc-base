<?php /* C:\xampp\htdocs\mvc-base\app\views/frontend/pages/home.blade.php */ ?>
<?php $__env->startSection('content'); ?>
    <h1 class="text-center mt-5"><i class="fas fa-home"></i> Homepage</h1>
    <div id="articles-wrapper" class="mt-5">
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($article['id']); ?></td>
                    <td><?php echo e($article['title']); ?></td>
                    <td><?php echo e($article['description']); ?></td>
                    <td>
                        <a href="/articles/<?php echo e($article['id']); ?>" class="btn btn-success" role="button">Show</a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>