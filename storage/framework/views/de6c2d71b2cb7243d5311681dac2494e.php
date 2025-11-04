<section class="space-y-6">
    <header class="mb-6">
        <h2 class="text-2xl font-semibold text-red-400">
            <?php echo e(__('Hapus Akun')); ?>

        </h2>
        <p class="mt-2 text-sm text-gray-400">
            <?php echo e(__('Setelah akun Anda dihapus, semua data dan sumber daya akan dihapus secara permanen. Pastikan Anda telah mencadangkan data penting sebelum melanjutkan.')); ?>

        </p>
    </header>

    
    <button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
        class="px-5 py-2 bg-red-600 hover:bg-red-700 text-white font-semibold rounded-lg transition-all duration-200 shadow-md hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-red-500"
    >
        <?php echo e(__('Hapus Akun')); ?>

    </button>

    
    <?php if (isset($component)) { $__componentOriginal9f64f32e90b9102968f2bc548315018c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9f64f32e90b9102968f2bc548315018c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modal','data' => ['name' => 'confirm-user-deletion','show' => $errors->userDeletion->isNotEmpty(),'focusable' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'confirm-user-deletion','show' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->userDeletion->isNotEmpty()),'focusable' => true]); ?>
        <form method="post" action="<?php echo e(route('profile.destroy')); ?>" class="p-6 bg-gray-800/90 backdrop-blur-md rounded-2xl border border-gray-700 shadow-xl">
            <?php echo csrf_field(); ?>
            <?php echo method_field('delete'); ?>

            <h2 class="text-xl font-semibold text-white">
                <?php echo e(__('Yakin ingin menghapus akun ini?')); ?>

            </h2>

            <p class="mt-2 text-sm text-gray-400">
                <?php echo e(__('Setelah akun dihapus, semua data Anda akan hilang secara permanen. Masukkan password untuk mengonfirmasi.')); ?>

            </p>

            
            <div class="mt-6">
                <label for="password" class="block text-sm font-medium text-gray-300 mb-1">Password</label>
                <input
                    id="password"
                    name="password"
                    type="password"
                    placeholder="Masukkan password Anda"
                    class="w-full px-4 py-2 rounded-lg bg-gray-700 text-white border border-gray-600
                           focus:ring-2 focus:ring-red-500 focus:outline-none"
                >
                <?php $__errorArgs = ['password', 'userDeletion'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-sm text-red-400 mt-2"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            
            <div class="mt-8 flex justify-end space-x-3">
                <button
                    type="button"
                    x-on:click="$dispatch('close')"
                    class="px-4 py-2 bg-gray-600 hover:bg-gray-500 text-white rounded-lg transition-all duration-200"
                >
                    <?php echo e(__('Batal')); ?>

                </button>

                <button
                    type="submit"
                    class="px-5 py-2 bg-red-600 hover:bg-red-700 text-white font-semibold rounded-lg transition-all duration-200"
                >
                    <?php echo e(__('Hapus Akun')); ?>

                </button>
            </div>
        </form>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9f64f32e90b9102968f2bc548315018c)): ?>
<?php $attributes = $__attributesOriginal9f64f32e90b9102968f2bc548315018c; ?>
<?php unset($__attributesOriginal9f64f32e90b9102968f2bc548315018c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9f64f32e90b9102968f2bc548315018c)): ?>
<?php $component = $__componentOriginal9f64f32e90b9102968f2bc548315018c; ?>
<?php unset($__componentOriginal9f64f32e90b9102968f2bc548315018c); ?>
<?php endif; ?>
</section>
<?php /**PATH C:\project\rental-mobil\rental\resources\views/profile/partials/delete-user-form.blade.php ENDPATH**/ ?>