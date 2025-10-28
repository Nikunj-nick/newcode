<?php $__env->startSection('title'); ?>
    <?php echo e(__('Payment')); ?>

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
                        <table class="table-light" aria-describedby="mydesc" class='table-striped' id="table_list"
                            data-toggle="table" data-url="<?php echo e(url('getPaymentList')); ?>" data-click-to-select="true"
                            data-side-pagination="server" data-pagination="true"
                            data-page-list="[5, 10, 20, 50, 100, 200,All]" data-search="true" data-search-align="right"
                            data-toolbar="#toolbar" data-show-columns="true" data-show-refresh="true"
                            data-fixed-columns="true" data-fixed-number="1" data-fixed-right-number="1"
                            data-trim-on-search="false" data-responsive="true" data-sort-name="id" data-sort-order="desc"
                            data-pagination-successively-size="3" data-query-params="queryParams">
                            <thead>
                                <tr>
                                    <th scope="col" data-field="id" data-align="center" data-sortable="true">
                                        <?php echo e(__('ID')); ?></th>
                                    <th scope="col" data-field="customer_name" data-align="center" data-sortable="false">
                                        <?php echo e(__('Client Name')); ?></th>
                                    <th scope="col" data-field="package_name" data-align="center" data-sortable="false">
                                        <?php echo e(__('Package Name')); ?>

                                    </th>
                                    <th scope="col" data-field="amount" data-align="center" data-sortable="false">
                                        <?php echo e(__('Amount')); ?>

                                    </th>
                                    <th scope="col" data-field="transaction_id" data-align="center"
                                        data-sortable="false"><?php echo e(__('Transaction Id')); ?>

                                    </th>


                                    <th scope="col" data-field="payment_date" data-align="center" data-sortable="false">
                                        <?php echo e(__('Payment Date')); ?>

                                    <th scope="col" data-field="payment_gateway" data-align="center"
                                        data-sortable="false"><?php echo e(__('Payment Gateway')); ?>

                                    <th scope="col" data-field="status" data-align="center" data-sortable="false">
                                        <?php echo e(__('Status')); ?></th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>


        </div>
        <input type="hidden" id="customerid" value="<?php echo e(isset($_GET['customer']) ? $_GET['customer'] : ''); ?>">
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
                status: $('#status').val(),
                category: $('#category').val(),
                customer_id: $('#customerid').val(),
            };
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wrteam-dev/ebroker/resources/views/payments/index.blade.php ENDPATH**/ ?>