

<?php $__env->startSection('content'); ?>
<div class="container">
    <br>
    <form method="GET" action="<?php echo e(route('tasks.index')); ?>" class="mb-4">
        <div class="form-row">
            <div class="col">
                <label for="category">Categories</label>
                <select name="category" id="category" class="form-control">
                    <option value="">Tout</option>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($category->id); ?>" <?php echo e(request('category') == $category->id ? 'selected' : ''); ?>>
                            <?php echo e($category->name); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            
            <div class="col">
                <label for="search">Titre</label>
                <input type="text" name="search" id="search" class="form-control" placeholder="Rechercher la tâche" value="<?php echo e(request('search')); ?>">
            </div>
            <div class="col">
                <label for="submit">Filtrer</label>
                <button type="submit" class="btn btn-primary form-control">Filtrer</button>
            </div>
        </div>
    </form>
    <a href="<?php echo e(route('tasks.create')); ?>" class="btn btn-primary mb-3">Creer une Tâche</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titre</th>
                <th>Statut</th>
                <th>Categorie</th>
                <th>Date de Réalisation de la tache</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($task->id); ?></td>
                    <td><?php echo e($task->title); ?></td>
                    <td><?php echo e($task->status); ?></td>
                    <td><?php echo e($task->category->name); ?></td>
                    <td><?php echo e($task->due_date); ?></td>
                    <td>
                        <a href="<?php echo e(route('tasks.show', $task)); ?>" class="btn btn-info">Voir</a>
                        <a href="<?php echo e(route('tasks.edit', $task)); ?>" class="btn btn-warning">Mise à jours</a>
                        <form action="<?php echo e(route('tasks.destroy', $task)); ?>" method="POST" style="display:inline;">
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

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\projetIfe\resources\views/tasks/index.blade.php ENDPATH**/ ?>