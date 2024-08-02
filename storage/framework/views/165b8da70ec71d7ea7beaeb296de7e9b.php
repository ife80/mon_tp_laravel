

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Modification de Tâche</h1>
    <form action="<?php echo e(route('tasks.update', $task)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group">
            <label for="title">Titre</label>
            <input type="text" name="title" id="title" class="form-control" value="<?php echo e($task->title); ?>" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control"><?php echo e($task->description); ?></textarea>
        </div>
        <div class="form-group">
            <label for="status">Statut</label>
            <input type="text" name="status" id="status" class="form-control" value="<?php echo e($task->status); ?>" required>
        </div>
        <div class="form-group">
            <label for="due_date">Date de Réalisation de la tache</label>
            <input type="date" name="due_date" id="due_date" class="form-control" value="<?php echo e($task->due_date); ?>">
        </div>
        <div class="form-group">
            <label for="category_id">Categorie</label>
            <select name="category_id" id="category_id" class="form-control" required>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($category->id); ?>" <?php echo e($task->category_id == $category->id ? 'selected' : ''); ?>>
                        <?php echo e($category->name); ?>

                    </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\projetIfe\resources\views/tasks/edit.blade.php ENDPATH**/ ?>