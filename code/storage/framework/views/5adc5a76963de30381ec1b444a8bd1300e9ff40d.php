<?php $__env->startSection('title'); ?>
    <?php echo e(__('Packages')); ?>

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
        <div class="row">
            <div class="col-md-4">
                <div class="card">

                    <div class="card">
                        <?php echo Form::open(['route' => 'package.store', 'data-parsley-validate', 'files' => true]); ?>

                        <div class="card-body">

                            <div class="row ">

                                <div class="col-md-12 col-12 form-group mandatory">

                                    <?php echo e(Form::label('name', __('Name'), ['class' => 'form-label col-12 '])); ?>

                                    <?php echo e(Form::text('name', '', [
                                        'class' => 'form-control ',
                                        'placeholder' => 'Package Name',
                                        'data-parsley-required' => 'true',
                                        'id' => 'name',
                                    ])); ?>


                                </div>
                                <div class="col-md-12 col-12 form-group">

                                    <?php echo e(Form::label('ios_product_id', __('IOS Product ID'), ['class' => 'form-label col-12 '])); ?>

                                    <?php echo e(Form::text('ios_product_id', '', [
                                        'class' => 'form-control ',
                                        'placeholder' => 'IOS Product ID',
                                        'id' => 'ios_product_id',
                                    ])); ?>


                                </div>
                                <div class="col-md-12 col-12 form-group mandatory">

                                    <?php echo e(Form::label('duration', __('Duration'), ['class' => 'form-label col-12 '])); ?>

                                    <?php echo e(Form::number('duration', '', [
                                        'class' => 'form-control ',
                                        'placeholder' => 'Duration   (in days)',
                                        'data-parsley-required' => 'true',
                                        'id' => 'duration',
                                        'min' => '1',
                                    ])); ?>


                                </div>
                                <div class="col-md-12 col-12 form-group mandatory">

                                    <?php echo e(Form::label('price', __('price') . '(' . $currency_symbol . ')', [
                                        'class' => 'form-label col-12 ',
                                    ])); ?>

                                    <?php echo e(Form::number('price', '', [
                                        'class' => 'form-control ',
                                        'placeholder' => 'Package Price',
                                        'data-parsley-required' => 'true',
                                        'id' => 'price',
                                        'min' => '0',
                                         'step' => '0.01'
                                    ])); ?>


                                </div>

                                <div class="col-sm-12 col-md-12 form-group mandatory">

                                    <?php echo e(Form::label('price', __('Type'), ['class' => 'form-label col-12 '])); ?>


                                    <input type="radio" id="package_type" name="package_type" value="product_listing"
                                        required>
                                    <label for="type"><?php echo e(__('Product List and Promote')); ?></label>

                                    <input type="radio" id="package_type" name="package_type" value="premium_user"
                                        required>
                                    <label for="type"><?php echo e(__('Premium User')); ?></label>

                                </div>
                                <div class="limitations col-md-12">

                                    <div id="property_limitation" class="col-md-12 col-sm-12 form-group">
                                        <?php echo e(Form::label('price', __('Property'), ['class' => 'form-label col-12 '])); ?>


                                        <input type="radio" id="add_property" name="typep" value="add_limited_property">
                                        <label for="age1"><?php echo e(__('Limited')); ?></label>

                                        <input type="radio" id="add_property" name="typep"
                                            value="add_unlimited_property">
                                        <label for="age1"><?php echo e(__('Unlimited')); ?></label>

                                    </div>
                                    <div id="limitation_for_property" class="col-md-12 col-sm-12 form-group">
                                        <?php echo e(Form::label('limit', __('Limit'), ['class' => 'form-label col-12 '])); ?>


                                        <?php echo e(Form::number('property_limit', '', [
                                            'class' => 'form-control',
                                            'type' => 'number',
                                            'min' => '1',
                                            'placeholder' => 'limitation',
                                            'id' => 'propertylimit',
                                            'min' => '1',
                                        ])); ?>


                                    </div>

                                    <div id="advertisement_limitation" class="col-md-12 col-sm-12 form-group">
                                        <?php echo e(Form::label('price', __('Advertisement'), ['class' => 'form-label col-12'])); ?>


                                        <input type="radio" id="add_advertisement" name="typel"
                                            value="add_limited_advertisement">
                                        <label for="age1"><?php echo e(__('Limited')); ?></label>

                                        <input type="radio" id="add_advertisement" name="typel"
                                            value="add_unlimited_advertisement">
                                        <label for="age1"><?php echo e(__('Unlimited')); ?></label>

                                    </div>

                                    <div id="limitation_for_advertisement" class="col-md-12 col-sm-12 form-group">

                                        <?php echo e(Form::label('limit', __('Limit'), ['class' => 'form-label col-12 '])); ?>


                                        <?php echo e(Form::number('advertisement_limit', '', [
                                            'class' => 'form-control ',
                                            'type' => 'number',
                                            'min' => '1',
                                            'placeholder' => 'limitation ',
                                            'id' => 'advertisementlimit',
                                            'min' => '1',
                                        ])); ?>


                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-12 text-end form-group pt-4">

                                <?php echo e(Form::submit('Add Package', ['class' => 'center btn btn-primary', 'style' => 'width:200'])); ?>


                            </div>

                        </div>
                        <?php echo Form::close(); ?>

                    </div>

                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-12">

                                <table class="table table-borderless" aria-describedby="mydesc" class='table-striped'
                                    id="table_list" data-toggle="table" data-url="<?php echo e(url('package_list')); ?>"
                                    data-click-to-select="true" data-side-pagination="server" data-pagination="true"
                                    data-page-list="[5, 10, 20, 50, 100, 200,All]" data-search="true"
                                    data-search-align="right" data-toolbar="#toolbar" data-show-columns="true"
                                    data-show-refresh="true" data-fixed-columns="true" data-fixed-number="1"
                                    data-fixed-right-number="1" data-trim-on-search="false" data-responsive="true"
                                    data-sort-name="id" data-sort-order="desc" data-pagination-successively-size="3"
                                    data-query-params="queryParams">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col" data-field="id" data-align="center" data-sortable="true">
                                                <?php echo e(__('ID')); ?></th>
                                            <th scope="col" data-field="ios_product_id" data-align="center"
                                                data-sortable="true">
                                                <?php echo e(__('IOS Product ID')); ?>

                                            </th>

                                            <th scope="col" data-field="name" data-align="center" data-sortable="true">
                                                <?php echo e(__('Name')); ?>

                                            </th>

                                            <th scope="col" data-field="duration" data-align="center"
                                                data-sortable="false">
                                                <?php echo e(__('Duration')); ?></th>
                                            <th scope="col" data-field="price" data-align="center"
                                                data-sortable="false">
                                                <?php echo e(__(' Price')); ?>

                                            </th>
                                            <th scope="col" data-field="property_limit" data-align="center"
                                                data-sortable="false">
                                                <?php echo e(__('Limit For Property')); ?>

                                            </th>
                                            <th scope="col" data-field="advertisement_limit" data-align="center"
                                                data-sortable="false">
                                                <?php echo e(__('Limit For Advertisement')); ?>

                                            </th>

                                            <th scope="col" data-field="status" data-sortable="false"
                                                data-align="center" data-width="5%" data-formatter="status_switch">
                                                <?php echo e(__('Enable/Disable')); ?></th>

                                            <th scope="col" data-field="operate" data-align="center"
                                                data-sortable="false" data-events="actionEvents">
                                                <?php echo e(__(' Action')); ?></th>

                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <!-- EDIT MODEL MODEL -->
        <div id="editModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel1"><?php echo e(__('Edit Package')); ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <form action="<?php echo e(url('package-update')); ?>" class="form-horizontal" enctype="multipart/form-data"
                            method="POST" data-parsley-validate>

                            <?php echo e(csrf_field()); ?>


                            <input type="hidden" id="edit_id" name="edit_id">
                            <div class="row">
                                <div class="col-sm-12">

                                    <div class="form-group mandatory">
                                        <label for="edit_name" class="form-label col-12 "><?php echo e(__('Name')); ?></label>
                                        <input type="text" id="edit_name" class="form-control col-12"
                                            placeholder="Name" name="edit_name" data-parsley-required="true">
                                    </div>

                                </div>
                                <div class="col-sm-12">

                                    <div class="form-group">
                                        <label for="edit_ios_product_id" class="form-label col-12 "><?php echo e(__('IOS Product ID')); ?></label>
                                        <input type="text" id="edit_ios_product_id" class="form-control col-12" placeholder="IOS Product ID" name="edit_ios_product_id">
                                    </div>

                                </div>

                                <div class="col-sm-12">

                                    <div class="form-group mandatory">
                                        <label for="edit_duration"
                                            class="form-label col-12 "><?php echo e(__('Duration')); ?></label>
                                        <input type="text" id="edit_duration" class="form-control col-12"
                                            placeholder="Name" name="edit_duration" min="1" required>

                                    </div>

                                </div>

                                <div class="col-sm-12">

                                    <div class="form-group mandatory">
                                        <label for="edit_price" class="form-label col-12 "><?php echo e(__('Price')); ?></label>
                                        <input type="text" id="edit_price" class="form-control col-12" min="0"
                                            placeholder="Name" name="edit_price" data-parsley-required="true">
                                    </div>

                                </div>
                                <div class="col-sm-12 col-12">
                                    <div class="form-group mandatory">
                                        <label for="email" class="form-label col-12 "><?php echo e(__('Status')); ?></label>
                                        <?php echo Form::select('status', ['0' => 'OFF', '1' => 'ON'], '', [
                                            'class' => 'form-select',
                                            'id' => 'status',
                                        ]); ?>


                                    </div>
                                </div>

                            </div>

                            <div class="col-sm-12 col-md-12 form-group mandatory">

                                <?php echo e(Form::label('price', __('Type'), ['class' => 'form-label col-12 '])); ?>


                                <input type="radio" id="package_type" name="edit_package_type" value="product_listing"
                                    required>
                                <label for="type"><?php echo e(__('Product List and Promote')); ?></label>

                                <input type="radio" id="package_type" name="edit_package_type" value="premium_user"
                                    required>
                                <label for="type"><?php echo e(__('Premium User')); ?></label>

                            </div>

                            <div class="edit_limitations col-md-12">

                                <div class="row">

                                    <?php echo e(Form::label('price', __('Property'), [
                                        'class' => 'form-label col-sm-12 col-md-12',
                                    ])); ?>


                                    <div class="col-sm-12 col-md-6 form-group mandatory" id="for_edit_property">

                                        <input type="radio" id="edit_property" name="edit_typep"
                                            value="edit_limited_property">
                                        <label for="age1"><?php echo e(__('Limited')); ?></label>

                                        <br>
                                        <input type="radio" id="edit_property" name="edit_typep"
                                            value="edit_unlimited_property">
                                        <label for="age1"><?php echo e(__('Unlimited')); ?></label>

                                    </div>

                                    <div class="col-sm-12 col-md-6" id="limitation_for_property">
                                        <div class="form-group">

                                            <?php echo e(Form::number('property_limit', '', [
                                                'class' => 'form-control ',
                                                'placeholder' => 'limitation',
                                                'id' => 'property_limit',
                                                'min' => 0,
                                            ])); ?>

                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <?php echo e(Form::label('price', __('Advertisement'), [
                                        'class' => 'form-label col-sm-12 col-md-12',
                                    ])); ?>


                                    <div class="col-sm-12 col-md-6 form-group mandatory" id="for_edit_advertisement">

                                        <input type="radio" id="edit_limited_advertisement" name="edit_typel"
                                            value="edit_limited_advertisement">
                                        <label for="age1"><?php echo e(__('Limited')); ?></label>
                                        <br>

                                        <input type="radio" id="edit_advertisement" name="edit_typel"
                                            value="edit_unlimited_advertisement">
                                        <label for="age1"><?php echo e(__('Unlimited')); ?></label>

                                    </div>

                                    <div class="col-sm-12 col-md-6 form-group " id="limitation_for_advertisement">

                                        <?php echo e(Form::number('advertisement_limit', '', [
                                            'class' => 'form-control ',
                                            'placeholder' => 'limitation ',
                                            'id' => 'advertisement_limit',
                                            'min' => 0,
                                        ])); ?>


                                    </div>
                                </div>
                            </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary waves-effect"
                            data-bs-dismiss="modal"><?php echo e(__('Close')); ?></button>

                        <button type="submit"
                            class="btn btn-primary waves-effect waves-light"><?php echo e(__('Save')); ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->

        <!-- /.modal-dialog -->
        <!-- EDIT MODEL -->
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        function queryParams(p) {

            return {
                sort: p.sort,
                order: p.order,
                offset: p.offset,
                limit: p.limit,
                search: p.search,

            };
        }

        function chk(checkbox) {
            console.log(event.target.id);
            if (checkbox.checked) {

                active(event.target.id);

            } else {

                disable(event.target.id);
            }
        }
        window.actionEvents = {
            'click .edit_btn': function(e, value, row, index) {
                console.log(row);
                $("#edit_id").val(row.id);
                $("#edit_ios_product_id").val(row.ios_product_id);
                $("#edit_name").val(row.name);
                $("#edit_duration").val(row.duration);
                $("#edit_price").val(row.price);
                if (row.type == "premium_user") {
                    $('input[type="radio"][name="edit_package_type"][value="premium_user"]').attr('checked', true);
                    $('.edit_limitations').hide();
                } else {
                    $('input[type="radio"][name="edit_package_type"][value="product_listing"]').attr('checked',
                        true);
                    $('.edit_limitations').show();



                }

                var status = $(row.status).text();

                if (status == "ON") {
                    $('option[value=1]').attr('selected', true);
                } else {
                    $('option[value=0]').attr('selected', true)
                }
                property_limit = row.property_limit;

                advertisement_limit = row.advertisement_limit;

                if (property_limit != "") {
                    console.log("property_limit" + property_limit);


                    $('input[type="radio"][name="edit_typep"][value="edit_limited_property"]').attr('checked',
                        true);
                    $('#property_limit').val(property_limit);

                    if (property_limit == "Not Available") {

                        $('#property_limit').val(0);
                    }
                    if (property_limit == "unlimited") {
                        $('input[type="radio"][name="edit_typep"][value="edit_unlimited_property"]').attr('checked',
                            true);
                        $('#property_limit').hide();


                    }
                } else {
                    $('#property_limit').val('');
                    $('input[type="radio"][name="edit_typep"][value="edit_limited_property"]').attr('checked',
                        false);

                    $('input[type="radio"][name="edit_typep"][value="edit_unlimited_property"]').attr('checked',
                        false);

                }

                if (advertisement_limit != "") {

                    $('input[type="radio"][name="edit_typel"][value="edit_limited_advertisement"]').attr('checked',
                        true);

                    $('#advertisement_limit').val(advertisement_limit);

                    if (advertisement_limit == "Not Available") {

                        $('#advertisement_limit').val(0);
                    }
                    if (advertisement_limit == "unlimited") {

                        $('input[type="radio"][name="edit_typel"][value="edit_unlimited_advertisement"]').attr(
                            'checked', true);
                        $('#advertisement_limit').hide();


                    }
                } else {
                    $('#advertisement_limit').val('');
                    $('input[type="radio"][name="edit_typel"][value="edit_limited_advertisement"]').attr('checked',
                        false);
                    $('input[type="radio"][name="edit_typel"][value="edit_unlimited_advertisement"]').attr(
                        'checked', false);

                }

                $('input[type="radio"][name="edit_typep"]').click(function() {

                    if ($(this).is(':checked')) {
                        if ($(this).val() == 'edit_limited_property') {
                            $('#property_limit').show();
                            $('#property_limit').val("").attr('required', 'true');

                        } else {
                            console.log("in else");
                            $('#property_limit').removeAttr('required');
                            $('#property_limit').hide();

                        }
                    }
                });
                $('input[type="radio"][name="edit_typel"]').click(function() {


                    if ($(this).is(':checked')) {
                        if ($(this).val() == 'edit_limited_advertisement') {
                            $('#advertisement_limit').show();

                            $('#advertisement_limit').val("").attr('required', 'true');
                        } else {
                            $('#advertisement_limit').removeAttr('required');
                            $('#advertisement_limit').hide();
                        }
                    }
                });


            }
        }
    </script>

    <script>
        window.onload = function() {

            $('#limitation_for_property').hide();

            $('#limitation_for_advertisement').hide();
            $('.limitations').hide();

        }


        $('input[type="radio"][name="package_type"]').click(function() {
            if ($(this).is(':checked')) {
                if ($(this).val() == 'product_listing') {
                    $('.limitations').show();
                } else {
                    $('.limitations').hide();

                }
            }

        });
        $('input[type="radio"][name="edit_package_type"]').click(function() {
            if ($(this).is(':checked')) {
                if ($(this).val() == 'product_listing') {
                    $('.edit_limitations').show();
                } else {
                    $('.edit_limitations').hide();

                }
            }

        });

        $('input[type="radio"][name="typep"]').click(function() {


            if ($(this).is(':checked')) {
                if ($(this).val() == 'add_limited_property') {
                    $('#limitation_for_property').show();
                    $('#propertylimit').attr('required', 'true');
                } else {
                    $('#limitation_for_property').hide();
                    $('#propertylimit').removeAttr('required');
                }
            }
        });
        $('input[type="radio"][name="typel"]').click(function() {

            if ($(this).is(':checked')) {
                if ($(this).val() == 'add_limited_advertisement') {

                    $('#limitation_for_advertisement').show();
                    $('#advertisementlimit').attr("required", "true");
                } else {
                    $('#limitation_for_advertisement').hide();
                    $('#advertisementlimit').removeAttr("required");
                }
            }
        });


        function disable(id) {
            $.ajax({
                url: "<?php echo e(route('package.updatestatus')); ?>",
                type: "POST",
                data: {
                    '_token': "<?php echo e(csrf_token()); ?>",
                    "id": id,
                    "status": 0,
                },
                cache: false,
                success: function(result) {

                    if (result.error == false) {
                        Toastify({
                            text: 'Package OFF successfully',
                            duration: 6000,
                            close: !0,
                            backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)"
                        }).showToast();
                        $('#table_list').bootstrapTable('refresh');
                    } else {
                        Toastify({
                            text: result.message,
                            duration: 6000,
                            close: !0,
                            backgroundColor: '#dc3545' //"linear-gradient(to right, #dc3545, #96c93d)"

                        }).showToast();
                        $('#table_list').bootstrapTable('refresh');
                    }

                },
                error: function(error) {

                }
            });
        }

        function active(id) {
            $.ajax({
                url: "<?php echo e(route('package.updatestatus')); ?>",
                type: "POST",
                data: {
                    '_token': "<?php echo e(csrf_token()); ?>",
                    "id": id,
                    "status": 1,
                },
                cache: false,
                success: function(result) {

                    if (result.error == false) {
                        Toastify({
                            text: 'Package ON successfully',
                            duration: 6000,
                            close: !0,
                            backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)"
                        }).showToast();
                        $('#table_list').bootstrapTable('refresh');
                    } else {
                        Toastify({
                            text: result.message,
                            duration: 6000,
                            close: !0,
                            backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)"
                        }).showToast();
                        $('#table_list').bootstrapTable('refresh');
                    }

                },
                error: function(error) {

                }
            });
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wrteam-dev/ebroker/resources/views/packages/index.blade.php ENDPATH**/ ?>