<br>
<div class="container">
<h1 class="text-center">Players List</h1>

<table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">Retired</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>

        <?php $__currentLoopData = $players; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $player): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th scope="row"><?php echo e($player -> id); ?></th>
            <td><?php echo e($player -> name); ?></td>
            <td><?php echo e($player -> address); ?></td>

            <td>
                <?php if($player -> retired == 1): ?>
                <i class="bi bi-emoji-laughing-fill text-primary"></i>
                <?php else: ?>
                <i class="bi bi-emoji-frown-fill text-danger"></i>
                <?php endif; ?>
            </td>
            <td>
                <a href="/players/<?php echo e($player -> id); ?>"> <button type="button" class="btn btn-success">Show</button></a>
            </td><td>
                <a href="/players/<?php echo e($player -> id); ?>/edit"> <button type="button" class="btn btn-primary">Edit</button></a>
            </td>
            <td>
                <form action="<?php echo e(url('players/' . $player->id)); ?>" method="POST">
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
<div class="container text-center">
<p><?php echo e($players->links()); ?></p>
</div><?php /**PATH C:\Users\Paulo\Desktop\curso\laravel\exercicio_reformados\resources\views/components/players/players-search.blade.php ENDPATH**/ ?>