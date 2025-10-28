<?php $__env->startSection('title'); ?>
    <?php echo e(__('Send Notification')); ?>

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
    <div class="row">

        <section class="section">

            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <form action="<?php echo e(route('notification.store')); ?>" class="needs-validation" method="post"
                            data-parsley-validate enctype="multipart/form-data">

                            <?php echo e(csrf_field()); ?>


                            <div class="card-body">
                                <textarea id="user_id" name="user_id" style="display: none"></textarea>
                                <textarea id="fcm_id" name="fcm_id" style="display: none"></textarea>

                                <input type="hidden" name="type" value="0">
                                <div class="form-group row">
                                    <div class="col-md-12 col-sm-12">
                                        <label class="form-label"><?php echo e(__('Select User')); ?></label>
                                        <select id="send_type" name="send_type" class="form-control choosen-select w-100"
                                            required>
                                            <option value="1"><?php echo e(__('All')); ?></option>
                                            <option value="0"><?php echo e(__('Selected Only')); ?></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12 col-sm-12">
                                        <label class="form-label"><?php echo e(__('Title')); ?> </label> <span
                                            class="text-danger">*</span>
                                        <input name="title" type="text" class="form-control"
                                            placeholder=<?php echo e(__('Title')); ?> required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label class="form-label"><?php echo e(__('Message')); ?></label> <span
                                            class="text-danger">*</span>
                                        <textarea name="message" class="form-control" placeholder=<?php echo e(__('Message')); ?> required></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-check">
                                            <input id="include_image" name="include_image" type="checkbox"
                                                class="form-check-input">
                                            <label class="form-check-label"><?php echo e(__('Include Image')); ?></label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row" id="show_image" style="display: none">
                                    <div class="col-md-12 col-sm-12">
                                        <label class="form-label"><?php echo e(__('Image')); ?></label>
                                        <input id="file" name="file" type="file" accept="image/*"
                                            class="form-control">
                                        <p style="display: none" id="img_error_msg" class="badge rounded-pill bg-danger">
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12 form-group">
                                    <label class="form-label">Property</label>
                                    <!--<span class="text-danger">*</span>-->

                                    <select name="property" class="choosen-select form-select form-control-sm"
                                        data-parsley-minSelect='1' id="property">
                                        <option value="      "> <?php echo e(__('Select Option')); ?> </option>
                                        <?php $__currentLoopData = $property_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($row->id); ?>" data-parametertypes='<?php echo e($row->name); ?>'>
                                                <?php echo e($row->title); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </select>

                                    <?php $__errorArgs = ['email'];
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
                                </div>
                                <div class="col-md-12 d-flex justify-content-end">
                                    <button class="btn btn-primary" type="submit"
                                        name="submit"><?php echo e(__('Submit')); ?></button>
                                </div>
                            </div>

                            

                            
                        </form>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">

                        <div class="card-body">

                            <div class="row">
                                <div class="col-12">
                                    <table class="table table-borderless" aria-describedby="mydesc" class='table-striped'
                                        id="users_list" data-toggle="table" data-url="<?php echo e(url('customerList')); ?>"
                                        data-click-to-select="true" data-side-pagination="server" data-pagination="true"
                                        data-page-list="[5, 10, 20, 50, 100, 200,All]" data-search="true"
                                        data-toolbar="#toolbar" data-show-columns="true" data-show-refresh="true"
                                        data-fixed-columns="true" data-fixed-number="1" data-fixed-right-number="1"
                                        data-trim-on-search="false" data-responsive="true" data-sort-name="id"
                                        data-sort-order="desc" data-pagination-successively-size="3"
                                        data-query-params="queryParams_1" data-response-handler="responseHandler">
                                        <thead class="thead-dark">

                                            <tr>
                                                <th scope="col" data-field="state" data-checkbox="true"></th>
                                                <th scope="col" data-field="id" data-sortable="true">
                                                    <?php echo e(__('ID')); ?></th>
                                                <th scope="col" data-field="name" data-sortable="true">
                                                    <?php echo e(__('Name')); ?></th>
                                                <th scope="col" data-field="mobile" data-sortable="true">
                                                    <?php echo e(__('Number')); ?></th>

                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="card">

                <div class="card-body">

                    <div class="row">
                        <div class="col-12">
                            <div id="toolbar">
                                <button class="btn btn-danger btn-sm btn-icon text-white" id="delete_multiple"
                                    title="Delete Notification"><em class='fa fa-trash'></em></button>
                            </div>
                            <table aria-describedby="mydesc" class='table-striped' id="table_list1" data-toggle="table"
                                data-url="<?php echo e(url('notificationList')); ?>" data-click-to-select="true"
                                data-side-pagination="server" data-pagination="true"
                                data-page-list="[5, 10, 20, 50, 100, 200]" data-search="true" data-toolbar="#toolbar"
                                data-show-columns="true" data-show-refresh="true" data-fixed-columns="true"
                                data-fixed-number="1" data-fixed-right-number="1" data-trim-on-search="false"
                                data-responsive="true" data-sort-name="id" data-sort-order="desc"
                                data-pagination-successively-size="3">
                                <thead>
                                    <tr>
                                        <th scope="col" data-field="state" data-checkbox="true"></th>
                                        <th scope="col" data-field="id" data-sortable="true"><?php echo e(__('ID')); ?></th>
                                        <th scope="col" data-field="title" data-sortable="true"><?php echo e(__('Title')); ?>

                                        </th>
                                        <th scope="col" data-field="message" data-sortable="true"><?php echo e(__('Message')); ?>

                                        </th>
                                        <th scope="col" data-field="image" data-sortable="false"
                                            data-formatter="imageFormatter"><?php echo e(__('Image')); ?>

                                        </th>
                                        <th scope="col" data-field="type" data-sortable="true"><?php echo e(__('Type')); ?>

                                        </th>
                                        <th scope="col" data-field="send_type" data-sortable="true">
                                            <?php echo e(__('Message Type')); ?></th>
                                        <th scope="col" data-field="operate" data-sortable="false"
                                            data-events="actionEvents"><?php echo e(__('Action')); ?></th>
                                    </tr>
                                </thead>
                            </table>

                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.11/lodash.min.js"></script>

    <script type="text/javascript">
        table = $('#users_list');
        var fcm_list = [];
        var user_list = [];
        $(table).on('check.bs.table  uncheck.bs.table', function(e, row, rowsAfter) {
            var rows = rowsAfter

            if (e.type === 'uncheck-all') {
                rows = rowsBefore
            }

            var ids = $.map(!$.isArray(rows) ? [rows] : rows, function(row) {
                return row.id
            })

            var func = $.inArray(e.type, ['check', 'check-all']) > -1 ? 'union' : 'difference'
            selections = window._[func](selections, ids)
            var fcm_id = row.fcm_id;
            var user_id = row.id;


            if (e.type == 'check') {
                fcm_list.push(fcm_id);
                user_list.push(user_id);
            } else {
                var fcm_index = fcm_list.indexOf(fcm_id);
                if (fcm_index > -1) {
                    fcm_list.splice(fcm_index, 1);
                }
                var user_index = user_list.indexOf(user_id);
                if (user_index > -1) {
                    user_list.splice(user_index, 1);
                }
            }
            $('textarea#fcm_id').val(fcm_list);
            $('textarea#user_id').val(user_list);

        });

        window.actionEvents = {};

        function queryParams_1(p) {
            return {
                "status": $('#filter_status').val(),
                sort: p.sort,
                order: p.order,
                offset: p.offset,
                limit: p.limit,
                search: p.search
            };
        }

        function queryParams(p) {
            return {
                sort: p.sort,
                order: p.order,
                offset: p.offset,
                limit: p.limit,
                search: p.search
            };
        }
    </script>

    <script>
        $("#include_image").change(function() {
            if (this.checked) {
                $('#show_image').show('fast');
                $('#file').attr('required', 'required');
            } else {
                $('#file').val('');
                $('#file').removeAttr('required');
                $('#show_image').hide('fast');
            }
        });
    </script>

    <script type="text/javascript">
        var _URL = window.URL || window.webkitURL;

        $("#file").change(function(e) {
            var file, img;

            if ((file = this.files[0])) {
                img = new Image();
                img.onerror = function() {
                    $('#file').val('');
                    $('#img_error_msg').html('<?php echo e(trans('message.invalid_image_type')); ?>');
                    $('#img_error_msg').show().delay(3000).fadeOut();
                };
                img.src = _URL.createObjectURL(file);
            }
        });
    </script>

    <script type="text/javascript">
        $(document).on('click', '.delete-data', function() {
            if (confirm('Are you sure? Want to delete ?')) {
                var id = $(this).data("id");
                var image = $(this).data("image");
                $.ajax({
                    url: "<?php echo e(url('notification-delete')); ?>",
                    type: "GET",
                    data: {
                        id: id,
                        image: image
                    },
                    success: function(result) {
                        if (result.error) {
                            Toastify({
                                text: "Something Went Wrong",
                                duration: 6000,
                                close: !0,
                                backgroundColor: '#dc3545'
                            }).showToast();
                        } else {
                            $('#table_list1').bootstrapTable('refresh');
                            Toastify({
                                text: result.message,
                                duration: 6000,
                                close: !0,
                                backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)"
                            }).showToast();
                        }
                    }
                });
            }
        });
    </script>

    <script type="text/javascript">
        $('#delete_multiple').on('click', function(e) {
            table = $('#table_list1');
            delete_button = $('#delete_multiple');
            selected = table.bootstrapTable('getSelections');
            ids = "";
            $.each(selected, function(i, e) {
                ids += e.id + ",";
            });
            ids = ids.slice(0, -1);
            if (ids == "") {
                alert('please Select Some Data');
            } else {
                if (confirm('Are You Sure Delete Selected Data')) {
                    $.ajax({
                        url: "<?php echo e(url('notification-multiple-delete')); ?>",
                        type: "POST",
                        data: {
                            "_token": "<?php echo e(csrf_token()); ?>",
                            id: ids
                        },
                        beforeSend: function() {
                            delete_button.html('<em class="fa fa-spinner fa-pulse"></em>');
                        },
                        success: function(result) {
                            if (result.error) {
                                Toastify({
                                    text: "Something Went Wrong",
                                    duration: 6000,
                                    close: !0,
                                    backgroundColor: '#dc3545'
                                }).showToast();
                            } else {
                                delete_button.html('<em class="fa fa-trash"></em>');
                                $('#table_list1').bootstrapTable('refresh');
                                Toastify({
                                    text: result.message,
                                    duration: 6000,
                                    close: !0,
                                    backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)"
                                }).showToast();
                                $('#table_list').bootstrapTable('refresh');
                            }
                        }
                    });
                }
            }
        });


        var $table = $('#users_list')
        var selections = []

        function responseHandler(res) {
            $.each(res.rows, function(i, row) {
                row.state = $.inArray(row.id, selections) !== -1
            })
            return res
        }

        $(function() {
            $table.on('check.bs.table check-all.bs.table uncheck.bs.table uncheck-all.bs.table',
                function(e, rowsAfter, rowsBefore) {
                    var rows = rowsAfter

                    if (e.type === 'uncheck-all') {
                        rows = rowsBefore
                    }

                    var ids = $.map(!$.isArray(rows) ? [rows] : rows, function(row) {
                        return row.id
                    })

                    var func = $.inArray(e.type, ['check', 'check-all']) > -1 ? 'union' : 'difference'
                    selections = window._[func](selections, ids)
                })
        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wrteam-dev/ebroker/resources/views/notification/index.blade.php ENDPATH**/ ?>