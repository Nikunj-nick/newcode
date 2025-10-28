<?php $__env->startSection('title'); ?>
    <?php echo e(__('Change Profile')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="section">
        <div class="card">

            <div class="card-header">

                <div class="divider">
                    <div class="divider-text">
                        <h4><?php echo e(__('Change Profile')); ?></h4>
                    </div>
                </div>
            </div>

            <div class="card-content">

                <div class="row">
                    <div class="col-12">

                        <?php echo e(Form::open(['url' => route('updateprofile'), 'id' => '#form'])); ?>

                        <div class="row mt-1">
                            <div class="card-body">

                                <?php if(Auth::user()->type == 0): ?>
                                    <div class="form-group row">
                                        <label
                                            class="col-sm-4 col-form-label text-alert text-center"><?php echo e(__('Name')); ?></label>
                                        <div class="col-sm-4">
                                            <input type="text" name="name"
                                                class="form-control form-control-lg form-control-solid mb-2"
                                                placeholder=<?php echo e(__('Name')); ?> value="<?php echo e(Auth::user()->name); ?>" required />
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label
                                            class="col-sm-4 col-form-label text-alert text-center"><?php echo e(__('Email')); ?></label>
                                        <div class="col-sm-4">
                                            <input type="email" name=<?php echo e(__('email')); ?>

                                                class="form-control form-control-lg form-control-solid mb-2"
                                                placeholder="Email" value="<?php echo e(Auth::user()->email); ?>" required />
                                        </div>
                                    </div>
                                <?php endif; ?>


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
        $('#old_password').on('blur input', function() {
            var old_password = $(this).val();
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

                    if (result === "1") {
                        $('#old_status').html("");
                        $('#old_status').html(
                            "<i class='bi bi-check-circle-fill fs-2 text-success'></i>");
                        allowsubmit = true;
                    } else {
                        $('#old_status').html("");
                        $('#old_status').html("<i class='bi bi-x-circle-fill fs-2 text-danger'></i>");
                        $('#old_password').focus();
                        allowsubmit = false;
                    }
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

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wrteam-dev/ebroker/resources/views/change_profile/index.blade.php ENDPATH**/ ?>