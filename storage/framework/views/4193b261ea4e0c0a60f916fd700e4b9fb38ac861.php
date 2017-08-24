<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $__env->make('includes.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldContent('style'); ?>
</head>
<body>

<?php echo $__env->yieldContent('slide'); ?>

<?php echo $__env->yieldContent('header'); ?>

<?php echo $__env->yieldContent('content'); ?>

<?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo e(HTML::script('bower_components/jquery/dist/jquery.min.js')); ?>

<?php echo e(HTML::script('bower_components/bootstrap/dist/js/bootstrap.min.js')); ?>

<?php echo e(HTML::script('bower_components/FourBoxes/js/modernizr.custom.js')); ?>

<?php echo e(HTML::script('bower_components/FourBoxes/js/classie.js')); ?>

<?php echo e(HTML::script('bower_components/FourBoxes/js/boxesFx.js')); ?>

<script>
    $(document).ready(function () {
        $('#logout-1').on('click', function () {
            $('#logout-form').submit();
        });
    });
</script>

<?php echo $__env->yieldContent('script'); ?>

</body>
</html>
