<x-guest-layout>

    <div class="w-full max-w-md bg-gray-800/80 backdrop-blur-md rounded-2xl shadow-2xl p-10">
        <img src="{{ asset('images/logo.svg') }}" alt="Logo" class="w-20 mx-auto mb-3">
        <h2 class="text-3xl font-bold text-center text-white mb-6">Login</h2>

        {{-- 🔥 Pesan Error Global (Email/Password Salah) --}}
        @if ($errors->any())
            <div class="mb-4 text-sm text-red-400 bg-red-500/10 border border-red-500/30 rounded-lg p-3 text-center">
                <strong>Email atau Password salah.</strong> Silakan coba lagi.
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="space-y-5">
            @csrf

            <!--Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-300">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required autofocus
                    class="w-full mt-1 px-4 py-2 rounded-lg bg-gray-700 text-white border border-gray-600 focus:ring-2 focus:ring-blue-800 focus:outline-none">
                @error('email')
                    <p class="text-sm text-red-400 mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-300">Password</label>
                <input type="password" name="password" id="password" required
                    class="w-full mt-1 px-4 py-2 rounded-lg bg-gray-700 text-white border border-gray-600 focus:ring-2 focus:ring-blue-800 focus:outline-none">
                @error('password')
                    <p class="text-sm text-red-400 mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Remember Me -->
            <div class="flex items-center justify-between">
                <label class="flex items-center text-gray-400 text-sm">
                    <input type="checkbox" name="remember" class="rounded border-gray-600 bg-gray-700">
                    <span class="ml-2">Ingatkan saya</span>
                </label>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-sm text-blue-400 hover:underline">Lupa Password?</a>
                @endif
            </div>

            <button type="submit"
                class="w-full py-2 mt-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg transition-all duration-200">
                Masuk
            </button>
        </form>

        <p class="mt-6 text-center text-gray-600 text-sm">
            Belum punya akun?
            <a href="{{ route('register') }}" class="text-blue-400 hover:underline">Daftar Sekarang</a>
        </p>
    </div>

</x-guest-layout>
