<!-- header -->
<header id="stickyribbon">
    <div class="container">
        <!-- navigation -->
        <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="w3-logo">
                    <img src="<?php echo e(asset('images/framgia_logo.png')); ?>"/>
                    <h1><a href=<?php echo e(route('home')); ?>>Framgia Trip</a></h1>
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a class="active" href="http://localhost:8000/home"><?php echo e(trans('label.home')); ?></a></li>
                    <li><a href="<?php echo e(route('provinceList')); ?>">Provinces</a></li>
                    <li><a href="<?php echo e(route('hotelList')); ?>">Hotels</a></li>
                    <li><a class="scroll" href="#agileits-specials">Restaurants</a></li>
                    <li><a class="scroll" href="#wthree-gallery">Activities</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            Action <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Tour Offer</a></li>
                            <li><a class="dropdown-item" href="<?php echo e(route('requestGet')); ?>">Tour Request</a></li>
                        </ul>
                    </li>
                    <!-- Authentication Links -->
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </div>

    <div class="nav-mini-wrapper">
        <!-- Authentication Links -->
        
        <ul class="nav-login">
            <?php if(Auth::guest()): ?>
                <li id="register">
                    <a href="<?php echo e(route('register')); ?>">
                        <img src="<?php echo e(asset('/images/register.png')); ?>"/>
                    </a>
                </li>

                <li id="login">
                    <a href="<?php echo e(route('login')); ?>">
                        <img src="<?php echo e(asset('/images/login.png')); ?>">
                    </a>
                </li>
            <?php else: ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <?php if(Auth::user() -> level == 1): ?>
                            <li><a href="<?php echo e(route('admin')); ?>"><strong>ADMIN</strong></a></li>
                        <?php endif; ?>
                        <li><a href="<?php echo e(route('user.profile', [Auth::user()->id])); ?>"><?php echo e(trans('label.profile')); ?></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" id="logout-1">
                                <?php echo e(trans('label.logout')); ?>

                            </a>
                            <?php echo Form::open(['role'=>'form', 'route'=> 'logout', 'method'=>'POST', 'id'=>'logout-form']); ?>

                            <?php echo e(csrf_field()); ?>

                            <?php echo Form::close(); ?>

                        </li>
                    </ul>
                </li>
            <?php endif; ?>
        </ul>
    </div>
    <div class="clearfix"></div>
    <!-- //navigation -->
    <?php echo $__env->yieldContent('search'); ?>
</header>

