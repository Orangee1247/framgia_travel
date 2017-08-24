<?php $__env->startSection('style'); ?>
    <?php echo e(HTML::style('css/provinceList.css')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
    <?php echo $__env->make('includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="gallery text-center" id="wthree-gallery">
        <div class="container">
            <h3 class="agileits_head">Choose your place to go</h3>
            <span class="w3-line"></span>
            <div class="row">
                <form method="post" action="" id="search1">
                    <input name="inputSearch" type="text" size="40" placeholder="Where to go..."/>
                </form>
            </div>
            <div class="w3l_gallery_grids">
                <div class="bs-example bs-example-tabs wthree_example_tab" role="tabpanel"
                     data-example-id="togglable-tabs">
                    <div class="w3l_gallery_grids1">
                        <?php $__currentLoopData = $provinces; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $province): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-4 w3l_gallery_grid">
                                <div class="agileinfo_gallery_grid">
                                    <a href=<?php echo e(route('provincePF', $province->name)); ?>>
                                        <div class="hovereffect">
                                            <img src="<?php echo e(url($province->img_url)); ?>" alt=" " class="img-responsive"/>
                                            <div class="overlay">
                                                <p class="info"><?php echo e($province->name); ?></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page"><?php echo e($provinces->links()); ?></div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>