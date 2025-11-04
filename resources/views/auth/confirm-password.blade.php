<x-guest-layout>

    <div class="w-full max-w-md bg-gray-800/80 backdrop-blur-md rounded-2xl shadow-2xl p-10">
        <img src="{{ asset('images/logo.svg') }}" alt="Logo" class="w-20 mx-auto mb-3">
        <h2 class="text-3xl font-bold text-center text-white mb-6">Konfirmasi Password</h2>

        <p class="text-gray-300 text-sm mb-6 text-center leading-relaxed">
            Ini adalah area aman dari aplikasi. <br>
            Mohon konfirmasi password Anda sebelum melanjutkan.
        </p>

        @if ($errors->any())
            <div class="mb-4 text-sm text-red-400 bg-red-500/10 border border-red-500/30 rounded-lg p-3 text-center">
                <strong>Password salah.</strong> Silakan coba lagi.
            </div>
        @endif

        <form method="POST" action="{{ route('password.confirm') }}" class="space-y-5">
            @csrf

            <!-- Password -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-300">Password</label>
                <input type="password" name="password" id="password" required
                    class="w-full mt-1 px-4 py-2 rounded-lg bg-gray-700 text-white border border-gray-600
                           focus:ring-2 focus:ring-blue-800 focus:outline-none">
                @error('password')
                    <p class="text-sm text-red-400 mt-2">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit"
                class="w-full py-2 mt-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg transition-all duration-200">
                Konfirmasi
            </button>
        </form>
    </div>

</x-guest-layout>
