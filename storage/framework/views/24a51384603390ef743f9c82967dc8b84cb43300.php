<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.pets.pets-list', ['pets' => $pets]); ?>

    <?php if (isset($__componentOriginal084da17cb616e483d445b179c0dda346ed8c7415)): ?>
<?php $component = $__componentOriginal084da17cb616e483d445b179c0dda346ed8c7415; ?>
<?php unset($__componentOriginal084da17cb616e483d445b179c0dda346ed8c7415); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Paulo\Desktop\curso\laravel\exercicio_reformados\resources\views/pages/pets/index.blade.php ENDPATH**/ ?>