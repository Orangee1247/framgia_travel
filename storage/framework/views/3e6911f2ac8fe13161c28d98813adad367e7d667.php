<?php $__env->startSection('style'); ?>
    <?php echo e(HTML::style('bower_components/AdminLTE/plugins/select2/select2.min.css')); ?>

    <?php echo e(HTML::style('bower_components/AdminLTE/plugins/datepicker/datepicker3.css')); ?>

    <?php echo e(HTML::style('bower_components/AdminLTE/plugins/timepicker/bootstrap-timepicker.min.css')); ?>

    <?php echo e(HTML::style('css/requestTour.css')); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('header'); ?>
    <?php echo $__env->make('includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="w3agile-about-section-head text-center">
            <h2>About Tour Request</h2>
            <span></span>
        </div>
        <div class="centeredDiv">
            <h3>Tell us about <b><em><?php echo e(Auth::user()->name); ?></em></b> desired tour requirements</h3>
            <hr>
            <form action="<?php echo e(route('requestPost')); ?>" method="POST">
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <div class="form-group">
                    <label>Tour Name</label> &nbsp;
                    <i class="fa fa-commenting-o"></i>
                    <input class="form-control" name="title" required autocomplete="off"
                           placeholder="Please Enter Tour Name"/>
                </div>
                <div class="form-group">
                    <label>Visiting provinces</label> &nbsp;
                    <i class="fa fa-location-arrow"></i>
                    <select name="proChoice[]" class="form-control select2" multiple>
                        <?php $__currentLoopData = $provinces; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $province): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($province->id); ?>"><?php echo e($province->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group date">
                            <label>Date</label> &nbsp;
                            <i class="fa fa-calendar"></i>
                            <input name="dateStart" type="text" class="form-control pull-right" id="datepicker">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="bootstrap-timepicker">
                            <div class="form-group">
                                <label>Time</label> &nbsp;
                                <i class="fa fa-clock-o"></i>
                                <div class="form-group">
                                    <input name="time" type="text" class="form-control timepicker">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Description</label> &nbsp;
                    <i class="fa fa-pencil"></i>
                    <textarea class="form-control" rows="3" name="description" autocomplete="off"
                              placeholder="Please Enter Description"></textarea>
                </div>
                <div class="form-group">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"
                                   onchange="document.getElementById('btnt').disabled = !this.checked"/>
                            I will agree to Framgia Trip <a href="#">Term & Condition</a>
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-success" name="btn" id="btnt" disabled>Create</button>
                <button type="reset" class="btn btn-warning">Reset</button>
            </form>
        </div>
        <div class="clearfix"></div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <?php echo e(HTML::script('bower_components/AdminLTE/plugins/select2/select2.full.js')); ?>

    <?php echo e(HTML::script('bower_components/AdminLTE/plugins/datepicker/bootstrap-datepicker.js')); ?>

    <?php echo e(HTML::script('bower_components/AdminLTE/plugins/timepicker/bootstrap-timepicker.min.js')); ?>

    <script>
        (function ($) {
            $("#dayup").on("click", function () {
                $("#days").val(parseInt($("#days").val(), 10) + 1);
            });
            $("#daydown").on("click", function () {
                if ($("#days").val() > 0)
                    $("#days").val(parseInt($("#days").val(), 10) - 1);
            });
            $(".select2").select2();
            $(".timepicker").timepicker({
                showInputs: false
            });
            $('#datepicker').datepicker({
                autoclose: true
            });
        })(jQuery);
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>