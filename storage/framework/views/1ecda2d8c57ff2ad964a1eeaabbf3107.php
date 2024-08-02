

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Details de la Catégorie</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"><?php echo e($category->name); ?></h5>
            <a href="<?php echo e(route('categories.index')); ?>" class="btn btn-secondary">Retour</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\projetIfe\resources\views/categories/show.blade.php ENDPATH**/ ?>