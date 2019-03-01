<?php /* C:\xampp\htdocs\mvc-base\app\views/backend/layouts/scripts.blade.php */ ?>
<script src="<?php echo e(ASSETS); ?>/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo e(ASSETS); ?>/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo e(ASSETS); ?>/js/backend/jquery.easing.min.js"></script>
<script src="<?php echo e(ASSETS); ?>/js/backend/sb-admin-2.min.js"></script>
<script src="<?php echo e(ASSETS); ?>/js/backend/app.js"></script>

<?php echo $__env->yieldContent('scripts'); ?>