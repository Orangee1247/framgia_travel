<?php $__env->startSection('style'); ?>
    <?php echo e(HTML::style('css/provincePF.css', ['rel' => 'stylesheet'])); ?>

    <?php echo e(HTML::style('css/ninja-slider.css', ['rel' => 'stylesheet'])); ?>

    <?php echo e(HTML::style('css/thumbnail-slider.css', ['rel' => 'stylesheet'])); ?>

    <style>
        body {
            background-image: url(../images/<?php echo e($provinces->bg_url); ?>);
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
    <?php echo $__env->make('includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div id="wrapper">
        <div class="container" id="content">
            <div>
                <div class="container" id="tab-content">
                    <h1 class="heading">About <?php echo e($provinces->name); ?></h1>

                    <div class="photo-wrapper">
                        <div class="photo">
                            <div id='ninja-slider'>
                                <div>
                                    <div class="slider-inner">
                                        <ul>
                                            <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><a class="ns-img"
                                                       href="../images/<?php echo e($image->img_url); ?>"></a></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                        <div class="fs-icon" title="Expand/Close"></div>
                                    </div>
                                    <div id="thumbnail-slider">
                                        <div class="inner">
                                            <ul>
                                                <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li><a class="thumb"
                                                           href="../images/<?php echo e($image->img_url); ?>"></a></li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="overview">
                        <div class="navigation">
                            <div id="navbar">
                                <ul>
                                    <li>
                                        <a>
                                            <span class="text">Overview</span>
                                            <span class="line -right"></span>
                                            <span class="line -top"></span>
                                            <span class="line -left"></span>
                                            <span class="line -bottom"></span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="<?php echo e(route('hotels', $provinces->name)); ?>">
                                            <span class="text">Places to stay</span>
                                            <span class="line -right"></span>
                                            <span class="line -top"></span>
                                            <span class="line -left"></span>
                                            <span class="line -bottom"></span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="<?php echo e(route('restaurants', $provinces->name)); ?>">
                                            <span class="text">Where to eat</span>
                                            <span class="line -right"></span>
                                            <span class="line -top"></span>
                                            <span class="line -left"></span>
                                            <span class="line -bottom"></span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="<?php echo e(route('activities', $provinces->name)); ?>">
                                            <span class="text">Things to do</span>
                                            <span class="line -right"></span>
                                            <span class="line -top"></span>
                                            <span class="line -left"></span>
                                            <span class="line -bottom"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="bio">
                            <p><?php echo e($provinces->description); ?></p>
                        </div>

                        <div class="trending">
                            <h4><strong>Travellers are talking about these hotels</strong></h4>

                            <div id="hotel">
                            </div>

                            <div id="restaurant">
                                <h4><strong>Top-rated <?php echo e($provinces->name); ?> Restaurants</strong></h4>
                            </div>

                            <div id="activity">
                                <h4><strong>Top-rated <?php echo e($provinces->name); ?> Things to Do</strong></h4>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <?php echo e(HTML::script('js/ninja-slider.js', ['type' => 'text/javascript'])); ?>

    <?php echo e(HTML::script('js/thumbnail-slider.js', ['type' => 'text/javascript'])); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>