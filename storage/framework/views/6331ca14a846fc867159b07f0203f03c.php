<?php if (isset($component)) { $__componentOriginal69dc84650370d1d4dc1b42d016d7226b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal69dc84650370d1d4dc1b42d016d7226b = $attributes; } ?>
<?php $component = App\View\Components\GuestLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\GuestLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

    <div class="w-full max-w-md bg-gray-800/80 backdrop-blur-md rounded-2xl shadow-2xl p-10">
        <img src="<?php echo e(asset('images/logo.svg')); ?>" alt="Logo" class="w-20 mx-auto mb-3">
        <h2 class="text-3xl font-bold text-center text-white mb-6">Reset Password</h2>

        <?php if($errors->any()): ?>
            <div class="mb-4 text-sm text-red-400 bg-red-500/10 border border-red-500/30 rounded-lg p-3 text-center">
                <strong>Terjadi kesalahan!</strong> Pastikan semua data benar.
            </div>
        <?php endif; ?>

        <form method="POST" action="<?php echo e(route('password.store')); ?>" class="space-y-5">
            <?php echo csrf_field(); ?>

            <!-- Token -->
            <input type="hidden" name="token" value="<?php echo e($request->route('token')); ?>">

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-300">Email</label>
                <input type="email" id="email" name="email"
                    value="<?php echo e(old('email', $request->email)); ?>" required autofocus
                    class="w-full mt-1 px-4 py-2 rounded-lg bg-gray-700 text-white border border-gray-600
                           focus:ring-2 focus:ring-blue-800 focus:outline-none">
                <?php $__errorArgs = ['email'];
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

            <!-- Password Baru -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-300">Password Baru</label>
                <input type="password" id="password" name="password" required
                    class="w-full mt-1 px-4 py-2 rounded-lg bg-gray-700 text-white border border-gray-600
                           focus:ring-2 focus:ring-blue-800 focus:outline-none">
                <?php $__errorArgs = ['password'];
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

            <!-- Konfirmasi Password -->
            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-gray-300">Konfirmasi Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required
                    class="w-full mt-1 px-4 py-2 rounded-lg bg-gray-700 text-white border border-gray-600
                           focus:ring-2 focus:ring-blue-800 focus:outline-none">
                <?php $__errorArgs = ['password_confirmation'];
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

            <button type="submit"
                class="w-full py-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg
                       transition-all duration-200">
                Simpan Password Baru
            </button>

            <div class="text-center mt-4">
                <a href="<?php echo e(route('login')); ?>" class="text-sm text-gray-400 hover:text-blue-400 transition">
                    Kembali ke Login
                </a>
            </div>
        </form>
    </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal69dc84650370d1d4dc1b42d016d7226b)): ?>
<?php $attributes = $__attributesOriginal69dc84650370d1d4dc1b42d016d7226b; ?>
<?php unset($__attributesOriginal69dc84650370d1d4dc1b42d016d7226b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal69dc84650370d1d4dc1b42d016d7226b)): ?>
<?php $component = $__componentOriginal69dc84650370d1d4dc1b42d016d7226b; ?>
<?php unset($__componentOriginal69dc84650370d1d4dc1b42d016d7226b); ?>
<?php endif; ?>
<?php /**PATH C:\project\rental-mobil\rental\resources\views/auth/reset-password.blade.php ENDPATH**/ ?>