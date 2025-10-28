<?php $__env->startSection('title'); ?>
    <?php echo e(__('System Settings')); ?>

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
        <form class="form" id="myForm" action="<?php echo e(url('set_settings')); ?>" data-parsley-validate method="POST"
            id="setting_form" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

            <div class="form-group row">
                <div class="col-md-6">
                    <div class="card" style="height: 95%">

                        <div class="card-body">
                            <div class="divider pt-3">
                                <h6 class="divider-text"><?php echo e(__('Company Details')); ?></h6>
                            </div>

                            <div class="card-body">

                                <label class="form-label center"><?php echo e(__('Company Name')); ?></label>
                                <div class="col-sm-12 ">
                                    <input name="company_name" type="text" class="form-control" id="company_name"
                                        placeholder="Company Name"
                                        value="<?php echo e(system_setting('company_name') != '' ? system_setting('company_name') : 'eBroker'); ?>">
                                </div>
                                <label class="form-label mt-2"><?php echo e(__('Email')); ?></label>
                                <div class="col-sm-12">
                                    <input name="company_email" type="email" class="form-control" placeholder="Email"
                                        value="<?php echo e(system_setting('company_email') != '' ? system_setting('company_email') : ''); ?>">
                                </div>
                                <div class="col-md-12">
                                    <div class="row mt-2">
                                        <div class="col-sm-6">

                                            <label class="form-label mt-2"><?php echo e(__('Contact Number 1')); ?></label>

                                            <input name="company_tel1" type="text" class="form-control"
                                                placeholder="Contact Number 1"
                                                value="<?php echo e(system_setting('company_tel1') != '' ? system_setting('company_tel1') : ''); ?>">
                                        </div>
                                        <div class="col-sm-6 mt-1">
                                            <label class="form-label mt-1"><?php echo e(__('Contact Number 2')); ?></label>
                                            <input name="company_tel2" type="text" class="form-control"
                                                placeholder="Contact Number 2"
                                                value="<?php echo e(system_setting('company_tel2') != '' ? system_setting('company_tel2') : ''); ?>">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row mt-2">
                                        <div class="col-sm-6">

                                            <label class="form-label mt-2"><?php echo e(__('Latitude')); ?></label>

                                            <input name="latitude" type="text" class="form-control"
                                                placeholder="Latitude"
                                                value="<?php echo e(system_setting('latitude') != '' ? system_setting('latitude') : ''); ?>">
                                        </div>
                                        <div class="col-sm-6 mt-1">
                                            <label class="form-label mt-1"><?php echo e(__('Longitude')); ?></label>
                                            <input name="longitude" type="text" class="form-control"
                                                placeholder="Longitude"
                                                value="<?php echo e(system_setting('longitude') != '' ? system_setting('longitude') : ''); ?>">

                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label class="form-label-mandatory"><?php echo e(__('Company Address')); ?></label>
                                    <div class="col-sm-12 mt-2">
                                        <textarea name="company_address" class="form-control" id="" rows="3"><?php echo e(system_setting('company_address') != '' ? system_setting('company_address') : ''); ?></textarea>

                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card" style="height: 95%">

                        <div class="card-body">
                            <div class="divider pt-3">
                                <h6 class="divider-text"><?php echo e(__('More Settings')); ?></h6>
                            </div>

                            <div class="card-body">
                                <div class="form-group mandatory">
                                    <label
                                        class="col-sm-12 form-label-mandatory  mt-1"><?php echo e(__('Default Language')); ?></label>
                                    <div class="col-sm-12 col-md-12 col-xs-12 mt-1">
                                        <select name="default_language" id="default_language"
                                            class="choosen-select form-select form-control-sm">

                                            <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php echo e($row); ?>

                                                <option value="<?php echo e($row->code); ?>"
                                                    <?php echo e(system_setting('default_language') == $row->code ? 'selected' : ''); ?>>
                                                    <?php echo e($row->name); ?>

                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <label class="col-sm-12 form-label-mandatory  mt-3"><?php echo e(__('Currency Symbol')); ?></label>
                                    <div class="col-sm-12 mt-1">
                                        <input name="currency_symbol" type="text" class="form-control"
                                            placeholder="Currency Symbol"
                                            value="<?php echo e(system_setting('currency_symbol') != '' ? system_setting('currency_symbol') : ''); ?>"
                                            data-parsley-required="true">
                                    </div>

                                    <label class="col-sm-12 form-label  mt-3"><?php echo e(__('Unsplash API Key')); ?></label>

                                    <div class="col-sm-12">
                                        <input name="unsplash_api_key" type="text" class="form-control"
                                            placeholder="Unsplash API Key"
                                            value="<?php echo e(system_setting('unsplash_api_key') != '' ? system_setting('unsplash_api_key') : ''); ?>">
                                    </div>
                                    <label class="col-sm-12 form-label  mt-3"><?php echo e(__('Place API Key')); ?></label>

                                    <div class="col-sm-12">
                                        <input name="place_api_key" type="text" class="form-control"
                                            placeholder="Place API Key"
                                            value="<?php echo e(system_setting('place_api_key') != '' ? system_setting('place_api_key') : ''); ?>">
                                    </div>
                                    <label class="col-sm-12 form-label mt-3"><?php echo e(__('System Color')); ?></label>

                                    <div class="col-sm-12">
                                        <input name="system_color" type="color" class="form-control"
                                            placeholder="System Color"
                                            value="<?php echo e(system_setting('system_color') != '' ? system_setting('system_color') : '#087C7C'); ?>"
                                            id="systemColor">
                                        <input type="hidden" id="hiddenRGBA" name="rgb_color">
                                    </div>
                                    <div class="row">
                                        <label
                                            class="col-sm-4 form-check-label mandatory mt-3 "><?php echo e(__('Number With Suffix')); ?></label>
                                        <div class="col-sm-1 col-md-1 mt-3 col-xs-12 ">
                                            <div class="form-check form-switch  ">

                                                <input type="hidden" name="number_with_suffix" id="number_with_suffix"
                                                    value="<?php echo e(system_setting('number_with_suffix') != '' ? system_setting('number_with_suffix') : 0); ?>">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    <?php echo e(system_setting('number_with_suffix') == '1' ? 'checked' : ''); ?>

                                                    id="switch_number_with_suffix">

                                            </div>
                                        </div>
                                        <label class="col-sm-5 form-check-label mt-3"><?php echo e(__('Change Icon Colors to theme Color?')); ?></label>
                                        <div class="col-sm-1 mt-3">
                                            <div class="form-check form-switch ">

                                                <input type="hidden" name="svg_clr" id="svg_clr"
                                                    value="<?php echo e(system_setting('svg_clr') != '' ? system_setting('svg_clr') : 0); ?>">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    <?php echo e(system_setting('svg_clr') == '1' ? 'checked' : ''); ?>

                                                    id="switch_svg_clr">
                                                <label class="form-check-label mandatory" for="switch_svg_clr"></label>
                                            </div>

                                        </div>

                                        
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">

                    <div class="divider pt-3">
                        <h6 class="divider-text"><?php echo e(__('Paypal Setting')); ?></h6>

                    </div>
                    <div class="form-group row mt-3">
                        <label class="col-sm-2 form-label  mt-5"><?php echo e(__('Paypal Business ID')); ?></label>
                        <div class="col-sm-4 mt-5">
                            <input name="paypal_business_id" type="text" class="form-control"
                                placeholder="Paypal Business ID"
                                value="<?php echo e(system_setting('paypal_business_id') != '' ? system_setting('paypal_business_id') : ''); ?>">
                        </div>

                        <label class="col-sm-2 form-label  mt-5"><?php echo e(__('Paypal Webhook URL')); ?></label>
                        <div class="col-sm-4 mt-5">
                            <input name="paypal_webhook_url" type="text" class="form-control" placeholder="Paypal Webhook URL" value="<?php echo e(system_setting('paypal_webhook_url') != '' ? system_setting('paypal_webhook_url') : url('/webhook/paypal')); ?>" readonly>
                        </div>

                        <br>
                        <br>
                        <br>

                        <label class="col-sm-2 form-label   mt-3 "><?php echo e(__('Sandbox Mode')); ?></label>
                        <div class="col-sm-2 col-md-4 col-xs-12   mt-3 ">
                            <div class="form-check form-switch">
                                <input type="hidden" name="sandbox_mode" id="sandbox_mode"
                                    value="<?php echo e(system_setting('sandbox_mode') != '' ? system_setting('sandbox_mode') : 0); ?>">
                                <input class="form-check-input" type="checkbox" role="switch"
                                    <?php echo e(system_setting('sandbox_mode') == '1' ? 'checked' : ''); ?> id="switch_sandbox_mode">
                                <label class="form-check-label" for="switch_sandbox_mode"></label>
                            </div>
                        </div>
                        <label class="col-sm-2 form-check-label  mt-3 "
                            id='lbl_paypal'><?php echo e(system_setting('paypal_gateway') != ''
                                ? (system_setting('paypal_gateway') == 0
                                    ? 'Disable'
                                    : 'Enable')
                                : 'Disable'); ?></label>
                        <div class="col-sm-2 col-md-4 col-xs-12   mt-3 ">
                            <div class="form-check form-switch">

                                <input type="hidden" name="paypal_gateway" id="paypal_gateway"
                                    value="<?php echo e(system_setting('paypal_gateway') != '' ? system_setting('paypal_gateway') : 0); ?>">
                                <input class="form-check-input" type="checkbox" role="switch" class="switch-input"
                                    name='op' <?php echo e(system_setting('paypal_gateway') == '1' ? 'checked' : ''); ?>

                                    id="switch_paypal_gateway">
                                <label class="form-check-label" for="switch_paypal_gateway"></label>
                            </div>
                        </div>

                    </div>
                    <div class="divider pt-3">
                        <h6 class="divider-text"><?php echo e(__('Razorpay Setting')); ?></h6>

                    </div>
                    <div class="form-group row mt-3">

                        <label class="col-sm-2 form-label  mt-5"><?php echo e(__('Razorpay key')); ?></label>
                        <div class="col-sm-4 mt-5">
                            <input name="razor_key" type="text" class="form-control" placeholder="Razorpay Key"
                                value="<?php echo e(system_setting('razor_key') != '' ? system_setting('razor_key') : ''); ?>">
                        </div>

                        <label class="col-sm-2 form-label  mt-5"><?php echo e(__('Razorpay Webhook URL')); ?></label>
                        <div class="col-sm-4 mt-5">
                            <input name="razorpay_webhook_url" type="text" class="form-control" placeholder="Razorpay Webhook URL" value="<?php echo e(system_setting('razorpay_webhook_url') != '' ? system_setting('razorpay_webhook_url') : url('/webhook/razorpay')); ?>" readonly>
                        </div>
                        <label class="col-sm-2 form-label  mt-3"><?php echo e(__('Razorpay Secret')); ?></label>
                        <div class="col-sm-4 mt-3">
                            <input name="razor_secret" type="text" class="form-control" placeholder="Razorpay Secret"
                                value="<?php echo e(system_setting('razor_secret') != '' ? system_setting('razor_secret') : ''); ?>">
                        </div>
                        <label class="col-sm-2 form-label  mt-3"
                            id='lbl_razorpay'><?php echo e(system_setting('razorpay_gateway') != ''
                                ? (system_setting('razorpay_gateway') == 0
                                    ? 'Disable'
                                    : 'Enable')
                                : 'Disable'); ?></label>
                        <div class="col-sm-2 col-md-4 col-xs-12  mt-3">
                            <div class="form-check form-switch">

                                <input type="hidden" name="razorpay_gateway" id="razorpay_gateway"
                                    value="<?php echo e(system_setting('razorpay_gateway') != '' ? system_setting('razorpay_gateway') : 0); ?>">
                                <input class="form-check-input" type="checkbox" role="switch" class="switch-input"
                                    name='op' <?php echo e(system_setting('razorpay_gateway') == '1' ? 'checked' : ''); ?>

                                    id="switch_razorpay_gateway">
                                <label class="form-check-label" for="switch_razorpay_gateway"></label>
                            </div>
                        </div>

                    </div>

                    <div class="divider pt-3">
                        <h6 class="divider-text"><?php echo e(__('Paystack Setting')); ?></h6>

                    </div>
                    <div class="form-group row mt-5">

                        <label class="col-sm-2 form-label  mt-3"><?php echo e(__('Paystack Secret key')); ?></label>
                        <div class="col-sm-4 mt-3">
                            <input name="paystack_secret_key" type="text" class="form-control"
                                placeholder="Paystack Secret Key"
                                value="<?php echo e(system_setting('paystack_secret_key') != '' ? system_setting('paystack_secret_key') : ''); ?>">
                        </div>
                        <label class="col-sm-2 form-label  mt-3"><?php echo e(__('Paystack Webhook URL')); ?></label>
                        <div class="col-sm-4 mt-3">
                            <input name="paystack_webhook_url" type="text" class="form-control" placeholder="Paystack Webhook URL" value="<?php echo e(system_setting('paystack_webhook_url') != '' ? system_setting('paystack_webhook_url') : url('/webhook/paystack')); ?>" readonly>
                        </div>
                        <label class="col-sm-2 form-label  mt-3"><?php echo e(__('Paystack Currency Symbol')); ?></label>

                        <div class="col-sm-4 mt-3">
                            <select name="paystack_currency" id="paystack_currency" class="choosen-select form-select form-control-sm">
                                <option value="GHS" <?php echo e(system_setting('paystack_currency') == 'GHS' ? 'selected' : ''); ?>> GHS</option>
                                <option value="NGN" <?php echo e(system_setting('paystack_currency') == 'NGN' ? 'selected' : ''); ?>> NGN</option>
                                <option value="USD" <?php echo e(system_setting('paystack_currency') == 'USD' ? 'selected' : ''); ?>> USD</option>
                                <option value="ZAR" <?php echo e(system_setting('paystack_currency') == 'ZAR' ? 'selected' : ''); ?>> ZAR</option>
                            </select>
                        </div>

                        <label class="col-sm-2 form-check-label  mt-3"
                            id='lbl_paystack'><?php echo e(system_setting('paystack_gateway') != ''
                                ? (system_setting('paystack_gateway') == 0
                                    ? 'Disable'
                                    : 'Enable')
                                : 'Disable'); ?></label>
                        <div class="col-sm-2 col-md-4 col-xs-12  mt-3">

                            <div class="form-check form-switch ">

                                <input type="hidden" name="paystack_gateway" id="paystack_gateway"
                                    value="<?php echo e(system_setting('paystack_gateway') != '' ? system_setting('paystack_gateway') : 0); ?>">
                                <input class="form-check-input" type="checkbox" role="switch" class="switch-input"
                                    name='op' <?php echo e(system_setting('paystack_gateway') == '1' ? 'checked' : ''); ?>

                                    id="switch_paystack_gateway">

                            </div>
                        </div>
                        <label class="col-sm-2 form-label  mt-3"><?php echo e(__('Paystack Public key')); ?></label>
                        <div class="col-sm-4 mt-3">
                            <input name="paystack_public_key" type="text" class="form-control"
                                placeholder="Paystack Public Key"
                                value="<?php echo e(system_setting('paystack_public_key') != '' ? system_setting('paystack_public_key') : ''); ?>">
                        </div>
                    </div>
                    <div class="divider pt-3">
                        <h6 class="divider-text"><?php echo e(__('Stripe Setting')); ?></h6>

                    </div>
                    <div class="form-group row mt-5">
                        <label class="col-sm-2 form-label  mt-3"><?php echo e(__('Stripe publishable key')); ?></label>
                        <div class="col-sm-4 mt-3">
                            <input name="stripe_publishable_key" type="text" class="form-control"
                                placeholder="Stripe publishable  Key"
                                value="<?php echo e(system_setting('stripe_publishable_key') != '' ? system_setting('stripe_publishable_key') : ''); ?>">
                        </div>
                        <label class="col-sm-2 form-label  mt-3"><?php echo e(__('Stripe Webhook URL')); ?></label>
                        <div class="col-sm-4 mt-3">
                            <input name="stripe_webhook_url" type="text" class="form-control" placeholder="Stripe Webhook URL" value="<?php echo e(system_setting('stripe_webhook_url') != '' ? system_setting('stripe_webhook_url') : url('/webhook/stripe')); ?>" readonly>
                        </div>
                        <label class="col-sm-2 form-check-label  mt-3"><?php echo e(__('Stripe Currency Symbol')); ?></label>

                        <div class="col-sm-4 mt-3">

                            <select name="stripe_currency" id="stripe_currency"
                                class="choosen-select form-select form-control-sm">
                                <?php $__currentLoopData = $stripe_currencies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value=<?php echo e($value); ?>

                                        <?php echo e(system_setting('stripe_currency') == $value ? 'selected' : ''); ?>>
                                        <?php echo e($value); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

                        <label class="col-sm-2 form-check-label  mt-3"
                            id='lbl_stripe'><?php echo e(system_setting('stripe_gateway') != ''
                                ? (system_setting('stripe_gateway') == 0
                                    ? 'Disable'
                                    : 'Enable')
                                : 'Disable'); ?></label>
                        <div class="col-sm-2 col-md-4 col-xs-12  mt-3">

                            <div class="form-check form-switch ">

                                <input type="hidden" name="stripe_gateway" id="stripe_gateway"
                                    value="<?php echo e(system_setting('stripe_gateway') != '' ? system_setting('stripe_gateway') : 0); ?>">
                                <input class="form-check-input" type="checkbox" role="switch" class="switch-input"
                                    name='op' <?php echo e(system_setting('stripe_gateway') == '1' ? 'checked' : ''); ?>

                                    id="switch_stripe_gateway">

                            </div>
                        </div>
                        <label class="col-sm-2 form-check-label-mandatory  mt-3"><?php echo e(__('Stripe Secret key')); ?></label>
                        <div class="col-sm-4 mt-3">
                            <input name="stripe_secret_key" type="text" class="form-control"
                                placeholder="Stripe Secret Key"
                                value="<?php echo e(system_setting('stripe_secret_key') != '' ? system_setting('stripe_secret_key') : ''); ?>">
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="divider pt-3">
                                <h6 class="divider-text"><?php echo e(__('Notification FCM Key')); ?></h6>

                            </div>

                            <div class="form-group mandatory row mt-3">

                                <label class="col-sm-12 col-md-1 form-label-mandatory "><?php echo e(__('FCM Key')); ?></label>
                                <div class="col-sm-12 col-md-11 col-md-10 col-xs-12 ">
                                    <textarea name="fcm_key" class="form-control" rows="3" data-parsley-required="true" placeholder="Fcm Key"><?php echo e(system_setting('fcm_key') != '' ? system_setting('fcm_key') : ''); ?></textarea>

                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="divider pt-3">
                            <h6 class="divider-text"><?php echo e(__('Images')); ?></h6>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-label"><?php echo e(__('Favicon Icon')); ?></label>
                                <button class="bottomleft btn btn-primary fav_icon_btn" type="button">+</button>

                                <input accept="image/*" name='favicon_icon' type='file' id="fav_image"
                                    style="display: none" />
                                <img id="blah_fav" height="100" width="110"
                                    style="margin-left: 5%;background: #f7f7f7"
                                    src="<?php echo e(url('assets/images/logo/favicon.png')); ?>" />

                            </div>
                            <div class="col-md-4">
                                <label class="form-label"><?php echo e(__('Comapany Logo')); ?></label>
                                <button class="bottomleft btn btn-primary btn_comapany_logo" type="button">+</button>

                                <input accept="image/*" name='company_logo' type='file' id="company_logo"
                                    style="display: none" />
                                <img id="blah_comapany_logo" height="100" width="110"
                                    style="margin-left: 5%;background: #f7f7f7"
                                    src="<?php echo e(url('assets/images/logo/' . (system_setting('company_logo') ? system_setting('company_logo') : 'logo.png'))); ?>" />

                            </div>
                            <div class="col-md-4">

                                <label class="form-label "><?php echo e(__('Login Page Image')); ?></label>

                                <button class="bottomleft btn btn-primary btn_login_image">+</button>

                                <input accept="image/*" name='login_image' type='file' id="login_image"
                                    style="display: none" />
                                <img id="blah_login_image" height="100" width="110"
                                    style="margin-left: 5%;background: #f7f7f7"
                                    src="<?php echo e(url('assets/images/bg/' . (system_setting('login_image') ? system_setting('login_image') : 'Login_BG.jpg'))); ?>" />

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-end">
                <button type="submit" name="btnAdd" value="btnAdd"
                    class="btn btn-primary me-1 mb-1"><?php echo e(__('Save')); ?></button>
            </div>

            </div>

        </form>

    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script type="text/javascript">
        $(document).on('click', '#favicon_icon', function(e) {

            $('.favicon_icon').hide();

        });
        $(document).on('click', '#company_logo', function(e) {

            $('.company_logo').hide();

        });
        $(document).on('click', '#login_image', function(e) {

            $('.login_image').hide();

        });




        const checkboxes = document.querySelectorAll('input[type=checkbox][role=switch][name=op]', );
        checkboxes.forEach((checkbox) => {
            checkbox.addEventListener('change', (event) => {
                if (event.target.checked) {
                    checkboxes.forEach((checkbox) => {
                        if (checkbox !== event.target) {
                            checkbox.checked = false;

                            $("#switch_paypal_gateway").is(':checked') ? $("#paypal_gateway").val(
                                    1) : $("#paypal_gateway")
                                .val(0);

                            $("#switch_paypal_gateway").is(':checked') ? $("#lbl_paypal").text(
                                    "Enable") : $("#lbl_paypal")
                                .text("Disable");

                            $("#switch_razorpay_gateway").is(':checked') ? $("#razorpay_gateway")
                                .val(1) : $("#razorpay_gateway")
                                .val(0);
                            $("#switch_razorpay_gateway").is(':checked') ? $("#lbl_razorpay").text(
                                    "Enable") : $("#lbl_razorpay")
                                .text("Disable");

                            $("#switch_paystack_gateway").is(':checked') ? $("#lbl_paystack").text(
                                    "Enable") : $("#lbl_paystack")
                                .text("Disable");
                            $("#switch_paystack_gateway").is(':checked') ? $("#paystack_gateway")
                                .val(1) : $("#paystack_gateway")
                                .val(0);



                            $("#switch_stripe_gateway").is(':checked') ? $("#lbl_stripe").text(
                                    "Enable") : $("#lbl_stripe")
                                .text("Disable");
                            $("#switch_stripe_gateway").is(':checked') ? $("#stripe_gateway")
                                .val(1) : $("#stripe_gateway")
                                .val(0);

                        }
                    });
                }
            });
        });



        // $("#switch_seo_settings").on('change', function() {
        //     $("#switch_seo_settings").is(':checked') ? $("#seo_settings").val(1) : $("#seo_settings")
        //         .val(0);
        // });

        $("#switch_svg_clr").on('change', function() {
            $("#switch_svg_clr").is(':checked') ? $("#svg_clr").val(1) : $("#svg_clr")
                .val(0);
        });


        $("#switch_force_update").on('change', function() {
            $("#switch_force_update").is(':checked') ? $("#force_update").val(1) : $("#force_update")
                .val(0);
        });
        $("#switch_number_with_suffix").on('change', function() {
            $("#switch_number_with_suffix").is(':checked') ? $("#number_with_suffix").val(1) : $(
                    "#number_with_suffix")
                .val(0);
        });
        $("#switch_sandbox_mode").on('change', function() {
            $("#switch_sandbox_mode").is(':checked') ? $("#sandbox_mode").val(1) : $("#sandbox_mode")
                .val(0);
        });
        $("#switch_paypal_gateway").on('change', function() {

            $("#switch_paypal_gateway").is(':checked') ? $("#paypal_gateway").val(1) : $("#paypal_gateway")
                .val(0);

            $("#switch_paypal_gateway").is(':checked') ? $("#lbl_paypal").text("Disable") : $("#lbl_paypal")
                .text("Enable");
        });
        $("#switch_razorpay_gateway").on('change', function() {

            $("#switch_razorpay_gateway").is(':checked') ? $("#razorpay_gateway").val(1) : $("#razorpay_gateway")
                .val(0);

            $("#switch_razorpay_gateway").is(':checked') ? $("#lbl_razorpay").text("Disable") : $("#lbl_razorpay")
                .text("Enable");
        });




        $("#switch_stripe_gateway").on('change', function() {

            $("#switch_stripe_gateway").is(':checked') ? $("#stripe_gateway").val(1) : $("#stripe_gateway")
                .val(0);

            $("#switch_stripe_gateway").is(':checked') ? $("#lbl_stripe").text("Disable") : $("#lbl_stripe")
                .text("Enable");
        });


        $("#switch_paystack_gateway").on('change', function() {

            $("#switch_paystack_gateway").is(':checked') ? $("#paystack_gateway").val(1) : $("#paystack_gateway")
                .val(0);

            $("#switch_paystack_gateway").is(':checked') ? $("#lbl_paystack").text("Disable") : $("#lbl_paystack")
                .text("Enable");
        });

        function hexToRgb(hex) {
            const bigint = parseInt(hex.slice(1), 16);
            const r = (bigint >> 16) & 255;
            const g = (bigint >> 8) & 255;
            const b = bigint & 255;
            return `rgb(${r}, ${g}, ${b},0.15)`;
        }


        const colorForm = document.getElementById("setting_form");
        const systemColorInput = document.getElementById("systemColor");

        const hiddenRGBAInput = document.getElementById("hiddenRGBA");


        systemColorInput.addEventListener("change", function() {
            const selectedColor = systemColorInput.value;
            const alpha = 0.15; // You can adjust the alpha value as needed (1 for fully opaque)
            const rgba = hexToRgb(selectedColor);
            hiddenRGBAInput.value = rgba; // Update the hidden input with the new RGBA value
        });



        $(document).ready(function() {

            var companyname = $('#company_name').val();
            sessionStorage.setItem('comapanyname', $('#company_name').val());
            const newValue = `"${companyname}"`;
            const rgba = hexToRgb(systemColorInput.value);
            hiddenRGBAInput.value = rgba;
        });

        $('.fav_icon_btn').click(function() {
            $('#fav_image').click();


        });
        fav_image.onchange = evt => {
            const [file] = fav_image.files
            console.log(file);
            if (file) {
                blah_fav.src = URL.createObjectURL(file)

            }
        }
        $('.btn_comapany_logo').click(function() {
            $('#company_logo').click();


        });
        company_logo.onchange = evt => {
            const [file] = company_logo.files
            console.log(file);
            if (file) {
                blah_comapany_logo.src = URL.createObjectURL(file)

            }
        }



        $('.btn_login_image').click(function() {
            $('#login_image').click();


        });
        login_image.onchange = evt => {
            const [file] = login_image.files
            console.log(file);
            if (file) {
                blah_login_image.src = URL.createObjectURL(file)

            }
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wrteam-dev/ebroker/resources/views/settings/system-settings.blade.php ENDPATH**/ ?>