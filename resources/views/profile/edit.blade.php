<x-app-layout>

    <div class="py-12 bg-gradient-to-b from-gray-900 via-gray-800 to-gray-900 min-h-screen pt-32">

        <!-- JUDUL HALAMAN -->
        <div class="max-w-4xl mx-auto mb-10 text-center">
            <h1 class="text-3xl md:text-4xl font-bold text-white mb-2">Profil Saya</h1>
            <p class="text-gray-400">Kelola informasi akun dan kata sandi Anda di sini.</p>
        </div>

        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 space-y-10">

            {{-- 🔹 Update Profile Information --}}
            <div class="bg-gray-800/80 backdrop-blur-md p-8 rounded-2xl shadow-2xl border border-gray-700">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            {{-- 🔹 Update Password --}}
            <div class="bg-gray-800/80 backdrop-blur-md p-8 rounded-2xl shadow-2xl border border-gray-700">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            {{-- 🔹 Delete Account --}}
            <div class="bg-gray-800/80 backdrop-blur-md p-8 rounded-2xl shadow-2xl border border-gray-700">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
