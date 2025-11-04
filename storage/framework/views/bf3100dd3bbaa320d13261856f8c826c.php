<footer class="bg-gray-950/60 border-t border-gray-800 text-gray-400">
    <div class="max-w-7xl mx-auto px-6 py-10 flex flex-col md:flex-row justify-between items-center gap-6">
        
        <!-- Brand -->
        <div class="flex items-center space-x-3">
            <img src="<?php echo e(asset('images/logo.svg')); ?>" alt="Logo" class="w-10 h-auto">
            <h3 class="text-xl font-semibold text-blue-400">RentalMobil</h3>
        </div>

        <!-- Menu -->
        <div class="flex flex-wrap justify-center gap-6 text-sm">
            <a href="/" class="hover:text-blue-400 transition">Home</a>
            <a href="#cars" class="hover:text-blue-400 transition">Daftar Mobil</a>
            <a href="#about" class="hover:text-blue-400 transition">Tentang</a>
            <a href="#contact" class="hover:text-blue-400 transition">Kontak</a>
        </div>

        <!-- Sosial Media -->
        <div class="flex space-x-4 text-gray-500">
            <a href="#" class="hover:text-blue-400 transition" title="Instagram">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M7.75 2A5.75 5.75 0 0 0 2 7.75v8.5A5.75 5.75 0 0 0 7.75 22h8.5A5.75 5.75 0 0 0 22 16.25v-8.5A5.75 5.75 0 0 0 16.25 2h-8.5ZM12 8a4 4 0 1 1 0 8 4 4 0 0 1 0-8Zm5.25-.25a.75.75 0 1 1 0 1.5.75.75 0 0 1 0-1.5Zm-5.25 2.25a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"/>
                </svg>
            </a>
            <a href="#" class="hover:text-blue-400 transition" title="Facebook">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M13 3h4a1 1 0 0 1 1 1v3h-2a2 2 0 0 0-2 2v3h4l-1 4h-3v8h-4v-8H8v-4h2V9a4 4 0 0 1 4-4Z"/>
                </svg>
            </a>
            <a href="#" class="hover:text-blue-400 transition" title="Twitter / X">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M21 3H3v18h18V3Zm-6.56 5.93 2.41-2.41 1.12 1.12-2.43 2.43 2.43 2.43-1.12 1.12-2.41-2.41-2.43 2.43-1.12-1.12 2.43-2.43-2.43-2.43 1.12-1.12 2.43 2.43Z"/>
                </svg>
            </a>
        </div>
    </div>

    <!-- Copyright -->
    <div class="border-t border-gray-800 text-center py-4 text-sm text-gray-500">
        &copy; <?php echo e(date('Y')); ?> <span class="text-blue-400 font-semibold">RentalMobil</span>. All Rights Reserved.
    </div>
</footer>
<?php /**PATH C:\project\rental-mobil\rental\resources\views/layouts/footer.blade.php ENDPATH**/ ?>