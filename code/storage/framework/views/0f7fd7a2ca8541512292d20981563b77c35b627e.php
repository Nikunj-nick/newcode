<?php $__env->startSection('title'); ?>
Users Inquiries
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
        <div class="card-header">

        </div>


        <div class="card-body">

            <div class="row">
                <div class="col-12">
                    <table class="table table-borderless" aria-describedby="mydesc" class='table-striped' id="table_list"
                        data-toggle="table" data-url="<?php echo e(url('get_users_inquiries')); ?>" data-click-to-select="true"
                        data-side-pagination="server" data-pagination="true"
                        data-page-list="[5, 10, 20, 50, 100, 200,All]" data-search="true" data-toolbar="#toolbar"
                        data-show-columns="true" data-show-refresh="true" data-fixed-columns="true"
                        data-fixed-number="1" data-fixed-right-number="1" data-trim-on-search="false"
                        data-responsive="true" data-sort-name="id" data-sort-order="desc"
                        data-pagination-successively-size="3" data-query-params="queryParams">
                         <thead class="thead-dark">
      <tr>
                                <th scope="col" data-field="id" data-sortable="true" data-align="center">ID</th>
                                <th scope="col" data-field="first_name" data-sortable="true" data-align="center">First
                                    Name
                                </th>
                                <th scope="col" data-field="last_name" data-sortable="true" data-align="center">Last
                                    Name</th>
                                <th scope="col" data-field="email" data-sortable="true" data-align="center">Email</th>

                                <th scope="col" data-field="subject" data-sortable="true" data-align="center">Subject
                                </th>
                                <th scope="col" data-field="message" data-sortable="true" data-align="center">Message
                                </th>

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
    search: p.search,
    
    };
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wrteam-dev/ebroker/resources/views/users/users_inquiries.blade.php ENDPATH**/ ?>