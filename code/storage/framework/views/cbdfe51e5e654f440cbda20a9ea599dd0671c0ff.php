<input
    class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
    id="<?php echo e($attributes->get('id')); ?>"
    type="<?php echo e($attributes->get('type', 'text')); ?>"
    name="<?php echo e($attributes->get('name')); ?>"
    value="<?php echo e($attributes->get('value')); ?>"
    <?php echo e($attributes->merge(['required' => $attributes->get('required', false) ? 'required' : null ])); ?>

>
<?php /**PATH /home/wrteam-dev/ebroker/vendor/dacoto/laravel-wizard-installer/resources/views/components/input.blade.php ENDPATH**/ ?>