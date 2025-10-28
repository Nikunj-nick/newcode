<?php $__env->startSection('title'); ?>
    <?php echo e(__('Terms & Conditions')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-title'); ?>
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h4><?php echo $__env->yieldContent('title'); ?></h4>

            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <section class="section">
        <div class="card">

            <form action="<?php echo e(url('settings')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="card-body">
                    <input name="type" value="terms_conditions" type="hidden">
                    <div class="row form-group">
                        <div class="col-12 d-flex justify-content-end">
                            <a href="<?php echo e(route('customer-terms-conditions')); ?>"col-sm-12 col-md-12 d-fluid
                                class="btn icon btn-primary btn-sm rounded-pill" onclick="" title="Enable"><i
                                    class="bi bi-eye-fill"></i></a>
                        </div>
                        <div class="col-md-12 mt-3">
                            <textarea id="tinymce_editor" name="data" class="form-control col-md-7 col-xs-12"><?php echo e($data); ?></textarea>

                        </div>

                    </div>
                    <div class="col-12 d-flex justify-content-end">

                        <button class="btn btn-primary me-1 mb-1" type="submit" name="submit"><?php echo e(__('Save')); ?></button>

                    </div>
                </div>
                


                
            </form>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wrteam-dev/ebroker/resources/views/settings/terms-conditions.blade.php ENDPATH**/ ?>