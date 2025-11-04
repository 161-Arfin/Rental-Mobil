<section>
    <header class="mb-6">
        <h2 class="text-2xl font-semibold text-white">
            <?php echo e(__('Informasi Profil')); ?>

        </h2>
        <p class="mt-2 text-sm text-gray-400">
            <?php echo e(__("Perbarui nama akun dan alamat email Anda di bawah ini.")); ?>

        </p>
    </header>

    <form id="send-verification" method="post" action="<?php echo e(route('verification.send')); ?>">
        <?php echo csrf_field(); ?>
    </form>

    <form method="post" action="<?php echo e(route('profile.update')); ?>" class="space-y-6">
        <?php echo csrf_field(); ?>
        <?php echo method_field('patch'); ?>

        
        <div>
            <label for="name" class="block text-sm font-medium text-gray-300">Nama</label>
            <input id="name" name="name" type="text"
                class="mt-2 block w-full px-4 py-2 rounded-lg bg-gray-700 text-white border border-gray-600 
                       focus:ring-2 focus:ring-blue-600 focus:outline-none"
                value="<?php echo e(old('name', $user->name)); ?>" required autofocus autocomplete="name">
            <?php $__errorArgs = ['name'];
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
            <label for="email" class="block text-sm font-medium text-gray-300">Email</label>
            <input id="email" name="email" type="email"
                class="mt-2 block w-full px-4 py-2 rounded-lg bg-gray-700 text-white border border-gray-600 
                       focus:ring-2 focus:ring-blue-600 focus:outline-none"
                value="<?php echo e(old('email', $user->email)); ?>" required autocomplete="username">
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

            <?php if($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail()): ?>
                <div class="mt-4 p-3 bg-yellow-500/10 border border-yellow-500/30 rounded-lg text-yellow-400 text-sm">
                    <p>
                        <?php echo e(__('Email Anda belum diverifikasi.')); ?>

                        <button form="send-verification"
                            class="underline text-yellow-300 hover:text-yellow-100 ml-1 focus:outline-none">
                            <?php echo e(__('Kirim ulang verifikasi email')); ?>

                        </button>
                    </p>

                    <?php if(session('status') === 'verification-link-sent'): ?>
                        <p class="mt-2 text-green-400 text-sm">
                            <?php echo e(__('Tautan verifikasi baru telah dikirim ke email Anda.')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>

        
        <div class="flex items-center gap-4">
            <button type="submit"
                class="px-5 py-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg transition-all duration-200">
                Simpan
            </button>

            <?php if(session('status') === 'profile-updated'): ?>
                <p x-data="{ show: true }" x-show="show" x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-green-400">
                    <?php echo e(__('Perubahan disimpan!')); ?>

                </p>
            <?php endif; ?>
        </div>
    </form>
</section>
<?php /**PATH C:\project\rental-mobil\rental\resources\views/profile/partials/update-profile-information-form.blade.php ENDPATH**/ ?>