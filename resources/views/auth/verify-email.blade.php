<x-guest-layout>

    <div class="w-full max-w-md bg-gray-800/80 backdrop-blur-md rounded-2xl shadow-2xl p-10 text-center">
        <img src="{{ asset('images/logo.svg') }}" alt="Logo" class="w-20 mx-auto mb-4">
        <h2 class="text-3xl font-bold text-white mb-6">Verifikasi Email</h2>

        <p class="text-gray-300 text-sm mb-6 leading-relaxed">
            Terima kasih telah mendaftar!<br>
            Sebelum memulai, mohon verifikasi alamat email Anda dengan mengklik tautan yang telah kami kirim.
            Jika belum menerima email, Anda bisa meminta ulang tautan verifikasi di bawah ini.
        </p>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 text-sm text-green-400 bg-green-500/10 border border-green-500/30 rounded-lg p-3 font-medium">
                Link verifikasi baru telah dikirim ke alamat email Anda.
            </div>
        @endif

        <div class="mt-6 space-y-4">
            <!-- Kirim ulang verifikasi -->
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <button type="submit"
                    class="w-full py-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg transition-all duration-200">
                    Kirim Ulang Email Verifikasi
                </button>
            </form>

            <!-- Tombol Logout -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                    class="w-full py-2 bg-gray-700 hover:bg-gray-600 text-gray-200 font-medium rounded-lg transition-all duration-200">
                    Keluar
                </button>
            </form>
        </div>
    </div>

</x-guest-layout>
