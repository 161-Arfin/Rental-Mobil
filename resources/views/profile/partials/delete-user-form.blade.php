<section class="space-y-6">
    <header class="mb-6">
        <h2 class="text-2xl font-semibold text-red-400">
            {{ __('Hapus Akun') }}
        </h2>
        <p class="mt-2 text-sm text-gray-400">
            {{ __('Setelah akun Anda dihapus, semua data dan sumber daya akan dihapus secara permanen. Pastikan Anda telah mencadangkan data penting sebelum melanjutkan.') }}
        </p>
    </header>

    {{-- 🔹 Tombol Hapus Akun --}}
    <button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
        class="px-5 py-2 bg-red-600 hover:bg-red-700 text-white font-semibold rounded-lg transition-all duration-200 shadow-md hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-red-500"
    >
        {{ __('Hapus Akun') }}
    </button>

    {{-- 🔹 Modal Konfirmasi --}}
    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6 bg-gray-800/90 backdrop-blur-md rounded-2xl border border-gray-700 shadow-xl">
            @csrf
            @method('delete')

            <h2 class="text-xl font-semibold text-white">
                {{ __('Yakin ingin menghapus akun ini?') }}
            </h2>

            <p class="mt-2 text-sm text-gray-400">
                {{ __('Setelah akun dihapus, semua data Anda akan hilang secara permanen. Masukkan password untuk mengonfirmasi.') }}
            </p>

            {{-- 🔹 Input Password --}}
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
                @error('password', 'userDeletion')
                    <p class="text-sm text-red-400 mt-2">{{ $message }}</p>
                @enderror
            </div>

            {{-- 🔹 Tombol Aksi --}}
            <div class="mt-8 flex justify-end space-x-3">
                <button
                    type="button"
                    x-on:click="$dispatch('close')"
                    class="px-4 py-2 bg-gray-600 hover:bg-gray-500 text-white rounded-lg transition-all duration-200"
                >
                    {{ __('Batal') }}
                </button>

                <button
                    type="submit"
                    class="px-5 py-2 bg-red-600 hover:bg-red-700 text-white font-semibold rounded-lg transition-all duration-200"
                >
                    {{ __('Hapus Akun') }}
                </button>
            </div>
        </form>
    </x-modal>
</section>
