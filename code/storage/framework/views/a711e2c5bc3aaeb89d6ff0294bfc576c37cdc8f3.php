<?php $__env->startSection('title'); ?>
    Categories
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
        <div class="col-md-12 text-end">
            <button class="btn mb-3 btn-primary add-category-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                    <path
                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z">
                    </path>
                </svg>
                Add Category
            </button>
        </div>

        <div class="card add-category mt-3">

            <div class="card-header">

                <div class="divider">
                    <div class="divider-text">
                        <h4>Create Category</h4>
                    </div>
                </div>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <div class="row">
                        <?php echo Form::open(['url' => route('categories.store'), 'data-parsley-validate', 'files' => true]); ?>

                        <div class=" row">

                            
                            <div class="col-md-4 col-sm-12 form-group mandatory">
                                <?php echo e(Form::label('category', __('Category'), ['class' => 'form-label text-center'])); ?>

                                <?php echo e(Form::text('category', '', [
                                    'class' => 'form-control',
                                    'placeholder' => 'Category',
                                    'data-parsley-required' => 'true',
                                ])); ?>


                            </div>

                            
                            <div class="col-md-4 col-sm-12 form-group mandatory">
                                <?php echo e(Form::label('type', __('Facilities'), ['class' => 'form-label text-center'])); ?>

                                <select data-placeholder="Choose Facilities" name="parameter_type[]" class="form-control form-select chosen-select" id="select_parameter_type" multiple data-parsley-required="true" data-parsley-minSelect='1'>
                                    <?php $__currentLoopData = $parameters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $parameter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value=<?php echo e($parameter->id); ?>><?php echo e($parameter->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                            
                            <div class="col-md-4 col-sm-12 form-group mandatory">
                                <?php echo e(Form::label('image', __('Image'), ['class' => 'form-label text-center'])); ?>

                                <?php echo e(Form::file('image', ['class' => 'form-control', 'data-parsley-required' => 'true', 'accept' => '.svg'])); ?>

                            </div>

                        </div>
                        <div class="row">

                            
                            <div class="col-md-4 col-sm-12 form-group">
                                <?php echo e(Form::label('title', __('Meta Title'), ['class' => 'form-label text-center'])); ?>

                                <input type="text" name="meta_title" class="form-control" id="meta_title" oninput="getWordCount('meta_title','meta_title_count','19.9px arial')" placeholder="<?php echo e(__('Meta title')); ?>">
                                <h6 id="meta_title_count">0</h6>
                            </div>

                            
                            <div class="col-md-4 col-sm-12 form-group">
                                <?php echo e(Form::label('title', __('Meta Keywords'), ['class' => 'form-label text-center'])); ?>

                                <input type="text" name="meta_keywords" class="form-control" id="meta_keywords" placeholder="<?php echo e(__('Meta Keywords')); ?>">
                            </div>

                            
                            <div class="col-md-4 col-sm-12 form-group">
                                <?php echo e(Form::label('description', __('Meta Description'), ['class' => 'form-label text-center'])); ?>

                                <textarea id="meta_description" name="meta_description" class="form-control" oninput="getWordCount('meta_description','meta_description_count','12.9px arial')"></textarea>
                                <h6 id="meta_description_count">0</h6>
                            </div>

                            <div class="col-sm-12 col-md-12 text-end" style="margin-top:2%;">
                                <?php echo e(Form::submit('Save', ['class' => 'btn btn-primary me-1 mb-1'])); ?>

                            </div>
                        </div>
                        <?php echo Form::close(); ?>

                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="section">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <table class="table table-borderless" aria-describedby="mydesc" class='table-striped'
                            id="table_list" data-toggle="table" data-url="<?php echo e(url('categoriesList')); ?>"
                            data-click-to-select="true" data-responsive="true" data-side-pagination="server"
                            data-pagination="true" data-page-list="[5, 10, 20, 50, 100, 200,All]" data-search="true"
                            data-toolbar="#toolbar" data-show-columns="true" data-show-refresh="true"
                            data-fixed-columns="true" data-fixed-number="1" data-fixed-right-number="1"
                            data-trim-on-search="false" data-sort-name="id" data-sort-order="desc"
                            data-pagination-successively-size="3" data-query-params="queryParams">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col" data-field="id" data-sortable="true" data-align="center"><?php echo e(__('ID')); ?></th>
                                    <th scope="col" data-field="category" data-sortable="true" data-align="center"><?php echo e(__('Category')); ?></th>
                                    <th scope="col" data-field="image" data-formatter="imageFormatter" data-sortable="false" data-align="center"><?php echo e(__('Image')); ?></th>
                                    <th scope="col" data-field="type" data-sortable="false" data-align="center"><?php echo e(__('Facilities')); ?></th>
                                    <th scope="col" data-field="meta_title" data-sortable="true" data-align="center"><?php echo e(__('Meta Title')); ?></th>
                                    <th scope="col" data-field="meta_description" data-sortable="true" data-align="center"> <?php echo e(__('Meta Description')); ?></th>
                                    <th scope="col" data-field="meta_keywords" data-sortable="true" data-align="center"><?php echo e(__('Meta Keywords')); ?></th>
                                    <th scope="col" data-field="status" data-sortable="false" data-formatter="status_switch" data-align="center"> <?php echo e(__('Enable/Disable')); ?> </th>
                                    <th scope="col" data-field="operate" data-sortable="false" data-align="center" data-events="actionEvents"> <?php echo e(__('Action')); ?></th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- EDIT MODEL MODEL -->
    <div id="editModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="myModalLabel1"><?php echo e(__('Edit Categories')); ?></h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo e(url('categories-update')); ?>" class="form-horizontal" enctype="multipart/form-data" method="POST" data-parsley-validate>
                        <?php echo e(csrf_field()); ?>


                        <input type="hidden" id="old_image" name="old_image">
                        <input type="hidden" id="edit_id" name="edit_id">
                        <input type="hidden" value="<?php echo e(system_setting('svg_clr')); ?>" id="svg_clr">
                        <div class="row">
                            <div class="col-m-6">

                                
                                <div class="col-md-12 form-group mandatory mt-1">
                                    <label for="edit_category" class="form-label"><?php echo e(__('Category')); ?></label>
                                    <input type="text" id="edit_category" class="form-control" placeholder="Name" name="edit_category" data-parsley-required="true">
                                </div>

                                
                                <div class="col-md-12 col-sm-12 form-group mandatory">
                                    <?php echo e(Form::label('title', __('Meta Title'), ['class' => 'form-label text-center'])); ?>

                                    <input type="text" name="edit_meta_title" class="form-control" id="edit_meta_title" oninput="getWordCount('edit_meta_title','edit_meta_title_count','19.9px arial')" placeholder="<?php echo e(__('Meta title')); ?>" required>
                                    <h6 id="edit_meta_title_count">0</h6>
                                </div>

                                
                                <div class="col-md-12 col-sm-12 form-group mandatory mt-1">
                                    <?php echo e(Form::label('description', __('Description'), ['class' => 'form-label text-center'])); ?>

                                    <textarea id="edit_meta_description" name="edit_meta_description" class="form-control" style="height: 74px;" oninput="getWordCount('edit_meta_description','edit_meta_description_count','12.9px arial')"></textarea>
                                    <h6 id="edit_meta_description_count">0</h6>
                                </div>
                                <div class="col-md-12 col-sm-12 form-group mandatory">
                                    <?php echo e(Form::label('keywords', __('Keywords'), ['class' => 'form-label text-center'])); ?>


                                    <?php echo e(Form::text('edit_keywords', '', [
                                        'class' => 'form-control',
                                        'placeholder' => 'Keywords',
                                        'id' => 'edit_keywords',
                                        'data-parsley-required' => 'true',
                                    ])); ?>


                                </div>

                            </div>

                            <div class="col-md-6">
                                <div class="col-sm-12 col-md-12 mandatory">
                                    <?php echo e(Form::label('type', __('Facilities'), ['class' => 'col-sm-12 col-form-label '])); ?>


                                    <div id="output"></div>

                                    <select data-placeholder="Facilities" name="edit_parameter_type[]" id="edit_parameter_type" multiple class="form-select form-control mandatory">
                                        <?php $__currentLoopData = $parameters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $parameter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value=<?php echo e($parameter->id); ?> id='op'><?php echo e($parameter->name); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php if(count($errors) > 0): ?>
                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="alert alert-danger error-msg"><?php echo e($error); ?></div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>

                                </div>
                                <?php echo e(Form::label('Sequence', __('Sequence'), ['class' => 'col-sm-12 col-form-label '])); ?>


                                <div class="col-sm-12 sequence">

                                    <div id="par" class="d-flex row">

                                    </div>
                                    <input type="hidden" name="update_seq" id="update_seq">

                                </div>
                                <div class="col-sm-12" style="margin-top: 7%">

                                    <?php echo e(Form::label('image', __('Image'), ['class' => 'col-sm-12 col-form-label'])); ?>

                                    <input type="file" name="edit_image" id="edit_image" class="filepond" accept="image/svg+xml">
                                </div>
                                <div class="col-sm-12 text-center">
                                    <img id="blah" height="100" width="110" style="margin-left: 2%;" />
                                </div>

                            </div>

                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect"
                        data-bs-dismiss="modal"><?php echo e(__('Close')); ?></button>

                    <button type="submit" class="btn btn-primary waves-effect waves-light"><?php echo e(__('Save')); ?></button>
                    </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- EDIT MODEL -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    
    <script src=https://bevacqua.github.io/dragula/dist/dragula.js></script>
    <script>
        $(document).ready(function() {
            getWordCount("meta_title", "meta_title_count", "19.9px arial");
            getWordCount("meta_description", "meta_description_count", "12.9px arial");
            $('.add-category').hide();
            $('#select_parameter_type').chosen();
            $('#edit_parameter_type').chosen();
        });


        $('.add-category-button').on('click', function() {
            $('.add-category').toggle();
        })

        function queryParams(p) {
            return {
                sort: p.sort,
                order: p.order,
                offset: p.offset,
                limit: p.limit,
                search: p.search
            };
        }

        $('#edit_parameter_type').on('change', function(e) {
                e.preventDefault();

                $('#edit_parameter_type option:not(:selected)').each(function() {
                    $('#div_' + this.value).remove();
                    var sequence = [];
                    $('.seq').each(function() {


                        sequence.push($(this).attr('id'));

                    });
                    $('#update_seq').val(sequence.toString());
                });

                ids = $('#par > div').map((i, div) => div.id).get();


                $('#par').html('');

                $("#edit_parameter_type option:selected").each(function() {


                    val_of_opt = this.value;
                    text_of_opt = this.text;


                    if (text_of_opt) {
                        $('#par').append($(
                            '<div class="col-md-3">' +
                            '<div class="seq" id=' + val_of_opt +
                            '><span class="badge rounded-pill" style="background:var( --bs-primary);margin-left:2px;cursor:grab;">' +
                            text_of_opt + '</span></div></div>'


                        ));
                    }

                });

                var sequence = [];
                $('.seq').each(function() {


                    sequence.push($(this).attr('id'));


                });
                $('#update_seq').val(sequence.toString());

            }

        );
        window.actionEvents = {
            'click .edit_btn': function(e, value, row, index) {
                $("#edit_id").val(row.id);

                $("#edit_category").val(row.category);

                getWordCount("edit_meta_title", "edit_meta_title_count", "19.9px arial");
                getWordCount(
                    "edit_meta_description",
                    "edit_meta_description_count",
                    "12.9px arial"
                );
                var sequence = [];
                $('.seq').empty();
                $('#update_seq').val('');
                $('#par').empty();
                $('#edit_parameter_type_chosen').css('width', '470px');

                $("#edit_meta_title").val(row.meta_title);
                $("#edit_meta_description").val(row.meta_description);
                $("#edit_keywords").val(row.meta_keywords);
                $('#blah').attr('src', row.image);
                $('#edit_image').attr('src', row.image);
                $("#sequence").val(row.type);

                var type = row.parameter_types;

                var type_arr = type.split(',');


                if (type != '') {
                    $('#edit_parameter_type').val(type.split(',')).trigger('change');
                } else {
                    $('#edit_parameter_type').val('');
                }

                $('#par').empty();
                str = '';

                val_arr = $("#edit_parameter_type").val();

                arr1 = [];
                mapped_arr1 = [];

                $("#edit_parameter_type :selected").each(function(key, value) {


                    var arr = type_arr;

                    var mapped_arr = type_arr.map(function(val) {
                        return $.inArray(val, [val_arr]) ? val : "no";
                    });


                    mapped_arr1.push(mapped_arr);
                    arr1.push(value.text);


                    str += this.value + ',';


                });


                $.each(mapped_arr1[0], function(k, v) {

                    text_op = ($('#edit_parameter_type option[value="' + v + '"]').text());
                    if (v != '') {
                        $('#par').append($(
                            '<div class="col-md-3">' +
                            '<div class="seq" id=' + v +
                            '><span class="badge rounded-pill" style="background:var( --bs-primary);margin-left:2px;cursor:grab;">' +
                            text_op + '</span></div></div>'
                        ));
                    }

                });

                $("#edit_parameter_type").val(str.split(',')).trigger('chosen:updated');

                var sequence = [];
                $('.seq').each(function() {


                    sequence.push($(this).attr('id'));

                });

                $('#update_seq').val(sequence.toString());

                // var containers = document.getElementById('par');

                var containers = [document.getElementById('par')];

                dragula(containers, {
                    // Additional options for Dragula can be added here
                }).on('drop', function() {
                    var sequence = [];
                    var existingIDs = {};

                    $('.seq').each(function() {
                        var id = $(this).attr('id');

                        if (!existingIDs[id]) {
                            existingIDs[id] = true;
                            sequence.push(id);
                        }
                    });


                    $('#update_seq').val(sequence.join(','));
                });

                var type = row.parameter_types;

                var type_arr = type.split(',');


                if (type != '') {
                    $('#edit_parameter_type').val(type.split(',')).trigger('change');
                } else {
                    $('#edit_parameter_type').val('');
                }

                $('#par').empty();
                str = '';

                val_arr = $("#edit_parameter_type").val();

                arr1 = [];
                mapped_arr1 = [];

                $("#edit_parameter_type :selected").each(function(key, value) {


                    var arr = type_arr;

                    var mapped_arr = type_arr.map(function(val) {
                        return $.inArray(val, [val_arr]) ? val : "no";
                    });


                    mapped_arr1.push(mapped_arr);
                    arr1.push(value.text);


                    str += this.value + ',';


                });


                $.each(mapped_arr1[0], function(k, v) {

                    text_op = ($('#edit_parameter_type option[value="' + v + '"]').text());
                    if (v != '') {
                        $('#par').append($(
                            '<div class="col-md-3">' +
                            '<div class="seq" id=' + v +
                            '><span class="badge rounded-pill" style="background:var( --bs-primary);margin-left:2px;cursor:grab;">' +
                            text_op + '</span></div></div>'


                        ));
                    }

                });

                $("#edit_parameter_type").val(str.split(',')).trigger('chosen:updated');

                var sequence = [];
                $('.seq').each(function() {


                    sequence.push($(this).attr('id'));

                });

                $('#update_seq').val(sequence.toString());

                // var containers = document.getElementById('par');

                var containers = [document.getElementById('par')];

                dragula(containers, {
                    // Additional options for Dragula can be added here
                }).on('drop', function() {
                    var sequence = [];
                    var existingIDs = {};

                    $('.seq').each(function() {
                        var id = $(this).attr('id');

                        if (!existingIDs[id]) {
                            existingIDs[id] = true;
                            sequence.push(id);
                        }
                    });


                    $('#update_seq').val(sequence.join(','));
                });

                var type = row.parameter_types;

                var type_arr = type.split(',');


                if (type != '') {
                    $('#edit_parameter_type').val(type.split(',')).trigger('change');
                } else {
                    $('#edit_parameter_type').val('');
                }

                $('#par').empty();
                str = '';

                val_arr = $("#edit_parameter_type").val();

                arr1 = [];
                mapped_arr1 = [];

                $("#edit_parameter_type :selected").each(function(key, value) {


                    var arr = type_arr;

                    var mapped_arr = type_arr.map(function(val) {
                        return $.inArray(val, [val_arr]) ? val : "no";
                    });


                    mapped_arr1.push(mapped_arr);
                    arr1.push(value.text);


                    str += this.value + ',';


                });


                $.each(mapped_arr1[0], function(k, v) {

                    text_op = ($('#edit_parameter_type option[value="' + v + '"]').text());
                    if (v != '') {
                        $('#par').append($(
                            '<div class="col-md-3">' +
                            '<div class="seq" id=' + v +
                            '><span class="badge rounded-pill" style="background:var( --bs-primary);margin-left:2px;cursor:grab;">' +
                            text_op + '</span></div></div>'


                        ));
                    }

                });

                $("#edit_parameter_type").val(str.split(',')).trigger('chosen:updated');

                var sequence = [];
                $('.seq').each(function() {


                    sequence.push($(this).attr('id'));

                });

                $('#update_seq').val(sequence.toString());

                // var containers = document.getElementById('par');

                var containers = [document.getElementById('par')];

                dragula(containers, {
                    // Additional options for Dragula can be added here
                }).on('drop', function() {
                    var sequence = [];
                    var existingIDs = {};

                    $('.seq').each(function() {
                        var id = $(this).attr('id');

                        if (!existingIDs[id]) {
                            existingIDs[id] = true;
                            sequence.push(id);
                        }
                    });


                    $('#update_seq').val(sequence.join(','));
                });

                var type = row.parameter_types;

                var type_arr = type.split(',');


                if (type != '') {
                    $('#edit_parameter_type').val(type.split(',')).trigger('change');
                } else {
                    $('#edit_parameter_type').val('');
                }

                $('#par').empty();
                str = '';

                val_arr = $("#edit_parameter_type").val();

                arr1 = [];
                mapped_arr1 = [];

                $("#edit_parameter_type :selected").each(function(key, value) {


                    var arr = type_arr;

                    var mapped_arr = type_arr.map(function(val) {
                        return $.inArray(val, [val_arr]) ? val : "no";
                    });


                    mapped_arr1.push(mapped_arr);
                    arr1.push(value.text);


                    str += this.value + ',';


                });


                $.each(mapped_arr1[0], function(k, v) {

                    text_op = ($('#edit_parameter_type option[value="' + v + '"]').text());
                    if (v != '') {
                        $('#par').append($(
                            '<div class="col-md-3">' +
                            '<div class="seq" id=' + v +
                            '><span class="badge rounded-pill" style="background:var( --bs-primary);margin-left:2px;cursor:grab;">' +
                            text_op + '</span></div></div>'


                        ));
                    }

                });

                $("#edit_parameter_type").val(str.split(',')).trigger('chosen:updated');

                var sequence = [];
                $('.seq').each(function() {


                    sequence.push($(this).attr('id'));

                });

                $('#update_seq').val(sequence.toString());

                // var containers = document.getElementById('par');

                var containers = [document.getElementById('par')];

                dragula(containers, {
                    // Additional options for Dragula can be added here
                }).on('drop', function() {
                    var sequence = [];
                    var existingIDs = {};

                    $('.seq').each(function() {
                        var id = $(this).attr('id');

                        if (!existingIDs[id]) {
                            existingIDs[id] = true;
                            sequence.push(id);
                        }
                    });


                    $('#update_seq').val(sequence.join(','));
                });

                var type = row.parameter_types;

                var type_arr = type.split(',');


                if (type != '') {
                    $('#edit_parameter_type').val(type.split(',')).trigger('change');
                } else {
                    $('#edit_parameter_type').val('');
                }

                $('#par').empty();
                str = '';

                val_arr = $("#edit_parameter_type").val();

                arr1 = [];
                mapped_arr1 = [];

                $("#edit_parameter_type :selected").each(function(key, value) {


                    var arr = type_arr;

                    var mapped_arr = type_arr.map(function(val) {
                        return $.inArray(val, [val_arr]) ? val : "no";
                    });


                    mapped_arr1.push(mapped_arr);
                    arr1.push(value.text);


                    str += this.value + ',';


                });


                $.each(mapped_arr1[0], function(k, v) {

                    text_op = ($('#edit_parameter_type option[value="' + v + '"]').text());
                    if (v != '') {
                        $('#par').append($(
                            '<div class="col-md-3">' +
                            '<div class="seq" id=' + v +
                            '><span class="badge rounded-pill" style="background:var( --bs-primary);margin-left:2px;cursor:grab;">' +
                            text_op + '</span></div></div>'


                        ));
                    }

                });

                $("#edit_parameter_type").val(str.split(',')).trigger('chosen:updated');

                var sequence = [];
                $('.seq').each(function() {


                    sequence.push($(this).attr('id'));

                });

                $('#update_seq').val(sequence.toString());

                // var containers = document.getElementById('par');

                var containers = [document.getElementById('par')];

                dragula(containers, {
                    // Additional options for Dragula can be added here
                }).on('drop', function() {
                    var sequence = [];
                    var existingIDs = {};

                    $('.seq').each(function() {
                        var id = $(this).attr('id');

                        if (!existingIDs[id]) {
                            existingIDs[id] = true;
                            sequence.push(id);
                        }
                    });


                    $('#update_seq').val(sequence.join(','));
                });

                var type = row.parameter_types;

                var type_arr = type.split(',');


                if (type != '') {
                    $('#edit_parameter_type').val(type.split(',')).trigger('change');
                } else {
                    $('#edit_parameter_type').val('');
                }

                $('#par').empty();
                str = '';

                val_arr = $("#edit_parameter_type").val();

                arr1 = [];
                mapped_arr1 = [];

                $("#edit_parameter_type :selected").each(function(key, value) {


                    var arr = type_arr;

                    var mapped_arr = type_arr.map(function(val) {
                        return $.inArray(val, [val_arr]) ? val : "no";
                    });


                    mapped_arr1.push(mapped_arr);
                    arr1.push(value.text);


                    str += this.value + ',';


                });


                $.each(mapped_arr1[0], function(k, v) {

                    text_op = ($('#edit_parameter_type option[value="' + v + '"]').text());
                    if (v != '') {
                        $('#par').append($(
                            '<div class="col-md-3">' +
                            '<div class="seq" id=' + v +
                            '><span class="badge rounded-pill" style="background:var( --bs-primary);margin-left:2px;cursor:grab;">' +
                            text_op + '</span></div></div>'


                        ));
                    }

                });

                $("#edit_parameter_type").val(str.split(',')).trigger('chosen:updated');

                var sequence = [];
                $('.seq').each(function() {


                    sequence.push($(this).attr('id'));

                });

                $('#update_seq').val(sequence.toString());

                // var containers = document.getElementById('par');

                var containers = [document.getElementById('par')];

                dragula(containers, {
                    // Additional options for Dragula can be added here
                }).on('drop', function() {
                    var sequence = [];
                    var existingIDs = {};

                    $('.seq').each(function() {
                        var id = $(this).attr('id');

                        if (!existingIDs[id]) {
                            existingIDs[id] = true;
                            sequence.push(id);
                        }
                    });


                    $('#update_seq').val(sequence.join(','));
                });

                var type = row.parameter_types;

                var type_arr = type.split(',');


                if (type != '') {
                    $('#edit_parameter_type').val(type.split(',')).trigger('change');
                } else {
                    $('#edit_parameter_type').val('');
                }

                $('#par').empty();
                str = '';

                val_arr = $("#edit_parameter_type").val();

                arr1 = [];
                mapped_arr1 = [];

                $("#edit_parameter_type :selected").each(function(key, value) {


                    var arr = type_arr;

                    var mapped_arr = type_arr.map(function(val) {
                        return $.inArray(val, [val_arr]) ? val : "no";
                    });


                    mapped_arr1.push(mapped_arr);
                    arr1.push(value.text);


                    str += this.value + ',';


                });


                $.each(mapped_arr1[0], function(k, v) {

                    text_op = ($('#edit_parameter_type option[value="' + v + '"]').text());
                    if (v != '') {
                        $('#par').append($(
                            '<div class="col-md-3">' +
                            '<div class="seq" id=' + v +
                            '><span class="badge rounded-pill" style="background:var( --bs-primary);margin-left:2px;cursor:grab;">' +
                            text_op + '</span></div></div>'


                        ));
                    }

                });

                $("#edit_parameter_type").val(str.split(',')).trigger('chosen:updated');

                var sequence = [];
                $('.seq').each(function() {


                    sequence.push($(this).attr('id'));

                });

                $('#update_seq').val(sequence.toString());

                // var containers = document.getElementById('par');

                var containers = [document.getElementById('par')];

                dragula(containers, {
                    // Additional options for Dragula can be added here
                }).on('drop', function() {
                    var sequence = [];
                    var existingIDs = {};

                    $('.seq').each(function() {
                        var id = $(this).attr('id');

                        if (!existingIDs[id]) {
                            existingIDs[id] = true;
                            sequence.push(id);
                        }
                    });


                    $('#update_seq').val(sequence.join(','));
                });


            }
        }



        var sequence = [];
        $('.seq').each(function() {

            sequence.push($(this).attr('id'));
        });

        $('#update_seq').val(sequence.toString());
        document.getElementById('output').innerHTML = location.search;
        $(".chosen-select").chosen();

        $('.bottomleft').click(function() {
            $('#edit_image').click();


        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wrteam-dev/ebroker/resources/views/categories/index.blade.php ENDPATH**/ ?>