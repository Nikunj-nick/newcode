<?php $__env->startSection('title'); ?>
    <?php echo e(__('Property')); ?>

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
            <?php if(has_permissions('create', 'property')): ?>
                <div class="card-header">

                    <div class="row ">
                        <div class="col-12 col-xs-12 d-flex justify-content-end">

                            <?php echo Form::open(['route' => 'property.create']); ?>

                            <?php echo e(method_field('get')); ?>

                            <?php echo e(Form::submit(__('Add Property'), ['class' => 'btn btn-primary'])); ?>

                            <?php echo Form::close(); ?>

                        </div>

                    </div>
                </div>
            <?php endif; ?>

            <hr>
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
                            id="table_list" data-toggle="table" data-url="<?php echo e(url('getPropertyList')); ?>"
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
                                    <th scope="col" data-field="added_by" data-align="center" data-sortable="false">
                                        <?php echo e(__('Client Name')); ?></th>
                                    <th scope="col" data-field="mobile" data-align="center" data-sortable="false">
                                        <?php echo e(__('Mobile')); ?>

                                    </th>
                                    <th scope="col" data-field="client_address" data-align="center"
                                        data-sortable="false"><?php echo e(__('Client Address')); ?></th>
                                    <th scope="col" data-field="title" data-align="center" data-sortable="false">Title
                                    </th>
                                    <th scope="col" data-field="address" data-align="center" data-sortable="false">
                                        <?php echo e(__('Address')); ?></th>

                                    <th scope="col" data-field="category.category" data-align="center"
                                        data-sortable="true">
                                        <?php echo e(__('Category')); ?></th>
                                    <th scope="col" data-field="propery_type" data-formatter="property_type"
                                        data-align="center" data-sortable="true">
                                        <?php echo e(__('Type')); ?></th>
                                    <th scope="col" data-field="status" data-align="center" data-sortable="false">
                                        <?php echo e(__('Status')); ?></th>
                                    <th scope="col" data-field="title_image" data-formatter="imageFormatter"
                                        data-align="center" data-sortable="false">
                                        <?php echo e(__('Image')); ?></th>
                                    <th scope="col" data-field="3d_image" data-formatter="imageFormatter"
                                        data-align="center" data-sortable="false">
                                        <?php echo e(__('3D Image')); ?></th>
                                    <th scope="col" data-field="interested_users" data-align="center"
                                        data-sortable="false" data-events="actionEvents">
                                        <?php echo e(__('Total Interested Users')); ?></th>
                                    <th scope="col" data-field="status" data-sortable="false" data-align="center"
                                        data-width="5%" data-formatter="status_switch">
                                        <?php echo e(__('Enable/Disable')); ?></th>

                                    <th scope="col" data-field="is_premium" data-formatter="premium_status_switch"
                                        data-align="center" data-sortable="false">
                                        <?php echo e(__('Private/Public')); ?></th>

                                    <?php if(has_permissions('update', 'property_inquiry')): ?>
                                        <th scope="col" data-field="operate" data-align="center"
                                            data-sortable="false">
                                            <?php echo e(__('Action')); ?></th>
                                    <?php endif; ?>

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
                        <h6 class="modal-title" id="myModalLabel1"><?php echo e(__('Interested Users')); ?></h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <table class="table table-borderless" aria-describedby="mydesc" class='table-striped'
                            id="customer_table_list" data-toggle="table" data-url="<?php echo e(url('customerList')); ?>"
                            data-click-to-select="true" data-side-pagination="server" data-pagination="true"
                            data-page-list="[5, 10, 20, 50, 100, 200,All]" data-search="true" data-show-columns="true"
                            data-show-refresh="true" data-fixed-columns="true" data-fixed-number="1"
                            data-fixed-right-number="1" data-trim-on-search="false" data-responsive="true"
                            data-sort-name="id" data-sort-order="desc" data-pagination-successively-size="3"
                            data-query-params="customerqueryParams" data-show-export="true"
                            data-export-options='{ "fileName": "data-list-<?= date(' d-m-y') ?>"
                            }'>
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col" data-field="id" data-sortable="true" data-align="center">
                                        <?php echo e(__('ID')); ?></th>
                                    <th scope="col" data-field="profile" data-sortable="false" data-align="center">
                                        <?php echo e(__('Profile')); ?></th>
                                    <th scope="col" data-field="name" data-sortable="true" data-align="center">
                                        <?php echo e(__('Name')); ?></th>
                                    <th scope="col" data-field="mobile" data-sortable="true" data-align="center">
                                        <?php echo e(__('Number')); ?></th>
                                    <th scope="col" data-field="email" data-sortable="false" data-align="center">
                                        <?php echo e(__('Email')); ?></th>

                                </tr>
                            </thead>
                        </table>
                    </div>

                </div>

            </div>

        </div>
        <input type="hidden" id="property_id">

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
            'click .editdata': function(e, value, row, index) {

                $('#property_id').val(row.id);
                $('#customer_table_list').bootstrapTable('refresh');

            }
        }

        function customerqueryParams(p) {

            return {
                sort: p.sort,
                order: p.order,
                offset: p.offset,
                limit: p.limit,
                search: p.search,
                property_id: $('#property_id').val(),
            };
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wrteam-dev/ebroker/resources/views/property/index.blade.php ENDPATH**/ ?>