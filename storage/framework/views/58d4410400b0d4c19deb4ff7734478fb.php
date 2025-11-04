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

    <div class="w-full max-w-md bg-gray-800/80 backdrop-blur-md rounded-2xl shadow-2xl p-10 text-center">
        <img src="<?php echo e(asset('images/logo.svg')); ?>" alt="Logo" class="w-20 mx-auto mb-4">
        <h2 class="text-3xl font-bold text-white mb-6">Verifikasi Email</h2>

        <p class="text-gray-300 text-sm mb-6 leading-relaxed">
            Terima kasih telah mendaftar!<br>
            Sebelum memulai, mohon verifikasi alamat email Anda dengan mengklik tautan yang telah kami kirim.
            Jika belum menerima email, Anda bisa meminta ulang tautan verifikasi di bawah ini.
        </p>

        <?php if(session('status') == 'verification-link-sent'): ?>
            <div class="mb-4 text-sm text-green-400 bg-green-500/10 border border-green-500/30 rounded-lg p-3 font-medium">
                Link verifikasi baru telah dikirim ke alamat email Anda.
            </div>
        <?php endif; ?>

        <div class="mt-6 space-y-4">
            <!-- Kirim ulang verifikasi -->
            <form method="POST" action="<?php echo e(route('verification.send')); ?>">
                <?php echo csrf_field(); ?>
                <button type="submit"
                    class="w-full py-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg transition-all duration-200">
                    Kirim Ulang Email Verifikasi
                </button>
            </form>

            <!-- Tombol Logout -->
            <form method="POST" action="<?php echo e(route('logout')); ?>">
                <?php echo csrf_field(); ?>
                <button type="submit"
                    class="w-full py-2 bg-gray-700 hover:bg-gray-600 text-gray-200 font-medium rounded-lg transition-all duration-200">
                    Keluar
                </button>
            </form>
        </div>
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
<?php /**PATH C:\project\rental-mobil\rental\resources\views/auth/verify-email.blade.php ENDPATH**/ ?>