

<?php $__env->startSection('content'); ?>
<div class="container">
    <br>
    <a href="<?php echo e(route('categories.create')); ?>" class="btn btn-primary mb-3">Créer une Catégorie</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($category->id); ?></td>
                    <td><?php echo e($category->name); ?></td>
                    <td>
                        <a href="<?php echo e(route('categories.show', $category)); ?>" class="btn btn-info">Voir</a>
                        <a href="<?php echo e(route('categories.edit', $category)); ?>" class="btn btn-warning">Mise à jours</a>
                        <form action="<?php echo e(route('categories.destroy', $category)); ?>" method="POST" style="display:inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\projetIfe\resources\views/categories/index.blade.php ENDPATH**/ ?>