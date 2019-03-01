<?php /* C:\xampp\htdocs\mvc-base\app\views/backend/articles/index.blade.php */ ?>
<?php $__env->startSection('content'); ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"><?php echo e($article['id']); ?></th>
                    <td><?php echo e($article['title']); ?></td>
                    <td><?php echo e($article['description']); ?></td>
                    <td>
                        <a href="<?php echo e(BASE_URL . '/admin/articles/edit/' . $article['id']); ?>" class="btn btn-info" role="button">Edit</a>
                        <button class="btn btn-danger btn-destroy-article" type="button" data-id="<?php echo e($article['id']); ?>">Delete</button>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script>
        $('.btn-destroy-article').on('click', function () {
            var r = confirm("Delete this article?");

            if (r == true) {
                let id = $(this).data('id'); 
                $.ajax({ 
                    type: "POST", 
                    url: "articles/destroy", 
                    data: {id},
                    success: function () {
                        location.reload();
                    }
                });
            }
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>