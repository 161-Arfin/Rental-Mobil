<section>
    <header class="mb-6">
        <h2 class="text-2xl font-semibold text-white">
            <?php echo e(__('Ubah Password')); ?>

        </h2>
        <p class="mt-2 text-sm text-gray-400">
            <?php echo e(__('Pastikan akun Anda menggunakan password yang kuat untuk keamanan maksimal.')); ?>

        </p>
    </header>

    <form method="post" action="<?php echo e(route('password.update')); ?>" class="space-y-6">
        <?php echo csrf_field(); ?>
        <?php echo method_field('put'); ?>

        
        <div>
            <label for="update_password_current_password" class="block text-sm font-medium text-gray-300">
                Password Saat Ini
            </label>
            <input id="update_password_current_password" name="current_password" type="password"
                class="mt-2 block w-full px-4 py-2 rounded-lg bg-gray-700 text-white border border-gray-600
                       focus:ring-2 focus:ring-blue-600 focus:outline-none"
                autocomplete="current-password">
            <?php $__errorArgs = ['current_password', 'updatePassword'];
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

        
        <div>
            <label for="update_password_password" class="block text-sm font-medium text-gray-300">
                Password Baru
            </label>
            <input id="update_password_password" name="password" type="password"
                class="mt-2 block w-full px-4 py-2 rounded-lg bg-gray-700 text-white border border-gray-600
                       focus:ring-2 focus:ring-blue-600 focus:outline-none"
                autocomplete="new-password">
            <?php $__errorArgs = ['password', 'updatePassword'];
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

        
        <div>
            <label for="update_password_password_confirmation" class="block text-sm font-medium text-gray-300">
                Konfirmasi Password Baru
            </label>
            <input id="update_password_password_confirmation" name="password_confirmation" type="password"
                class="mt-2 block w-full px-4 py-2 rounded-lg bg-gray-700 text-white border border-gray-600
                       focus:ring-2 focus:ring-blue-600 focus:outline-none"
                autocomplete="new-password">
            <?php $__errorArgs = ['password_confirmation', 'updatePassword'];
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

        
        <div class="flex items-center gap-4">
            <button type="submit"
                class="px-5 py-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg transition-all duration-200">
                Simpan
            </button>

            <?php if(session('status') === 'password-updated'): ?>
                <p x-data="{ show: true }" x-show="show" x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-green-400">
                    <?php echo e(__('Password berhasil diperbarui!')); ?>

                </p>
            <?php endif; ?>
        </div>
    </form>
</section>
<?php /**PATH C:\project\rental-mobil\rental\resources\views/profile/partials/update-password-form.blade.php ENDPATH**/ ?>