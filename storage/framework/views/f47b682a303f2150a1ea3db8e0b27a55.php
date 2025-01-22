

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Contact Details</h1>
        <div class="card">
            <div class="card-body">
                <p><strong>Name:</strong> <?php echo e($contact->name); ?></p>
                <p><strong>Contact:</strong> <?php echo e($contact->contact); ?></p>
                <p><strong>Email:</strong> <?php echo e($contact->email); ?></p>
                <a href="<?php echo e(route('contacts.edit', $contact)); ?>" class="btn btn-warning">Edit</a>
                <form action="<?php echo e(route('contacts.destroy', $contact)); ?>" method="POST" style="display:inline;">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\pedri\contact-management-laravel\contact-management-laravel\resources\views/contacts/show.blade.php ENDPATH**/ ?>