<x-guest-layout>

    <div class="w-full max-w-md bg-gray-800/80 backdrop-blur-md rounded-2xl shadow-2xl p-10">
        <img src="{{ asset('images/logo.svg') }}" alt="Logo" class="w-20 mx-auto mb-3">
        <h2 class="text-3xl font-bold text-center text-white mb-6">Reset Password</h2>

        @if ($errors->any())
            <div class="mb-4 text-sm text-red-400 bg-red-500/10 border border-red-500/30 rounded-lg p-3 text-center">
                <strong>Terjadi kesalahan!</strong> Pastikan semua data benar.
            </div>
        @endif

        <form method="POST" action="{{ route('password.store') }}" class="space-y-5">
            @csrf

            <!-- Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-300">Email</label>
                <input type="email" id="email" name="email"
                    value="{{ old('email', $request->email) }}" required autofocus
                    class="w-full mt-1 px-4 py-2 rounded-lg bg-gray-700 text-white border border-gray-600
                           focus:ring-2 focus:ring-blue-800 focus:outline-none">
                @error('email')
                    <p class="text-sm text-red-400 mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password Baru -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-300">Password Baru</label>
                <input type="password" id="password" name="password" required
                    class="w-full mt-1 px-4 py-2 rounded-lg bg-gray-700 text-white border border-gray-600
                           focus:ring-2 focus:ring-blue-800 focus:outline-none">
                @error('password')
                    <p class="text-sm text-red-400 mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Konfirmasi Password -->
            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-gray-300">Konfirmasi Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required
                    class="w-full mt-1 px-4 py-2 rounded-lg bg-gray-700 text-white border border-gray-600
                           focus:ring-2 focus:ring-blue-800 focus:outline-none">
                @error('password_confirmation')
                    <p class="text-sm text-red-400 mt-2">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit"
                class="w-full py-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg
                       transition-all duration-200">
                Simpan Password Baru
            </button>

            <div class="text-center mt-4">
                <a href="{{ route('login') }}" class="text-sm text-gray-400 hover:text-blue-400 transition">
                    Kembali ke Login
                </a>
            </div>
        </form>
    </div>

</x-guest-layout>
