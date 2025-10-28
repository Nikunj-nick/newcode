<?php $__env->startSection('title'); ?>
<?php echo e(__('Article')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-title'); ?>
<div class="page-title">
	<div class="row">
		<div class="col-12 col-md-6 order-md-1 order-last">
			<h4><?php echo $__env->yieldContent('title'); ?></h4>

		</div>
		<div class="col-12 col-md-6 order-md-2 order-first article_header">
			<form action="<?php echo e(url('article_list')); ?>" method="POST" id="search_form">
				<?php echo csrf_field(); ?>
				<input type="text" class="form-control order-first" placeholder="Search" id="search_input"
					name="search">
			</form>

			<a href="<?php echo e(url('add_article')); ?>" class="btn btn-primary btn_add">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
					class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
					<path
						d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z">
					</path>
				</svg>
				Add Article
			</a>


		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<section class="section">
	<div class="row">

		<?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="col-md-3">

			<div class="card article_card">
				<img src="<?php echo e($value->image); ?>" class="article_img" alt="">
				<div class="article_title mt-2">
					<b> <?php echo e($value->title); ?></b>
				</div>
				<div class="article_description">
					<?php
					echo Str::substr(strip_tags($value->description), 0, 150) . '...';
					?>
				</div>
				<hr style="border: 1px dashed;">
				<div class="row mb-1">
					<div class="col-md-6 ">
						<div class="article_date_posted">
							Posted On
						</div>
						<div class="article_date">
							<?php echo e(date('d M Y', strtotime($value->created_at))); ?>

						</div>
					</div>
					<div class="col-md-6 text-end" id="article_action">
						<a href="<?php echo e(route('article.edit', $value->id)); ?>" id="edit_btn"
							class="btn icon btn-primary btn-sm rounded-pill mt-2" title="Edit"><i
								class="fa fa-edit edit_icon"></i></a>
						&nbsp;&nbsp;

						<a href="<?php echo e(route('article.destroy', $value->id)); ?>" id="delete_btn"
							onclick="return confirmationDelete(event);"
							class="btn icon btn-danger btn-sm rounded-pill mt-2 delete_btn" data-bs-toggle="tooltip"
							data-bs-custom-class="tooltip-dark" title="Delete"><i
								class="bi bi-trash delete_icon"></i></a>

					</div>
				</div>

			</div>

		</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	</div>
	<?php if(count($articles)>12): ?>

	<div class="row d-flex text-center mb-0">

		<form action="<?php echo e(url('article_list')); ?>" method="POST">
			<?php echo csrf_field(); ?>
			<input type="hidden" name="limit" value="1">
			<button id="show_more" class="link-button">Show More</button>
		</form>

	</div>
	<?php endif; ?>

</section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script>
 $('#show_more').on('click', function() {
            $('#get_limit').val('all');
            //get_articles("",2);
        });
        $('#search_input').on('input', function() {
            var searchValue = $(this).val();
            $('#search_form').submit();

        });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wrteam-dev/ebroker/resources/views/article/index.blade.php ENDPATH**/ ?>