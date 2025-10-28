<button
    type="<?php echo e($attributes->get('type', 'button')); ?>"
    class="bg-<?php echo e($attributes->get('color', 'blue')); ?>-500 hover:bg-<?php echo e($attributes->get('color', 'blue')); ?>-700 text-white font-bold py-2 px-4 rounded inline-flex items-center"
>
    <?php echo e($slot); ?>

</button>
<?php /**PATH /home/wrteam-dev/ebroker/resources/views/vendor/installer/components/button.blade.php ENDPATH**/ ?>