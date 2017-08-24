<?php $__env->startSection('style'); ?>
    <?php echo e(HTML::style('css/provinceList.css')); ?>

    <style>
        body {
            background-image: url(../images/<?php echo e($provinces->bg_url); ?>);
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="gallery text-center" id="wthree-gallery">
                <h3 class="agileits_head"><?php echo e($provinces->name); ?> Hotels</h3>
                <span class="w3-line"></span>
                <div class="row">
                    <form is="ajax-form" method="post" action="" id="search1">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <input name="inputSearch" type="text" size="40" placeholder="Find hotels"/>
                    </form>
                </div>
        </div>

        <div id="service-content">

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <?php echo e(HTML::script('bower_components/ajax-form/ajax-form.js')); ?>

    <?php echo e(HTML::script('bower_components/jquery-form/dist/jquery.form.min.js')); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('pages.service.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>