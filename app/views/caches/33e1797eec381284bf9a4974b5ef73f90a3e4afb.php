<?php /* C:\xampp\htdocs\mvc-base\app\views/frontend/articles/index.blade.php */ ?>
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
                    <button type="button" class="btn btn-info" data-id="<?php echo e($article['id']); ?>">Edit</button>
                    <button type="button" class="btn btn-danger btn-destroy-article" data-id="<?php echo e($article['id']); ?>">Delete</button>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>