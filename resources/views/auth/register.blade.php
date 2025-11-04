<x-guest-layout>
    <div class="w-full max-w-md bg-gray-800/80 backdrop-blur-md rounded-2xl shadow-2xl p-8">
        <img src="{{ asset('images/logo.svg') }}" alt="Logo" class="w-20 mx-auto mb-3">
        <h2 class="text-3xl text-center text-white font-bold mb-6">Register</h2>

        <form method="POST" action="{{ route('register') }}" class="space-y-5">
            @csrf

            <!-- Nama -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-300">Nama</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required autofocus 
                class="w-full mt-1 px-4 py-2 rounded-lg bg-gray-700 text-white border border-gray-600 focus:ring-2 focus:ring-blue-500 focus-outline-none">
            </div>

            <!-- email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-300">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required 
                class="w-full mt-1 px-4 py-2 rounded-lg bg-gray-700 text-white border border-gray-600 focus:ring-2 focus:ring-blue-500 focus-outline-none">
            </div>  
            
            <!-- password -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-300">Password</label>
                <input type="password" id="password" name="password" required 
                class="w-full mt-1 px-4 py-2 rounded-lg bg-gray-700 text-white border border-gray-600 focus:ring-2 focus:ring-blue-500 focus-outline-none">
            </div>

            <!-- confirm password -->
            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-gray-300">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required 
                class="w-full mt-1 px-4 py-2 rounded-lg bg-gray-700 text-white border border-gray-600 focus:ring-2 focus:ring-blue-500 focus-outline-none">
            </div>

            <button type="submit" class="w-full py-2 mt-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg transition-all duration-200">
                Daftar
            </button>
        </form>

        <p class="mt-6 text-center text-gray-400 text-sm">
            Sudah punya akun?
            <a href="{{ route('login') }}" class="text-blue-400 hover:underline">Masuk</a>
        </p>
    </div>
</x-guest-layout>