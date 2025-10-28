<?php $__env->startSection('title'); ?>
    <?php echo e(__('Project')); ?>

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

            <div class="card-body">

                <div class="row " id="toolbar">

                    <div class="col-sm-6">

                        <select class="form-select form-control-sm" id="filter_category">
                            <option value=""><?php echo e(__('Select Category')); ?></option>
                            <?php if(isset($category)): ?>
                                <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($row->id); ?>"><?php echo e($row->category); ?> </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </select>
                    </div>
                    <div class="col-sm-6">

                        <select id="status" class="form-select form-control-sm">
                            <option value=""><?php echo e(__('Select Status')); ?> </option>
                            <option value="0"><?php echo e(__('InActive')); ?></option>
                            <option value="1"><?php echo e(__('Active')); ?></option>
                        </select>
                    </div>

                </div>

                <div class="row">
                    <div class="col-12">
                        <table class="table table-borderless" aria-describedby="mydesc" class='table-striped'
                            id="table_list" data-toggle="table" data-url="<?php echo e(route('project.show', 1)); ?>"
                            data-click-to-select="true" data-side-pagination="server" data-pagination="true"
                            data-page-list="[5, 10, 20, 50, 100, 200,All]" data-search="true" data-search-align="right"
                            data-toolbar="#toolbar" data-show-columns="true" data-show-refresh="true"
                            data-fixed-columns="true" data-fixed-number="1" data-fixed-right-number="1"
                            data-trim-on-search="false" data-responsive="true" data-sort-name="id" data-sort-order="desc"
                            data-pagination-successively-size="3" data-query-params="queryParams">
                            <thead class="thead-dark">

                                <tr>
                                    <th scope="col" data-field="id" data-align="center" data-sortable="true">
                                        <?php echo e(__('ID')); ?></th>
                                    <th scope="col" data-field="customer.name" data-align="center" data-sortable="false">
                                        <?php echo e(__('Client Name')); ?></th>
                                    <th scope="col" data-field="customer.mobile" data-align="center"
                                        data-sortable="false">
                                        <?php echo e(__('Mobile')); ?>

                                    </th>

                                    <th scope="col" data-field="title" data-align="center" data-sortable="false">Title
                                    </th>

                                    <th scope="col" data-field="category.category" data-align="center"
                                        data-sortable="true">
                                        <?php echo e(__('Category')); ?></th>
                                    <th scope="col" data-field="type" data-align="center" data-sortable="true">
                                        <?php echo e(__('Type')); ?></th>

                                    <th scope="col" data-field="image" data-align="center"
                                        data-formatter="imageFormatter" data-sortable="false">
                                        <?php echo e(__('Image')); ?></th>

                                    <th scope="col" data-field="status" data-sortable="false" data-align="center"
                                        data-formatter="status_switch" data-width="5%">
                                        <?php echo e(__('Enable/Disable')); ?></th>

                                    <th scope="col" data-field="action" data-align="center" data-sortable="false"
                                        data-events="actionEvents">
                                        <?php echo e(__('Documents/Images')); ?></th>

                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div id="editModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
            aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title" id="myModalLabel1"><?php echo e(__('Documents / Images')); ?></h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h3>Images</h3>

                        <div class="row gallary_images">

                        </div>
                        <hr>
                        <h3 class="mt-4">Documents</h3>
                        <hr>
                        <div class="row documents"></div>
                        <hr>

                        <h3 class="mt-4">Floor Plans</h3>
                        <hr>
                        <div class="row plans"></div>

                    </div>

                </div>

            </div>

        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        $('#status').on('change', function() {
            $('#table_list').bootstrapTable('refresh');

        });

        $('#filter_category').on('change', function() {
            $('#table_list').bootstrapTable('refresh');

        });


        $(document).ready(function() {
            var params = new window.URLSearchParams(window.location.search);
            if (params.get('status') != 'null') {
                $('#status').val(params.get('status')).trigger('change');
            }
            if (params.get('type') != 'null') {
                $('#type').val(params.get('type'));
            }
        });


        function queryParams(p) {

            return {
                sort: p.sort,
                order: p.order,
                offset: p.offset,
                limit: p.limit,
                search: p.search,
                status: $('#status').val(),
                // type: $('#type').val(),
                category: $('#filter_category').val(),
                // customer_id: $('#customerid').val(),
            };
        }

        window.actionEvents = {
            'click .edit_btn': function(e, value, row, index) {
                $('.gallary_images').empty();
                $('.documents').empty();
                $('.plans').empty();
                console.log(row.gallary_images);
                $.each(row.gallary_images, function(key, value) {
                    $('.gallary_images').append(






                        '<div class="col-md-2 col-sm-12 mt-2 ml-2"><img src=' + value.name +
                        ' height="100" width="100"></img></div>');
                });

                $.each(row.documents, function(key, value) {
                    var url = value.name; // Your URL
                    var filename = url.split('/').pop();
                    console.log(filename);

                    $('.documents').append(


                        '<div class="col-md-3 col-sm-12 mt-2 ml-2">' +
                        '<div class="doc_card">' +
                        '<div class="img"><a href=' + value.name +
                        ' target="_blank"><i class="bi bi-eye"  style="color:white;"></i></a></div>' +
                        '<div class="textBox">' + filename +


                        '<div>' +
                        '</div></div></div></div>'

                    );
                });


                $.each(row.plans, function(key, value) {
                    var url = value.title; // Your URL
                    var filename = url.split('/').pop();
                    console.log(filename);

                    $('.plans').append(


                        '<div class="col-md-3 col-sm-12 mt-2 ml-2">' +
                        '<div class="doc_card">' +
                        '<div class="img"><a href=' + value.document +
                        ' target="_blank"><i class="bi bi-eye"  style="color:white;"></i></a></div>' +
                        '<div class="textBox">' + filename +


                        '<div>' +
                        '</div></div></div></div>'




                    );
                });






            }
        }

        // function chk1(checkbox) {

        //     if (checkbox.checked) {

        //         active(event.target.id, 1);

        //     } else {

        //         active(event.target.id, 0);

        //     }
        // }

        // function active(id, value) {

        //     $.ajax({
        //         url: "<?php echo e(route('updateProjectStatus')); ?>",
        //         type: "POST",
        //         data: {
        //             '_token': "<?php echo e(csrf_token()); ?>",
        //             "id": id,
        //             "status": value,
        //         },
        //         cache: false,
        //         success: function(result) {

        //             if (result.error == false) {
        //                 Toastify({
        //                     text: result.message,
        //                     duration: 6000,
        //                     close: !0,
        //                     backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)"
        //                 }).showToast();
        //                 $('#table_list').bootstrapTable('refresh');
        //             } else {
        //                 Toastify({
        //                     text: "Something Went Wrong",
        //                     duration: 6000,
        //                     close: !0,
        //                     backgroundColor: '#dc3545'
        //                 }).showToast();
        //                 $('#table_list').bootstrapTable('refresh');
        //             }
        //         },
        //         error: function(error) {

        //         }
        //     });
        // }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wrteam-dev/ebroker/resources/views/project/index.blade.php ENDPATH**/ ?>