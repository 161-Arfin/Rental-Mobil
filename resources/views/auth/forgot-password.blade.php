<x-guest-layout>

    <div class="w-full max-w-md bg-gray-800/80 backdrop-blur-md rounded-2xl shadow-2xl p-10">
        <img src="{{ asset('images/logo.svg') }}" alt="Logo" class="w-20 mx-auto mb-3">
        <h2 class="text-3xl font-bold text-center text-white mb-6">Lupa Password</h2>

        <p class="text-sm text-gray-400 text-center mb-6 leading-relaxed">
            Masukkan alamat email yang terdaftar. Kami akan mengirimkan link untuk mereset password Anda.
        </p>

        <!-- Session Status -->
        @if (session('status'))
            <div class="mb-4 text-sm text-green-400 text-center font-medium">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}" class="space-y-5">
            @csrf

            <!-- Email Address -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-300">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required autofocus
                class="w-full mt-1 px-4 py-2 rounded-lg bg-gray-700 text-white border border-gray-600 focus:ring-2 focus:ring-blue-800 focus:outline-none">
                @error('email')
                    <p class="text-sm text-red-400 mt-2">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit"
                class="w-full py-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg transition-all duration-200">
                Kirim Link Reset Password
            </button>

            <div class="text-center mt-4">
                <a href="{{ route('login') }}" class="text-sm text-gray-400 hover:text-blue-400 transition">
                    Kembali ke Login
                </a>
            </div>
        </form>
    </div>

</x-guest-layout>
