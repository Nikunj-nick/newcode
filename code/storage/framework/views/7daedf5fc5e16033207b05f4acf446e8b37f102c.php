<?php $__env->startSection('title'); ?>
    <?php echo e(__('Web Settings')); ?>

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

        <form class="form" id="myForm" action="<?php echo e(url('web-settings')); ?>" method="POST" enctype="multipart/form-data"
            data-parsley-validate>
            <?php echo e(csrf_field()); ?>

            <div class="row">
                <div class="col-md-6 ">
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="divider pt-3">
                                        <h6 class="divider-text"><?php echo e(__('Image Settings')); ?></h6>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label"><?php echo e(__('Main Logo')); ?></label>
                                            <button class="bottomleft btn btn-primary web_logo_btn"
                                                type="button">+</button>

                                            <input accept="image/*" name='web_logo' type='file' id="web_logo"
                                                style="display: none" />
                                            <img id="blah_web_logo" height="80" width="150"
                                                style="margin-left: 5%;background: #f7f7f7; padding:10px"
                                                src="<?php echo e(url('assets/images/logo/' . (system_setting('web_logo') ? system_setting('web_logo') : 'web_logo.png'))); ?>" />

                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label"><?php echo e(__('Placeholder Image')); ?></label>
                                            <button class="bottomleft btn btn-primary btn_placeholder_logo"
                                                type="button">+</button>

                                            <input accept="image/*" name='web_placeholder_logo' type='file'
                                                id="web_placeholder_logo" style="display: none" />
                                            <img id="blah_placeholder_logo" height="80" width="80"
                                                style="margin-left: 5%;background: #f7f7f7"
                                                src="<?php echo e(url('assets/images/logo/' . (system_setting('web_placeholder_logo') ? system_setting('web_placeholder_logo') : 'placeholder.svg'))); ?>" />

                                        </div>
                                        <div class="col-md-6 mt-5">
                                            <label class="form-label"><?php echo e(__('Footer Logo')); ?></label>
                                            <button class="bottomleft btn btn-primary web_footer_logo_btn"
                                                type="button">+</button>

                                            <input accept="image/*" name='web_footer_logo' type='file'
                                                id="web_footer_logo" style="display: none" />
                                            <img id="blah_web_footer_logo" height="80" width="150"
                                                style="margin-left: 5%;background: #f7f7f7; padding:10px"
                                                src="<?php echo e(url('assets/images/logo/' . (system_setting('web_footer_logo') ? system_setting('web_footer_logo') : 'web_footer_logo.png'))); ?>" />

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="card">
                                <div class="card-body">

                                    <div class="divider pt-3">
                                        <h6 class="divider-text"><?php echo e(__('Iframe Link For Web')); ?></h6>

                                    </div>

                                    <div class="form-group mandatory row mt-3">

                                        <label class="col-sm-1 form-label-mandatory "><?php echo e(__('Link')); ?></label>
                                        <div class="col-sm-11 col-md-10 col-xs-12">
                                            <textarea id="iframe_tag" class="form-control" rows="4" data-parsley-required="true" placeholder="Iframe Link"><?php echo e(system_setting('iframe_link') != '' ? system_setting('iframe_link') : ''); ?></textarea>
                                            <input type="hidden" name="iframe_link" id="iframe_link"
                                                value="<?php echo e(system_setting('iframe_link') != '' ? system_setting('iframe_link') : ''); ?>">

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="divider pt-3">
                                        <h6 class="divider-text"><?php echo e(__('Social Media Links')); ?></h6>
                                    </div>

                                    <div class="card-body">
                                        <div class="form-group row">

                                            <label class="form-label"><?php echo e(__('Facebook Id')); ?></label>
                                            <div class="col-sm-12">
                                                <input name="facebook_id" type="text" class="form-control"
                                                    id="facebook_id" placeholder="Facebook Id"
                                                    value="<?php echo e(system_setting('facebook_id') != '' ? system_setting('facebook_id') : ''); ?>">
                                            </div>
                                            <label class="form-label mt-2"><?php echo e(__('Instagram Id')); ?></label>
                                            <div class="col-sm-12">
                                                <input name="instagram_id" type="text" class="form-control"
                                                    placeholder="Instagram Id"
                                                    value="<?php echo e(system_setting('instagram_id') != '' ? system_setting('instagram_id') : ''); ?>">
                                            </div>

                                        </div>

                                        <div class="row form-group">
                                            <label class=" form-label"><?php echo e(__('Twitter Id')); ?></label>
                                            <div class="col-sm-12">
                                                <input name="twitter_id" type="text" class="form-control"
                                                    placeholder="Twitter Id"
                                                    value="<?php echo e(system_setting('twitter_id') != '' ? system_setting('twitter_id') : ''); ?>">

                                            </div>
                                            <label class="form-label mt-2"><?php echo e(__('Pintrest Id')); ?></label>
                                            <div class="col-sm-12">
                                                <input name="pintrest_id" type="text" class="form-control"
                                                    placeholder="Pintrest Id"
                                                    value="<?php echo e(system_setting('pintrest_id') != '' ? system_setting('pintrest_id') : ''); ?>">

                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-12">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="divider pt-3">
                                                <h6 class="divider-text"><?php echo e(__('More Settings')); ?></h6>
                                            </div>
                                            <div class="form-group row mt-3">
                                                <div class="col-md-6">

                                                    <label class="col-sm-12 form-label "><?php echo e(__('Playstore Id')); ?></label>

                                                    <input name="playstore_id" type="text" class="form-control"
                                                        placeholder="Playstore Id"
                                                        value="<?php echo e(system_setting('playstore_id') != '' ? system_setting('playstore_id') : ''); ?>">

                                                </div>
                                                <div class="col-md-6">
                                                    <label
                                                        class="col-sm-12 form-label "><?php echo e(__('Type Background')); ?></label>

                                                    <input name="sell_background" type="color" class="form-control"
                                                        placeholder="System Color"
                                                        value="<?php echo e(system_setting('sell_background') != '' ? system_setting('sell_background') : '#e8aa42'); ?>"
                                                        id="systemColor">

                                                </div>

                                            </div>
                                            <div class="form-group  row mt-2">

                                                <div class="col-md-6">

                                                    <label
                                                        class="col-sm-12 form-label mt-1"><?php echo e(__('Appstore Id')); ?></label>

                                                    <input name="appstore_id" type="text" class="form-control"
                                                        placeholder="Appstore Id"
                                                        value="<?php echo e(system_setting('appstore_id') != '' ? system_setting('appstore_id') : ''); ?>">
                                                </div>

                                                <div class="col-md-6">

                                                    <label
                                                        class="col-sm-12 form-label "><?php echo e(__('Facility Background')); ?></label>

                                                    <input name="category_background" type="color"
                                                        class="form-control mt-1" placeholder="System Color"
                                                        value="<?php echo e(system_setting('category_background') != '' ? system_setting('category_background') : '#087cc7c14'); ?>"
                                                        id="systemColor">

                                                </div>
                                                <div class="col-md-6">

                                                    <label
                                                        class="col-sm-4 form-check-label mt-3 "><?php echo e(__('Maintenance Mode')); ?></label>

                                                    <div class="form-check form-switch ">

                                                        <input type="hidden" name="web_maintenance_mode"
                                                            id="web_maintenance_mode"
                                                            value="<?php echo e(system_setting('web_maintenance_mode') != '' ? system_setting('web_maintenance_mode') : 0); ?>">
                                                        <input class="form-check-input" type="checkbox" role="switch"
                                                            <?php echo e(system_setting('web_maintenance_mode') == '1' ? 'checked' : ''); ?>

                                                            id="switch_maintenance_mode">
                                                        <label class="form-check-label mandatory"
                                                            for="switch_maintenance_mode"></label>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-12 d-flex justify-content-end">
                <button type="submit" name="btnAdd1" value="btnAdd" id="btnAdd1"
                    class="btn btn-primary me-1 mb-1">Save</button>
            </div>

            </div>
        </form>

    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>
        $("#switch_maintenance_mode").on('change', function() {
            $("#switch_maintenance_mode").is(':checked') ? $("#web_maintenance_mode").val(1) : $("#web_maintenance_mode")
                .val(0);
        });
        $(document).on('click', '#web_logo', function(e) {

            $('.web_logo').hide();

        });
        $(document).on('click', '#web_favicon', function(e) {

            $('.web_favicon').hide();

        });
        $(document).on('click', '#web_placeholder_logo', function(e) {

            $('.web_placeholder_logo').hide();

        });
        $(document).on('click', '#web_footer_logo', function(e) {

            $('.web_footer_logo').hide();

        });





        document.getElementById('myForm').addEventListener('submit', function(event) {


            const iframeContent = document.getElementById('iframe_tag').value;

            // Create a temporary element to extract the src attribute
            const tempElement = document.createElement('div');
            tempElement.innerHTML = iframeContent;

            // Get the src attribute value from the parsed HTML
            const srcValue = tempElement.querySelector('iframe').getAttribute('src');

            if (srcValue != '') {

                // Set the src value to a hidden element
                const hiddenElement = document.getElementById('iframe_link');
                hiddenElement.value = srcValue;
            }
            console.log(srcValue);
            // If you want to set the src as an attribute
            // hiddenElement.setAttribute('src', srcValue);

        });
        $('.web_logo_btn').click(function() {
            $('#web_logo').click();


        });
        web_logo.onchange = evt => {
            console.log("click");
            const [file] = web_logo.files
            console.log(file);
            if (file) {
                blah_web_logo.src = URL.createObjectURL(file)

            }


        }



        $('.btn_placeholder_logo').click(function() {
            $('#web_placeholder_logo').click();


        });
        web_placeholder_logo.onchange = evt => {
            console.log("click");
            const [file] = web_placeholder_logo.files
            console.log(file);
            if (file) {
                blah_placeholder_logo.src = URL.createObjectURL(file)

            }


        }



        $('.web_footer_logo_btn').click(function() {
            $('#web_footer_logo').click();


        });
        web_footer_logo.onchange = evt => {
            console.log("click");
            const [file] = web_footer_logo.files
            console.log(file);
            if (file) {
                blah_web_footer_logo.src = URL.createObjectURL(file)

            }


        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wrteam-dev/ebroker/resources/views/settings/web_settings.blade.php ENDPATH**/ ?>