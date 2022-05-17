<br>
<div class="container">
<h1 class="text-center">Pets List</h1>

<?php if(session('status')): ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <?php echo e(session('status')); ?>

    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php endif; ?>

<table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Pet Name</th>
            <th scope="col">Color</th>
            <th scope="col">Player</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>

        <?php $__currentLoopData = $pets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th scope="row"><?php echo e($pet -> id); ?></th>
            <td><?php echo e($pet -> name); ?></td>
            <td><?php echo e($pet -> color); ?></td>
            <td>
                <?php echo e($pet -> player -> name); ?>

            </td>

            <td>
                <a href="/pets/<?php echo e($pet -> id); ?>"> <button type="button" class="btn btn-success">Show</button></a>
            </td><td>
                <a href="/pets/<?php echo e($pet -> id); ?>/edit"> <button type="button" class="btn btn-primary">Edit</button></a>
            </td>
            <td>
                <form action="<?php echo e(url('pets/' . $pet->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
   
</table>

</div>
<div class="container">
<p><?php echo e($pets->links()); ?></p>
</div><?php /**PATH C:\Users\Paulo\Desktop\curso\laravel\exercicio_reformados\resources\views/components/pets/pets-list.blade.php ENDPATH**/ ?>