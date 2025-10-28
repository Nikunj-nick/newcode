<?php $__env->startSection('title'); ?>
    <?php echo e(__('Update Article')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-title'); ?>
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h4><?php echo $__env->yieldContent('title'); ?></h4>

            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route('article.index')); ?>" id="subURL"><?php echo e(__('View Article')); ?></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <?php echo e(__('Update')); ?>

                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="section">
        <div class="row">
            <div class="col-md-7 col-sm-12">
                <div class="card article_form">
                    <div class="card-header add_article_header">
                        Update Article
                    </div>
                    <hr>
                    <?php echo Form::open([
                        'route' => ['article.update', $id],
                        'data-parsley-validate',
                        'files' => true,
                        'method' => 'PATCH',
                    ]); ?>

                    <div class="card-body">

                        <div class="row">

                            <div class="col-md-12 col-sm-12 form-group mandatory">

                                <?php echo e(Form::label('title', __('Title'), ['class' => 'form-label col-12'])); ?>

                                <?php echo e(Form::text('title', $list->title, [
                                    'class' => 'form-control ',
                                    'placeholder' => 'Title',
                                    'data-parsley-required' => 'true',
                                    'id' => 'title',
                                ])); ?>


                            </div>

                            <div class="col-md-12 col-12 form-group mandatory">
                                <?php echo e(Form::label('category', __('Category'), ['class' => 'form-label col-12 '])); ?>

                                <select name="category" class="form-select form-control-sm" data-parsley-minSelect='1'
                                    required>
                                    <option value="0"> General </option>
                                    <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($row->id); ?>"
                                            data-parametertypes='<?php echo e($row->parameter_types); ?>'
                                            <?php echo e($row->id == $list->category_id ? 'selected' : ''); ?>>
                                            <?php echo e($row->category); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                            <div class="col-md-12 col-sm-12 form-group mandatory">

                                <?php echo e(Form::label('image', __('Image'), ['class' => 'col-12 form-label'])); ?>


                                <input accept="image/*" name='image' type='file' class="filepond" id="edit_image" />
                                <div class="edit_article_img">
                                    <img src="<?php echo e($list->image); ?>" alt="" class="edit_img" height="300px"
                                        width="500px">
                                </div>

                            </div>

                        </div>
                        <div class="row  mt-4">

                            <div class="col-md-12 col-sm-12 form-group mandatory">
                                <?php echo e(Form::label('description', __('Description'), ['class' => 'form-label col-12'])); ?>


                                <?php echo e(Form::textarea('description', $list->description, [
                                    'class' => 'form-control ',
                                    'id' => 'tinymce_editor',
                                    'data-parsley-required' => 'true',
                                ])); ?>


                            </div>
                        </div>

                        <div
                            class="col-md-12 col-sm-12 form-group <?php echo e(system_setting('seo_settings') != '' && system_setting('seo_settings') == 1 ? 'mandatory' : ''); ?>">
                            <?php echo e(Form::label('title', __('Meta Title'), ['class' => 'form-label text-center'])); ?>


                            <input type="text" name="edit_meta_title" class="form-control" id="edit_meta_title"
                                oninput="getWordCount('edit_meta_title','edit_meta_title_count','19.9px arial')"
                                placeholder="<?php echo e(__('Meta title')); ?>" value=" <?php echo e($list->meta_title); ?>"
                                <?php echo e(system_setting('seo_settings') != '' && system_setting('seo_settings') == 1 ? 'required' : ''); ?>>
                            <h6 id="edit_meta_title_count">0</h6>
                        </div>
                        <div
                            class="col-md-12 col-sm-12 form-group <?php echo e(system_setting('seo_settings') != '' && system_setting('seo_settings') == 1 ? 'mandatory' : ''); ?>">
                            <?php echo e(Form::label('title', __('Meta Keywords'), ['class' => 'form-label text-center'])); ?>


                            <input type="text" name="meta_keywords" class="form-control" id="meta_keywords"
                                placeholder="<?php echo e(__('Meta Keywords')); ?>" value=" <?php echo e($list->meta_keywords); ?>"
                                <?php echo e(system_setting('seo_settings') != '' && system_setting('seo_settings') == 1 ? 'required' : ''); ?>>

                        </div>
                        <div
                            class="col-md-12 col-sm-12 form-group <?php echo e(system_setting('seo_settings') != '' && system_setting('seo_settings') == 1 ? 'mandatory' : ''); ?>">
                            <?php echo e(Form::label('description', __('Meta Description'), ['class' => 'form-label text-center'])); ?>


                            <textarea id="edit_meta_description" name="edit_meta_description" class="form-control"
                                oninput="getWordCount('edit_meta_description','edit_meta_description_count','12.9px arial')"
                                <?php echo e(system_setting('seo_settings') != '' && system_setting('seo_settings') == 1 ? 'required' : ''); ?>><?php echo e($list->meta_description); ?></textarea>
                            <h6 id="edit_meta_description_count">0</h6>

                        </div>

                        <div class="card-footer">
                            <div class="col-12 d-flex justify-content-end">

                                <?php echo e(Form::submit(__('Save'), ['class' => 'btn btn-primary me-1 mb-1'])); ?>

                            </div>

                        </div>
                        <?php echo Form::close(); ?>

                    </div>
                </div>
            </div>

            <div class="col-md-5 col-sm-12">

                <div class="card edit_recent_articles">
                    <div class="card-header add_article_header">
                        Recent Articles
                    </div>
                    <hr>

                    <div class="card-body">

                        <div class="row">
                            
                            <?php $__currentLoopData = $recent_articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-md-12 d-flex recent_articles">

                                    <img class="article_img"
                                        src="<?php echo e($row->image != '' ? $row->image : url('assets/images/bg/Login_BG.jpg')); ?>"
                                        alt="">
                                    <div class="article_details">
                                        <div class="article_category">
                                            <?php echo e($row->category ? $row->category->category : 'General'); ?>

                                        </div>
                                        <div class="article_title">
                                            <?php echo e($row->title); ?>

                                        </div>
                                        <div class="article_description">
                                            <?php
                                                echo Str::substr(strip_tags($row->description), 0, 180) . '...';
                                            ?>
                                        </div>
                                        <div class="article_date">
                                            <?php echo e(date('d M Y', strtotime($row->created_at))); ?>


                                        </div>

                                    </div>

                                </div>
                                
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        $(document).ready(function() {
            getWordCount("edit_meta_title", "edit_meta_title_count", "19.9px arial");
            getWordCount(
                "edit_meta_description",
                "edit_meta_description_count",
                "12.9px arial"
            );
            $('#edit_image').on('click', function() {

                $('.edit_img').hide();
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wrteam-dev/ebroker/resources/views/article/edit.blade.php ENDPATH**/ ?>