

<?php $__env->startSection('title'); ?>
    Services
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <p>This is product Service page. you can find the services here.</p>
    <?php $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<li><?php echo e($d); ?></li>
	<?php 
		echo "<br>" 
	?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\APWT\APWT_TASK_1\resources\views/product/service.blade.php ENDPATH**/ ?>