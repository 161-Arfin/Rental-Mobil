<section>
    <header class="mb-6">
        <h2 class="text-2xl font-semibold text-white">
            {{ __('Informasi Profil') }}
        </h2>
        <p class="mt-2 text-sm text-gray-400">
            {{ __("Perbarui nama akun dan alamat email Anda di bawah ini.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="space-y-6">
        @csrf
        @method('patch')

        {{-- 🔹 Nama --}}
        <div>
            <label for="name" class="block text-sm font-medium text-gray-300">Nama</label>
            <input id="name" name="name" type="text"
                class="mt-2 block w-full px-4 py-2 rounded-lg bg-gray-700 text-white border border-gray-600 
                       focus:ring-2 focus:ring-blue-600 focus:outline-none"
                value="{{ old('name', $user->name) }}" required autofocus autocomplete="name">
            @error('name')
                <p class="text-sm text-red-400 mt-2">{{ $message }}</p>
            @enderror
        </div>

        {{-- 🔹 Email --}}
        <div>
            <label for="email" class="block text-sm font-medium text-gray-300">Email</label>
            <input id="email" name="email" type="email"
                class="mt-2 block w-full px-4 py-2 rounded-lg bg-gray-700 text-white border border-gray-600 
                       focus:ring-2 focus:ring-blue-600 focus:outline-none"
                value="{{ old('email', $user->email) }}" required autocomplete="username">
            @error('email')
                <p class="text-sm text-red-400 mt-2">{{ $message }}</p>
            @enderror

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div class="mt-4 p-3 bg-yellow-500/10 border border-yellow-500/30 rounded-lg text-yellow-400 text-sm">
                    <p>
                        {{ __('Email Anda belum diverifikasi.') }}
                        <button form="send-verification"
                            class="underline text-yellow-300 hover:text-yellow-100 ml-1 focus:outline-none">
                            {{ __('Kirim ulang verifikasi email') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 text-green-400 text-sm">
                            {{ __('Tautan verifikasi baru telah dikirim ke email Anda.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        {{-- 🔹 Tombol Simpan --}}
        <div class="flex items-center gap-4">
            <button type="submit"
                class="px-5 py-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg transition-all duration-200">
                Simpan
            </button>

            @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-green-400">
                    {{ __('Perubahan disimpan!') }}
                </p>
            @endif
        </div>
    </form>
</section>
