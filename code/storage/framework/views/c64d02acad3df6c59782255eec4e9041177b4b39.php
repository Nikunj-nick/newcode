<label
    for="<?php echo e($attributes->get('for')); ?>"
    class="block font-medium leading-5 text-gray-700 pb-2"
>
    <?php echo e($slot); ?>

    <?php if($attributes->get('required', false)): ?>
        <span class="text-red-400">*</span>
    <?php endif; ?>
</label>
<?php /**PATH /home/wrteam-dev/ebroker/resources/views/vendor/installer/components/label.blade.php ENDPATH**/ ?>