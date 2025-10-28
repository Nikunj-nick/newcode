<?php $__env->startSection('step'); ?>
    <p class="pb-3 text-gray-800">
        Below you should enter your purchase code
    </p>
    <?php if(isset($error)): ?>
        <div class="bg-red-100 border-l-4 border-red-500 p-4 mb-3">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <p class="text-sm leading-5 text-red-700">
                        <?php echo $error; ?>

                    </p>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <form method="post" action="<?php echo e(route('LaravelWizardInstaller::install.setPurchase')); ?>">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="purchase_code" class="block font-medium leading-5 text-gray-700 pb-2">Purchase Code <span
                    class="text-red-400">*</span></label>
            <input
                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="purchase_code" type="text" name="purchase_code" value="<?php echo e($values['purchase_code'] ?? ''); ?>"
                required>
        </div>
        <div class="flex justify-end">
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-flex items-center">
                Next step
                <svg class="fill-current w-5 h-5 ml-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd" />
                </svg>
            </button>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('installer::install', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wrteam-dev/ebroker/vendor/dacoto/laravel-wizard-installer/resources/views/steps/purchase.blade.php ENDPATH**/ ?>