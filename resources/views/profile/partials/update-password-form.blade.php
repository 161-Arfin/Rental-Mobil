<section>
    <header class="mb-6">
        <h2 class="text-2xl font-semibold text-white">
            {{ __('Ubah Password') }}
        </h2>
        <p class="mt-2 text-sm text-gray-400">
            {{ __('Pastikan akun Anda menggunakan password yang kuat untuk keamanan maksimal.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="space-y-6">
        @csrf
        @method('put')

        {{-- 🔹 Password Saat Ini --}}
        <div>
            <label for="update_password_current_password" class="block text-sm font-medium text-gray-300">
                Password Saat Ini
            </label>
            <input id="update_password_current_password" name="current_password" type="password"
                class="mt-2 block w-full px-4 py-2 rounded-lg bg-gray-700 text-white border border-gray-600
                       focus:ring-2 focus:ring-blue-600 focus:outline-none"
                autocomplete="current-password">
            @error('current_password', 'updatePassword')
                <p class="text-sm text-red-400 mt-2">{{ $message }}</p>
            @enderror
        </div>

        {{-- 🔹 Password Baru --}}
        <div>
            <label for="update_password_password" class="block text-sm font-medium text-gray-300">
                Password Baru
            </label>
            <input id="update_password_password" name="password" type="password"
                class="mt-2 block w-full px-4 py-2 rounded-lg bg-gray-700 text-white border border-gray-600
                       focus:ring-2 focus:ring-blue-600 focus:outline-none"
                autocomplete="new-password">
            @error('password', 'updatePassword')
                <p class="text-sm text-red-400 mt-2">{{ $message }}</p>
            @enderror
        </div>

        {{-- 🔹 Konfirmasi Password --}}
        <div>
            <label for="update_password_password_confirmation" class="block text-sm font-medium text-gray-300">
                Konfirmasi Password Baru
            </label>
            <input id="update_password_password_confirmation" name="password_confirmation" type="password"
                class="mt-2 block w-full px-4 py-2 rounded-lg bg-gray-700 text-white border border-gray-600
                       focus:ring-2 focus:ring-blue-600 focus:outline-none"
                autocomplete="new-password">
            @error('password_confirmation', 'updatePassword')
                <p class="text-sm text-red-400 mt-2">{{ $message }}</p>
            @enderror
        </div>

        {{-- 🔹 Tombol Simpan --}}
        <div class="flex items-center gap-4">
            <button type="submit"
                class="px-5 py-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg transition-all duration-200">
                Simpan
            </button>

            @if (session('status') === 'password-updated')
                <p x-data="{ show: true }" x-show="show" x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-green-400">
                    {{ __('Password berhasil diperbarui!') }}
                </p>
            @endif
        </div>
    </form>
</section>
