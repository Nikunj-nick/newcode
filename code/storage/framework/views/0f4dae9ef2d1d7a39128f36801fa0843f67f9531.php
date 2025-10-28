<?php

$lang = Session::get('language');

?>

<?php if($lang): ?>
<?php if($lang->rtl): ?>




<link rel="stylesheet" href="<?php echo e(url('assets/css/main/rtl.css')); ?>">
<link rel="stylesheet" href="<?php echo e(url('assets/css/pages/otherpages_rtl.css')); ?>" />
<?php else: ?>
<link rel="stylesheet" href="<?php echo e(url('assets/css/main/app.css')); ?>">
<link rel="stylesheet" href="<?php echo e(url('assets/css/pages/otherpages.css')); ?>" />
<?php endif; ?>
<?php else: ?>
<link rel="stylesheet" href="<?php echo e(url('assets/css/main/app.css')); ?>">
<link rel="stylesheet" href="<?php echo e(url('assets/css/pages/otherpages.css')); ?>" />


<?php endif; ?>

<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap-switch-button@1.1.0/css/bootstrap-switch-button.min.css"
    rel="stylesheet">
<link rel="stylesheet" href="<?php echo e(url('assets/extensions/toastify-js/src/toastify.css')); ?>">
<link href="<?php echo e(url('/assets/extensions/bootstrap-table/bootstrap-table.min.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(url('/assets/extensions/bootstrap-table/fixed-columns/bootstrap-table-fixed-columns.min.css')); ?>"
    rel="stylesheet" type="text/css" />
<link href="<?php echo e(url('/assets/extensions/@fortawesome/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet"
    type="text/css" />
<link rel="stylesheet" href="<?php echo e(url('assets/extensions/magnific-popup/magnific-popup.css')); ?>">
<link href="<?php echo e(url('assets/extensions/select2/dist/css/select2.min.css')); ?>" rel="stylesheet" />
<link href="<?php echo e(url('assets/extensions/select2/dist/css/select2-bootstrap-5-theme.min.css')); ?>" rel="stylesheet" />
<link rel="stylesheet" href="<?php echo e(url('assets/extensions/sweetalert2/sweetalert2.min.css')); ?>" />
<link rel="stylesheet" href="<?php echo e(url('assets/extensions/chosen.css')); ?>" />
<link href="<?php echo e(asset('assets/css/filepond/filepond.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(asset('assets/css/filepond/filepond-plugin-image-preview.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(asset('assets/css/filepond/filepond-plugin-pdf-preview.min.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(asset('assets/css/pages/jquery-jvectormap-2.0.5.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(asset('assets/css/pages/owl.carousel.min.css')); ?>" rel="stylesheet" type="text/css" />

<style>
 

    .fontawesome-icons {
        text-align: center;
    }

    article dl {
        background-color: rgba(0, 0, 0, 0.02);
        padding: 20px;
    }

    .fontawesome-icons .the-icon {
        font-size: 24px;
        line-height: 1.2;
    }
</style><?php /**PATH /home/wrteam-dev/ebroker/resources/views/layouts/include.blade.php ENDPATH**/ ?>