<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.pets.pet-form-edit' , ['pet' => $pet , 'players' => $players]); ?>
    <?php if (isset($__componentOriginalc9c92508385d29651a153f4b08fde43330d0819b)): ?>
<?php $component = $__componentOriginalc9c92508385d29651a153f4b08fde43330d0819b; ?>
<?php unset($__componentOriginalc9c92508385d29651a153f4b08fde43330d0819b); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Paulo\Desktop\curso\laravel\exercicio_reformados\resources\views/pages/pets/edit.blade.php ENDPATH**/ ?>