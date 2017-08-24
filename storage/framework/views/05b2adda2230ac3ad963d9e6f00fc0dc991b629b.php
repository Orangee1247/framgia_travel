<?php $__env->startSection('style'); ?>
    <?php echo e(HTML::style('css/userPF.css', ['rel' => 'stylesheet'])); ?>

    <?php echo e(HTML::style('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
    <?php echo $__env->make('includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container" id="content">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="box box-primary">
                        <div class="box-body box-profile">
                            <img id="img" class="profile-user-img img-responsive img-circle"
                                 src="<?php echo e(asset('bower_components/AdminLTE/dist/img/user3-128x128.jpg')); ?>"
                                 alt="User profile picture">

                            <h2 class="profile-username text-center"><?php echo e(Auth::user()->name); ?></h2>

                            <p class="text-muted text-center">Tourist</p>

                            <ul class="list-group list-group-unbordered">
                                <li class="list-group-item">
                                    <b>Followers</b> <a class="pull-right"><?php echo e(Auth::user()->follower); ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Following</b> <a class="pull-right"><?php echo e(Auth::user()->following); ?></a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                    <!-- About Me Box -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h2 class="box-title">About Me</h2>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <strong>Biography</strong>
                            <p class="text-muted">
                                <?php echo e(Auth::user()->self_describe); ?>

                            </p>
                            <hr>

                            <strong>Email</strong>
                            <p class="text-muted">
                                <?php echo e(Auth::user()->email); ?>

                            </p>
                            <hr>

                            <strong>Birthday</strong>
                            <p class="text-muted"><?php echo e(Auth::user()->date_of_birth); ?></p>
                            <hr>

                            <strong>Gender</strong>
                            <p class="text-muted"><?php echo e(Auth::user()->gender); ?></p>
                            <hr>

                            <strong>Phone</strong>
                            <p class="text-muted"><?php echo e(Auth::user()->phone); ?></p>
                            <hr>

                            <strong>Address</strong>
                            <p class="text-muted"><?php echo e(Auth::user()->address); ?></p>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#plans" data-toggle="tab">Plans</a></li>
                            <li><a href="#gallery" data-toggle="tab">Gallery</a></li>
                            <li><a href="#settings" data-toggle="tab">Settings</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="active tab-pane" id="plans">
                                <div class="wrap">
                                    <?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php 
                                            $img = '';
                                            $location = $plan->plan_location->random(1)->first();
                                            if ($location) {
                                                $img = $location->province->img_url;
                                            }
                                         ?>
                                        <a href="<?php echo e(route('requestEditGet', $plan->id)); ?>">
                                            <div class="tile">
                                                <img src='<?php echo e($img); ?>'/>
                                                <div class="text">
                                                    <h2><?php echo e($plan->title); ?></h2>
                                                    <h5 class="animate-text"><?php echo e($plan->time); ?></h5>
                                                    <?php $__currentLoopData = $plan->plan_location; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $planLocaltion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <h5 class="animate-text">
                                                            <i class="fa fa-hand-o-right"></i>
                                                            <?php echo e($planLocaltion->province->name); ?>

                                                        </h5>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                            </div>
                                        </a>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                            <div class="tab-pane" id="gallery">
                                <div class="container">
                                    <div class="row">
                                        <div class="gallery">
                                            <figure>
                                                <img id="img" src="http://lorempixel.com/500/500/nature"
                                                     class="resize"/>
                                                <figcaption>Daytona Beach
                                                    <small>United States</small>
                                                </figcaption>
                                            </figure>
                                            <figure>
                                                <img id="img" src="http://lorempixel.com/500/500/nature"
                                                     class="resize"/>
                                                <figcaption>Териберка, gorod Severomorsk
                                                    <small>Russia</small>
                                                </figcaption>
                                            </figure>
                                            <figure>
                                                <img id="img" src="http://lorempixel.com/500/500/nature"
                                                     class="resize"/>
                                                <figcaption>
                                                    Bad Pyrmont
                                                    <small>Deutschland</small>
                                                </figcaption>
                                            </figure>
                                            <figure>
                                                <img id="img" src="http://lorempixel.com/500/500/nature"
                                                     class="resize"/>
                                                <figcaption>Yellowstone National Park
                                                    <small>United States</small>
                                                </figcaption>
                                            </figure>
                                            <figure>
                                                <img id="img" src="http://lorempixel.com/500/500/nature"
                                                     class="resize"/>
                                                <figcaption>Quiraing, Portree
                                                    <small>United Kingdom</small>
                                                </figcaption>
                                            </figure>
                                            <figure>
                                                <img id="img" src="http://lorempixel.com/500/500/nature"
                                                     class="resize"/>
                                                <figcaption>Highlands
                                                    <small>United States</small>
                                                </figcaption>
                                            </figure>
                                            <figure>
                                                <img id="img" src="http://lorempixel.com/500/500/nature"
                                                     class="resize"/>
                                                <figcaption>Daytona Beach
                                                    <small>United States</small>
                                                </figcaption>
                                            </figure>
                                            <figure>
                                                <img id="img" src="http://lorempixel.com/500/500/nature"
                                                     class="resize"/>
                                                <figcaption>Териберка, gorod Severomorsk
                                                    <small>Russia</small>
                                                </figcaption>
                                            </figure>
                                            <figure>
                                                <img id="img" src="http://lorempixel.com/500/500/nature"
                                                     class="resize"/>
                                                <figcaption>
                                                    Bad Pyrmont
                                                    <small>Deutschland</small>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- /.tab-pane -->
                                </div>
                                <!-- /.tab-content -->
                            </div>
                            <div class="tab-pane" id="settings">
                                <form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                    <div class="form-group">
                                        <label for="name" class="col-sm-2 control-label">Name</label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="name"
                                                   value="<?php echo e(Auth::user()->name); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="col-sm-2 control-label">Email</label>

                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" name="email"
                                                   value="<?php echo e(Auth::user()->email); ?>" readonly="true">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label"><?php echo e(__('Gender')); ?></label>
                                        <div class="col-sm-10">
                                            <div class="col-sm-2">
                                                <input type="radio" name="gender" value="Male"
                                                       id="male" <?php echo e(Auth::user()->gender == 'Male' ? 'checked' : ''); ?>>
                                                Male<br>
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="radio" name="gender" value="Female"
                                                       id="female" <?php echo e(Auth::user()->gender == 'Female' ? 'checked' : ''); ?>>
                                                Female<br>
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="radio" name="gender" value="Other"
                                                       id="other" <?php echo e(Auth::user()->gender == 'Other' ? 'checked' : ''); ?>>
                                                Other<br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="date_of_birth" class="col-sm-2 control-label">Birthday</label>
                                        <div class="col-sm-10">
                                            <input type="text" id="pickyDate" class="form-control" name="date_of_birth"
                                                   value="<?php echo e(Auth::user()->date_of_birth); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="address" class="col-sm-2 control-label">Address</label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="address"
                                                   value="<?php echo e(Auth::user()->address); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone" class="col-sm-2 control-label">Phone</label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="phone"
                                                   value="<?php echo e(Auth::user()->phone); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="self_describe" class="col-sm-2 control-label">Biography</label>

                                        <div class="col-sm-10"><textarea class="form-control" rows="3"
                                                                         name="self_describe"><?php echo e(Auth::user()->self_describe); ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"
                                                           onchange="document.getElementById('btnt').disabled = !this.checked"/>
                                                    I agree to the <a href="#">terms and conditions</a>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <input type="submit" name="btn" id="btnt" value="Submit"
                                                   class="btn btn-danger"
                                                   disabled/>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.nav-tabs-custom -->
                        </div>
                        <!-- /.col -->
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <?php echo e(HTML::script('bower_components/AdminLTE/dist/js/app.min.js')); ?>

    <?php echo e(HTML::script('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')); ?>

    <?php echo e(HTML::script('js/userPF.js', ['type' => 'text/javascript'])); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>