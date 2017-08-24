<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Register</div>
                    <div class="panel-body">
                        <?php echo Form::open(['role' => 'form','class'=>'form-horizontal','method' =>'POST','route'=>'register']); ?>

                        
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                            <?php echo Form::label('name', 'Name', ['class' => 'col-md-4 control-label']); ?>

                            

                            <div class="col-md-6">
                                <?php echo Form::input('text','name',old('name'),['id'=>'name','class'=>'form-control','autofocus'=>'true']); ?>

                                

                                <?php if($errors->has('name')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <?php echo Form::label('email', 'E-Mail Address', ['class' => 'col-md-4 control-label']); ?>

                            

                            <div class="col-md-6">
                                <?php echo Form::input('email','email',old('email'),['id'=>'email','class'=>'form-control','autofocus'=>'true']); ?>

                                

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <?php echo Form::label('password', 'Password', ['class' => 'col-md-4 control-label']); ?>

                            

                            <div class="col-md-6">
                                <?php echo Form::input('password','password',null,['id'=>'password','class'=>'form-control']); ?>

                                

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <?php echo Form::label('password-confirm', 'Confirm Password', ['class' => 'col-md-4 control-label']); ?>

                            

                            <div class="col-md-6">
                                <?php echo Form::input('password','password_confirmation',null,['id'=>'password-confirm','class'=>'form-control']); ?>

                                
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                        <?php echo Form::close(); ?>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>