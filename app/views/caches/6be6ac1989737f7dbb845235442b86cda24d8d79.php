<?php /* C:\xampp\htdocs\mvc-base\app\views/frontend/pages/about.blade.php */ ?>
 

<?php $__env->startSection('content'); ?>
    <div class="text-center">
        <h1 class="mt-5">This is about page</h1>
        <div>Show log in your browser to see scripts works</div>
    </div>
<?php $__env->stopSection(); ?>

  
<?php $__env->startSection('scripts'); ?>
<script>
    console.log('This script block just working in about page');
</script>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('frontend.layouts.app', ['title' => 'About'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>