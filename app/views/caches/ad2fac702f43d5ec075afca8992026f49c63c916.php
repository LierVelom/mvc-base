<?php /* C:\xampp\htdocs\mvc-base\app\views/frontend/layouts/scripts.blade.php */ ?>
<script src="<?php echo e(ASSETS); ?>/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo e(ASSETS); ?>/js/popper.js"></script>
<script src="<?php echo e(ASSETS); ?>/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo e(ASSETS); ?>/js/frontend/app.js"></script>

<?php echo $__env->yieldContent('scripts'); ?>