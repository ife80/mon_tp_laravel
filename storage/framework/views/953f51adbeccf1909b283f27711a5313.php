

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Details de la Tâche</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"><span style="text-decoration: underline;">Titre :</span> <?php echo e($task->title); ?></h5>
            <p class="card-text"><span style="text-decoration: underline;">Description :</span> <?php echo e($task->description); ?></p>
            <p><span style="text-decoration: underline;">Status:</span> <?php echo e($task->status); ?></p>
            <p><span style="text-decoration: underline;">Date de Réalisation de la tâche:</span> <?php echo e($task->due_date); ?></p>
            <p><span style="text-decoration: underline;">Categorie:</span> <?php echo e($task->category->name); ?></p>
            <a href="<?php echo e(route('tasks.index')); ?>" class="btn btn-secondary">Retourner à la liste des Tâches</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\projetIfe\resources\views/tasks/show.blade.php ENDPATH**/ ?>