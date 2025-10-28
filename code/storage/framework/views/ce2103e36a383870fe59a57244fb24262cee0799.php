<?php $__env->startSection('title'); ?>
    <?php echo e(__('Customer')); ?>

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
                            data-toggle="table" data-url="<?php echo e(url('customerList')); ?>" data-click-to-select="true"
                            data-side-pagination="server" data-pagination="true"
                            data-page-list="[5, 10, 20, 50, 100, 200,All]" data-search="true" data-toolbar="#toolbar"
                            data-show-columns="true" data-show-refresh="true" data-fixed-columns="true"
                            data-fixed-number="1" data-fixed-right-number="1" data-trim-on-search="false"
                            data-responsive="true" data-sort-name="id" data-sort-order="desc"
                            data-pagination-successively-size="3" data-query-params="queryParams" data-show-export="true"
                            data-export-options='{ "fileName": "data-list-<?= date(' d-m-y') ?>" }'>
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col" data-field="id" data-sortable="true" data-align="center">
                                        <?php echo e(__('ID')); ?></th>
                                    <th scope="col" data-field="profile" data-sortable="false" data-align="center"
                                        data-formatter="imageFormatter">
                                        <?php echo e(__('Profile')); ?></th>
                                    <th scope="col" data-field="name" data-sortable="true" data-align="center">
                                        <?php echo e(__('Name')); ?></th>
                                    <th scope="col" data-field="mobile" data-sortable="true" data-align="center">
                                        <?php echo e(__('Number')); ?></th>
                                    <th scope="col" data-field="address" data-sortable="false" data-align="center">
                                        <?php echo e(__('Address')); ?></th>
                                    <th scope="col" data-field="customertotalpost" data-sortable="false"
                                        data-align="center">
                                        <?php echo e(__('Total Post')); ?></th>
                                    <th scope="col" data-field="isActive" data-formatter="status_switch"
                                        data-sortable="false" data-align="center">
                                        <?php echo e(__('Enable/Disable')); ?>

                                    </th>

                                    <!--<th scope="col" data-field="operate" data-sortable="false" data-align="center">-->
                                    <!--    <?php echo e(__('Action')); ?></th>-->
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
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
                search: p.search
            };
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wrteam-dev/ebroker/resources/views/customer/index.blade.php ENDPATH**/ ?>