<?php $__env->startSection('title'); ?>
    <?php echo e(__('Advertisement')); ?>

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
                <div class="row">
                    <div class="col-12">
                        <table class="table table-borderless" aria-describedby="mydesc" class='table-striped' id="table_list"
                            data-toggle="table" data-url="<?php echo e(url('featured_properties_list')); ?>" data-click-to-select="true"
                            data-side-pagination="server" data-pagination="true"
                            data-page-list="[5, 10, 20, 50, 100, 200,All]" data-search="true" data-search-align="right"
                            data-toolbar="#toolbar" data-show-columns="true" data-show-refresh="true"
                            data-fixed-columns="true" data-fixed-number="1" data-fixed-right-number="1"
                            data-trim-on-search="false" data-responsive="true" data-sort-name="id" data-sort-order="desc"
                            data-pagination-successively-size="3" data-query-params="queryParams">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col" data-field="id" data-align="center" data-sortable="true">
                                        <?php echo e(__('ID')); ?></th>
                                    <th scope="col" data-field="type" data-align="center" data-sortable="false">
                                        <?php echo e(__('Type')); ?></th>
                                    <th scope="col" data-field="property.title_image" data-formatter="imageFormatter"
                                        data-align="center" data-sortable="false">
                                        <?php echo e(__('Image')); ?>

                                    </th>

                                    <th scope="col" data-field="start_date" data-align="center" data-sortable="false">
                                        <?php echo e(__('Start Date')); ?></th>

                                    <th scope="col" data-field="end_date" data-align="center" data-sortable="false">
                                        <?php echo e(__('End Date')); ?></th>

                                    <th scope="col" data-field="customer.name" data-align="center" data-sortable="true">
                                        <?php echo e(__('Customer Name')); ?></th>
                                    <th scope="col" data-field="customer.mobile" data-align="center" data-visible="false"
                                        data-sortable="false"><?php echo e(__('Customer Contact')); ?></th>
                                    <th scope="col" data-field="user_email" data-align="center" data-visible="false"
                                        data-sortable="false"><?php echo e(__('Customer Email')); ?></th>

                                    <th scope="col" data-field="status" data-align="center" data-sortable="false">
                                        <?php echo e(__('Status')); ?>

                                    </th>
                                    <th scope="col" data-field="is_enable" data-formatter="status_switch"
                                        data-sortable="false" data-align="center" data-width="5%">
                                        <?php echo e(__('Enable/Disable')); ?></th>
                                    <?php if(has_permissions('update', 'property_inquiry')): ?>
                                        <th scope="col" data-field="operate" data-align="center" data-sortable="false">
                                            <?php echo e(__('Action')); ?></th>
                                    <?php endif; ?>

                                </tr>
                            </thead>
                        </table>
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
                        <h6 class="modal-title" id="myModalLabel1"><?php echo e(__('Advertisement Status')); ?></h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <form action="<?php echo e(url('adv-status-update')); ?>" class="form-horizontal"
                            enctype="multipart/form-data" method="POST" data-parsley-validate>

                            <?php echo e(csrf_field()); ?>


                            <div class="row">

                                <div class="col-sm-12">

                                    <select name="edit_adv_status" id="edit_adv_status" class="chosen-select form-select"
                                        style="width: 100%">

                                        <option value='0'><?php echo e(__('Approved')); ?></option>
                                        <option value='1'><?php echo e(__('Pending')); ?></option>
                                        <option value='2'><?php echo e(__('Rejected')); ?></option>

                                    </select>
                                    <input type="hidden" name="id" id="id">

                                </div>

                            </div>
                            <div class="modal-footer" style="padding: 2% 0%">
                                <button type="button" class="btn btn-secondary waves-effect"
                                    data-bs-dismiss="modal"><?php echo e(__('Close')); ?></button>

                                <button type="submit"
                                    class="btn btn-primary waves-effect waves-light"><?php echo e(__('Save')); ?></button>
                        </form>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <input type="hidden" id="customerid" value="<?php echo e(isset($_GET['customer']) ? $_GET['customer'] : ''); ?>">
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        $('#status').on('change', function() {
            $('#table_list').bootstrapTable('refresh');

        });

        $('#category').on('change', function() {
            $('#table_list').bootstrapTable('refresh');

        });
        $(document).ready(function() {
            var params = new window.URLSearchParams(window.location.search);
            if (params.get('status') != 'null') {
                $('#status').val(params.get('status')).trigger('change');
            }
        });



        function setValue(id) {

            $("#id").val(id);
            // $("#edit_category").val($("#" + id).parents('tr:first').find('td:nth-child(3)').text());
        }

        function queryParams(p) {

            return {
                sort: p.sort,
                order: p.order,
                offset: p.offset,
                limit: p.limit,
                search: p.search,
                status: $('#status').val(),
                category: $('#category').val(),
                customer_id: $('#customerid').val(),
            };
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wrteam-dev/ebroker/resources/views/advertisement/index.blade.php ENDPATH**/ ?>