<?php $__env->startSection('title'); ?>
    Users
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
                <div class="col-sm-12 d-flex justify-content-end">

                    <a class="btn btn-primary me-1 mb-1" data-bs-toggle="modal" data-bs-target="#addUsereditModal">Add
                        Users</a>

                </div>
            </div>
            <hr>

            <div class="card-body">

                <div class="row">
                    <div class="col-12">
                        <table class="table-light" aria-describedby="mydesc" class='table-striped' id="table_list"
                            data-toggle="table" data-url="<?php echo e(url('userList')); ?>" data-click-to-select="true"
                            data-side-pagination="server" data-pagination="true"
                            data-page-list="[5, 10, 20, 50, 100, 200,All]" data-search="true" data-toolbar="#toolbar"
                            data-show-columns="true" data-show-refresh="true" data-fixed-columns="true"
                            data-fixed-number="1" data-fixed-right-number="1" data-trim-on-search="false"
                            data-responsive="true" data-sort-name="id" data-sort-order="desc"
                            data-pagination-successively-size="3" data-query-params="queryParams">
                            <thead>
                                <tr>
                                    <th scope="col" data-field="id" data-sortable="true" data-align="center">ID</th>
                                    <th scope="col" data-field="name" data-sortable="true" data-align="center">Name</th>
                                    <th scope="col" data-field="email" data-sortable="true" data-align="center">Email</th>
                                    <th scope="col" data-field="status" data-sortable="false" data-align="center">Active Status</th>
                                    <th scope="col" data-field="operate" data-sortable="false"
                                        data-events="actionEvents" data-align="center">Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </section>



    <!-- ADD USER MODEL MODEL -->
    <div id="addUsereditModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel1">ADD USER</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form action="<?php echo e(route('users.store')); ?>" class="form-horizontal" method="POST" data-parsley-validate>

                        <?php echo e(csrf_field()); ?>


                        <div class="row">
                            <div class="col-sm-4">

                                <div class="col-md-12 col-12">
                                    <div class="form-group mandatory">
                                        <label for="name" class="form-label col-12 ">Name</label>
                                        <input type="text" id="name" class="form-control col-12" placeholder="Name"
                                            name="name" data-parsley-required="true">
                                    </div>
                                </div>

                                <div class="col-md-12 col-12">
                                    <div class="form-group mandatory">
                                        <label for="email" class="form-label col-12 ">Email</label>
                                        <input type="email" id="email" class="form-control col-12" placeholder="Email"
                                            name="email" data-parsley-required="true">
                                    </div>
                                </div>



                                <div class="col-md-12 col-12">
                                    <div class="form-group mandatory align-items-center">
                                        <label for="password" class="form-label col-12 ">Password</label>
                                        <input type="password" id="password" class="form-control col-12"
                                            placeholder="Password" name="Password" data-parsley-minlength="8"
                                            data-parsley-errors-container=".error-password"
                                            data-parsley-required-message="Please enter your new password."
                                            data-parsley-uppercase="1" data-parsley-lowercase="1" data-parsley-number="1"
                                            data-parsley-special="1" data-parsley-required data-parsley-required="true">
                                    </div>
                                    <span class="error-password text-danger"></span>
                                </div>





                            </div>
                            <div class="col-sm-8">
                                <?php $actions = ['create', 'read', 'update', 'delete'];  ?>

                                <div class="table-responsive">
                                    <table id="table" class="table permission-table" aria-describedby="mydesc">
                                        <tr>
                                            <th scope="col">Module/Permissions</th>
                                            <?php $__currentLoopData = $actions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <th scope="col">
                                                    <div class="form-check">
                                                        <label class="checkbox">
                                                            <input
                                                                class="form-check-input custom-checkbox modal-checkbox check-head"
                                                                data-val="<?php echo e(strtolower($row)); ?>" type="checkbox" checked>
                                                            <span></span><?php echo e(ucfirst($row)); ?>

                                                        </label>
                                                    </div>


                                                </th>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </tr>
                                        <tbody>

                                            <?php $__currentLoopData = $system_modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e(ucwords(str_replace('_', ' ', $key))); ?></td>

                                                    <?php for($i = 0; $i < count($actions); $i++): ?>
                                                        <?php $index = array_search($actions[$i], $value);  ?>

                                                        <?php if($index !== false): ?>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input
                                                                        class="form-check-input custom-checkbox modal-checkbox <?php echo e($value[$index]); ?>"
                                                                        name="<?php echo e('permissions[' . $key . '][' . $value[$index] . ']'); ?>"
                                                                        id="switch<?php echo e($index); ?>" type="checkbox">

                                                                </div>
                                                            </td>
                                                        <?php else: ?>
                                                            <td></td>
                                                        <?php endif; ?>
                                                    <?php endfor; ?>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>

                    <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
                    </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- ADD USER MODEL -->


    <!-- EDIT USER MODEL MODEL -->
    <div id="editUsereditModal1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel1">EDIT USER</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form action="<?php echo e(url('users-update')); ?>" id="editUserForm" class="form-horizontal" method="POST">

                        <?php echo e(csrf_field()); ?>



                        <input type="hidden" name="edit_id" id="edit_id">
                        <div class="row">
                            <div class="col-sm-4">

                                <div class="col-md-12 col-12">
                                    <div class="form-group mandatory">
                                        <label for="name" class="form-label col-12 text-center">Name</label>
                                        <input type="text" id="edit_name" class="form-control col-12"
                                            placeholder="Name" name="name" data-parsley-required="true">
                                    </div>
                                </div>

                                <div class="col-md-12 col-12">
                                    <div class="form-group mandatory">
                                        <label for="email" class="form-label col-12 text-center">Email</label>
                                        <input type="email" id="edit_email" class="form-control col-12"
                                            placeholder="email" name="email" data-parsley-required="true">
                                    </div>
                                </div>


                                <div class="col-md-12 col-12">
                                    <div class="form-group mandatory">
                                        <label for="email" class="form-label col-12 text-center">Active Status</label>
                                        <?php echo Form::select('status', ['0' => 'Inactive', '1' => 'Active'], '', [
                                            'class' => 'form-select',
                                            'id' => 'status',
                                        ]); ?>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <?php $actions = ['create', 'read', 'update', 'delete'];  ?>

                                <div class="table-responsive">
                                    <table id="table" class="table permission-table" aria-describedby="mydesc">
                                        <tr>
                                            <th scope="col">Module/Permissions</th>
                                            <?php $__currentLoopData = $actions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <th scope="col">
                                                    <div class="form-check">
                                                        <label class="checkbox">
                                                            <input
                                                                class="form-check-input custom-checkbox modal-checkbox check-head"
                                                                data-val="<?php echo e(strtolower($row)); ?>" type="checkbox"
                                                                checked>
                                                            <span></span><?php echo e(ucfirst($row)); ?>

                                                        </label>
                                                    </div>


                                                </th>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </tr>
                                        <tbody>
                                            

                                            <?php $__currentLoopData = $system_modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e(ucwords(str_replace('_', ' ', $key))); ?></td>

                                                    <?php for($i = 0; $i < count($actions); $i++): ?>
                                                        <?php $index = array_search($actions[$i], $value);  ?>

                                                        <?php if($index !== false): ?>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input
                                                                        class="form-check-input custom-checkbox modal-checkbox <?php echo e($value[$index]); ?>"
                                                                        name="<?php echo e('Editpermissions[' . $key . '][' . $value[$index] . ']'); ?>"
                                                                        id="switch<?php echo e($index); ?>" type="checkbox">

                                                                </div>
                                                            </td>
                                                        <?php else: ?>
                                                            <td></td>
                                                        <?php endif; ?>
                                                    <?php endfor; ?>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>

                    <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
                    </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- EDIT USER MODEL -->

    <!-- RESET PASSWORD MODEL -->
    <div id="resetpasswordmodel" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel1">RESET PASSWORD</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form action="<?php echo e(url('users-reset-password')); ?>" class="form-horizontal" role="form"
                        method="post">
                        <?php echo e(csrf_field()); ?>


                        <div class="row">
                            <div class="form-group row align-items-center">
                                <label for="firstName" class="col-lg-4 col-sm-12 control-label text-center mb-3">New
                                    Password</label>
                                <div class="col-lg-8 mb-3">
                                    <input type="password" class="form-control" name="newPassword" id="newPassword"
                                        placeholder="New password" minlength="4" required>
                                    <input type="hidden" name='pass_id' id="pass_id" required>
                                    <span class="form-text text-muted"><small>Min Password Length Must Be of
                                            4</small></span>
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label for="firstName" class="col-lg-4 col-sm-12 control-label text-center">Confirm
                                    Password</label>
                                <div class="col-lg-8 mb-3">
                                    <input type="password" class="form-control" name="confPassword" id="confPassword"
                                        placeholder="Confirm password" minlength="4" required>
                                    <span class="form-text text-muted"><small>Min Password Length Must Be of
                                            4</small></span>
                                    <br><span class="error" style="color:red"></span>
                                </div>
                            </div>
                            <div class="form-group row align-items-center">

                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="btnResetPass" value="btnResetPass"
                        class="btn btn-primary waves-effect waves-light">Save</button>
                    </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- RESET PASSWORD MODEL -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(url('assets/js/custom/users/users.js')); ?>"></script>
    <script>
        window.actionEvents = {
            'click .editdata': function(e, value, row, index) {


                $('#edit_name').val(row.name);
                $('#edit_email').val(row.email);
                $('#edit_id').val(row.id);
                $.each(row.permissions, function(index, value) {
                    // console.log(index);
                    $.each(value, function(key, value) {
                        el = document.getElementsByName('Editpermissions[' + index + '][' + key +
                            ']')[
                            0];
                        if (el) {

                            el.setAttribute('checked', true);
                        }
                    });
                });


            }

        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wrteam-dev/ebroker/resources/views/users/users.blade.php ENDPATH**/ ?>