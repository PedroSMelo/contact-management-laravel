

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="mb-4">Contacts</h1>
    <a href="<?php echo e(route('contacts.create')); ?>" class="btn btn-primary mb-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Only if you are logged in.">New Contact</a>

    <div class="list-group">
        <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                    <strong><?php echo e($contact->name); ?></strong> - 
                    <?php echo e($contact->contact); ?> - 
                    <a href="mailto:<?php echo e($contact->email); ?>"><?php echo e($contact->email); ?></a>
                </div>

                <!-- <div>
                    <a href="<?php echo e(route('contacts.show', $contact->id)); ?>" class="btn btn-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Only if you are logged in.">Details</a>
                    <a href="<?php echo e(route('contacts.edit', $contact->id)); ?>" class="btn btn-warning btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Only if you are logged in.">Edit</a>
                    
                    <form action="<?php echo e(route('contacts.destroy', $contact->id)); ?>" method="POST" style="display:inline;">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Only if you are logged in." onclick="return confirm('Are you sure you want to delete this contact?')">Delete</button>
                    </form>
                </div> -->

                <div>
                    <a href="<?php echo e(route('contacts.show', $contact->id)); ?>" 
                    class="btn btn-info btn-sm <?php if(auth()->guard()->guest()): ?> disabled <?php endif; ?>" 
                    data-bs-toggle="tooltip" 
                    data-bs-placement="top" 
                    title="<?php if(auth()->guard()->guest()): ?> Faça login para acessar esta funcionalidade <?php else: ?> Visualizar detalhes <?php endif; ?>">
                        Details
                    </a>

                    <a href="<?php echo e(route('contacts.edit', $contact->id)); ?>" 
                    class="btn btn-warning btn-sm <?php if(auth()->guard()->guest()): ?> disabled <?php endif; ?>" 
                    data-bs-toggle="tooltip" 
                    data-bs-placement="top" 
                    title="<?php if(auth()->guard()->guest()): ?> Faça login para acessar esta funcionalidade <?php else: ?> Editar contato <?php endif; ?>">
                        Edit
                    </a>

                    <form action="<?php echo e(route('contacts.destroy', $contact->id)); ?>" method="POST" style="display:inline;">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" 
                                class="btn btn-danger btn-sm <?php if(auth()->guard()->guest()): ?> disabled <?php endif; ?>" 
                                data-bs-toggle="tooltip" 
                                data-bs-placement="top" 
                                title="<?php if(auth()->guard()->guest()): ?> Faça login para acessar esta funcionalidade <?php else: ?> Deletar contato <?php endif; ?>"
                                <?php if(auth()->guard()->guest()): ?> disabled <?php endif; ?>
                                onclick="return confirm('Are you sure you want to delete this contact?')">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\pedri\contact-management-laravel\contact-management-laravel\resources\views/contacts/index.blade.php ENDPATH**/ ?>