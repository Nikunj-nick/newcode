<?php $__env->startSection('title'); ?>
    <?php echo e(__('Slider')); ?>

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
            <div class="card-content">
                <div class="card-body">
                    <?php echo Form::open(['url' => route('slider.store'), 'data-parsley-validate', 'files' => true]); ?>

                    <div class="row mandatory mt-1">
                        <div class="col-sm-12 col-md-4 form-group mandatory">

                            
                            <?php echo e(Form::label('image', __('Image'), [
                                'class' => 'col-md-12 col-sm-12 form-label text-start',
                            ])); ?>


                            <?php echo e(Form::file('image', ['class' => 'form-control', 'accept' => 'image/*', 'data-parsley-required' => true])); ?>


                        </div>
                        <div class="col-sm-12 col-md-4 form-group mandatory">

                            <?php echo e(Form::label('category', __('Category'), [
                                'class' => 'col-md-12 col-sm-12 form-label text-start',
                            ])); ?>


                            <select name="category" class="choosen-select form-select form-control-sm" id="categories"
                                required="required">
                                <option value="" selected disabled>Choose Category</option>

                                <?php if(isset($category)): ?>
                                    <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($row->id); ?>"><?php echo e($row->category); ?> </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </select>
                        </div>
                        <div class="col-sm-12 col-md-4 form-group mandatory">

                            <?php echo e(Form::label('property', __('Property'), [
                                'class' => 'col-md-12 col-sm-12 form-label text-start',
                            ])); ?>


                            <select name="property" id="property" class="choosen-select form-select form-control-sm"
                                required="required">

                                <option value="" selected disabled>Choose Property</option>

                            </select>
                        </div>
                        
                        <div class="col-12 d-flex justify-content-end" style="padding: 1% 2%;">

                            <?php echo e(Form::submit(__('Save'), ['class' => 'btn btn-primary me-1 mb-1'])); ?>

                        </div>

                    </div>
                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="card">
            <form class="form" action="<?php echo e(route('slider.slider-order')); ?>" method="post">
                <?php echo e(csrf_field()); ?>


                <div class="card-content">

                    <div class="row mt-1">
                        <div class="card-body">
                            <div class="form-group row ">

                                <div class="col-12">
                                    <table class="table table-borderless" aria-describedby="mydesc" class='table-striped'
                                        id="table_list" data-toggle="table" data-url="<?php echo e(url('sliderList')); ?>"
                                        data-click-to-select="true" data-side-pagination="server" data-pagination="true"
                                        data-page-list="[5, 10, 20, 50, 100, 200,All]" data-search="true"
                                        data-toolbar="#toolbar" data-show-columns="true" data-show-refresh="true"
                                        data-fixed-columns="true" data-fixed-number="1" data-fixed-right-number="1"
                                        data-trim-on-search="false" data-responsive="true" data-sort-name="id"
                                        data-sort-order="desc" data-pagination-successively-size="3"
                                        data-query-params="queryParams" data-id-field="id"
                                        data-editable-emptytext="Default empty text."
                                        data-editable-url="<?php echo e(route('slider.slider-order')); ?>">

                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col" data-field="id" data-align="center" data-sortable="true">
                                                    <?php echo e(__('ID')); ?></th>
                                                <th scope="col" data-field="image" data-align="center"
                                                    data-formatter="imageFormatter" data-sortable="false">
                                                    <?php echo e(__('Image')); ?></th>
                                                <th scope="col" data-field="category.category" data-sort-name="category"
                                                    data-align="center" data-sortable="false"><?php echo e(__('Category')); ?></th>
                                                <th scope="col" data-field="title" data-align="center"
                                                    data-sortable="false"><?php echo e(__('Property')); ?></th>

                                                <th scope="col" data-field="operate" data-align="center"
                                                    data-sortable="false"><?php echo e(__('Action')); ?></th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
            </form>
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
        $(function() {
            $("#categories").click(function() {
                console.log("load");
            });
            $("#categories").change(function() {
                console.log('on');
                var id = $(this).val();
                $.ajax({
                    type: "GET",
                    url: "<?php echo e(route('slider.getpropertybycategory')); ?>",
                    dataType: 'json',
                    data: {
                        id: id
                    },

                    success: function(response) {
                        $('#property').empty();

                        if (response.error == false) {
                            $('#property').append($('<option>', {
                                value: '',
                                text: 'Choose option'

                            }));
                            $.each(response.data, function(i, item) {

                                var text_name = item.title + " - " + item.name;
                                $('#property').append($('<option>', {
                                    value: item.id,
                                    text: text_name

                                }));
                            });
                        } else {
                            $('#property').empty();
                        }
                    }
                });

            });
        });
    </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wrteam-dev/ebroker/resources/views/slider/index.blade.php ENDPATH**/ ?>