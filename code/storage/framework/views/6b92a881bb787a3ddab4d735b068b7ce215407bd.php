<?php $__env->startSection('title'); ?>
    <?php echo e(__('Change Password')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="section">
        <div class="card">

            <div class="card-header">

                <div class="divider">
                    <div class="divider-text">
                        <h4><?php echo e(__('Change Password')); ?></h4>
                    </div>
                </div>
            </div>

            <div class="card-content">

                <div class="row">
                    <div class="col-12">
                        <?php echo Form::open(['url' => route('changepassword.store'), 'data-parsley-validate', 'id' => 'form']); ?>

                        <?php echo csrf_field(); ?>
                        <div class="row mt-1">

                            <?php if(Auth::user()->type == 0): ?>
                                <div class="form-group row">
                                    <label
                                        class="col-sm-4 col-form-label text-alert text-center"><?php echo e(__('Name')); ?></label>
                                    <div class="col-sm-4">
                                        <input type="text" name="name"
                                            class="form-control form-control-lg form-control-solid mb-2"
                                            placeholder=<?php echo e(__('Name')); ?> value="<?php echo e(Auth::user()->name); ?>" required
                                            readonly />
                                    </div>
                                </div>
                            <?php endif; ?>

                            <div class="form-group row">
                                <label
                                    class="col-sm-4 col-form-label text-alert text-center"><?php echo e(__('Current Password')); ?></label>
                                <div class="col-sm-4">
                                    <div class="form-group position-relative form-floating has-icon-right mb-1"
                                        id="pwd">
                                        <input type="password" name="current_password" id="old_password"
                                            class="form-control" placeholder="Current password" required />

                                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                        <div class="form-control-icon icon-right">
                                            <i class="bi bi-eye" id='toggle_pass'></i>
                                        </div>
                                    </div>
                                </div>
                                <label class="col-sm-4" id="old_status"></label>

                            </div>

                            <div class="form-group row">

                                <label
                                    class="col-sm-4 col-form-label text-alert text-center"><?php echo e(__('New Password')); ?></label>

                                <div class="col-sm-4">
                                    <div class="form-group position-relative form-floating has-icon-right mb-1"
                                        id="pwd">
                                        <input type="password" name="newPassword" id="newPassword" class="form-control"
                                            placeholder="Current password" required />

                                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                        <div class="form-control-icon icon-right">
                                            <i class="bi bi-eye" id='new_toggle_pass'></i>
                                        </div>
                                    </div>
                                    <span class="error-password text-danger"></span>
                                </div>
                                <label class="col-sm-4" id="old_status"></label>

                            </div>
                            <div class="form-group row">
                                <label
                                    class="col-sm-4 col-form-label text-alert text-center"><?php echo e(__('Verify Password')); ?></label>
                                <div class="col-sm-4">
                                    <div class="form-group position-relative form-floating has-icon-right mb-1"
                                        id="pwd">
                                        <input type="password" name="confPassword" id="confPassword" class="form-control"
                                            placeholder="Current password" required />

                                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                        <div class="form-control-icon icon-right">
                                            <i class="bi bi-eye" id='conf_toggle_pass'></i>
                                        </div>
                                    </div>
                                    <span class="error-password text-danger"></span>
                                </div>

                                
                                <span class="error col-sm-4" style="color:red">
                                    <?php $__errorArgs = ['newPassword'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <?php echo e($message); ?>

                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    <?php $__errorArgs = ['confPassword'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <?php echo e($message); ?>

                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </span>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label text-alert">&nbsp;</label>
                                <div class="col-sm-4 text-end">
                                    <button type="submit" name="btnadd" value="btnadd"
                                        class="btn btn-primary float-right"><?php echo e(__('Change')); ?></button>
                                </div>

                            </div>
                        </div>
                    </div>
                    <?php echo Form::close(); ?>


                </div>
            </div>
        </div>

        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        $(document).ready(function() {

            $("#toggle_pass").click(function() {


                $(this).toggleClass("bi bi-eye bi-eye-slash");
                var input = $('[name="current_password"]');
                if (input.attr("type") == "password") {
                    input.attr("type", "text");

                } else {
                    input.attr("type", "password");
                }
            });




            $("#conf_toggle_pass").click(function() {


                $(this).toggleClass("bi bi-eye bi-eye-slash");
                var input = $('[name="confPassword"]');
                if (input.attr("type") == "password") {
                    input.attr("type", "text");

                } else {
                    input.attr("type", "password");
                }
            });


            $("#new_toggle_pass").click(function() {


                $(this).toggleClass("bi bi-eye bi-eye-slash");
                var input = $('[name="newPassword"]');
                if (input.attr("type") == "password") {
                    input.attr("type", "text");

                } else {
                    input.attr("type", "password");
                }
            });
        });
        $('#old_password').on('blur input', function() {
            var old_password = $(this).val();
            console.log(old_password);
            $.ajax({
                type: 'POST',
                url: "<?php echo e(route('checkpassword')); ?>",
                data: {
                    '_token': "<?php echo e(csrf_token()); ?>",
                    old_password: old_password
                },
                beforeSend: function() {
                    $('#old_status').html('checking..');
                },
                success: function(result) {
                    console.log(result);
                    if (result.error == true) {
                        $('#old_status').html("");
                        $('#old_status').html(
                            "<i class='bi bi-check-circle-fill fs-2 text-success'></i>");
                    } else {
                        $('#old_status').html("");
                        $('#old_status').html("<i class='bi bi-x-circle-fill fs-2 text-danger'></i>");
                        $('#old_password').focus();
                        allowsubmit = false;
                    }

                },
                error: function error(error) {
                    $('#old_status').html("");
                    $('#old_status').html("<i class='bi bi-x-circle-fill fs-2 text-danger'></i>");
                    $('#old_password').focus();
                    allowsubmit = false;
                }
            });

        });
    </script>

    <script>
        //on keypress
        $('#confPassword').keyup(function(e) {
            //get values
            var pass = $('#newPassword').val();
            var confpass = $(this).val();
            console.log(pass + "::" + confpass);
            //check the strings
            if (pass == confpass) {
                //if both are same remove the error and allow to submit
                $('.error').text('');
                allowsubmit = true;
            } else {
                //if not matching show error and not allow to submit
                $('.error').text('Password not Matching');
                allowsubmit = false;
            }
        });

        //jquery form submit
        $('#form').submit(function() {

            var pass = $('#newPassword').val();
            var confpass = $('#confPassword').val();

            //just to make sure once again during submit
            //if both are true then only allow submit
            if (pass == confpass) {
                allowsubmit = true;
            }
            if (allowsubmit) {
                return true;
            } else {
                return false;
            }
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wrteam-dev/ebroker/resources/views/change_password/index.blade.php ENDPATH**/ ?>