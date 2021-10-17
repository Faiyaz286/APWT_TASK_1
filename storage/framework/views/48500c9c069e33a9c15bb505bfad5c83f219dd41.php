<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<title>
    <?php echo $__env->yieldContent('title'); ?>
</title>

    <body>
    <?php echo $__env->make('components.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        

        <div class="container">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </body>
</html><?php /**PATH G:\Files\APWT_TASK_1\resources\views/layouts/template.blade.php ENDPATH**/ ?>