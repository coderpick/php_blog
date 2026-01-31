<nav class="bg-white/80 backdrop-blur-md sticky top-0 z-50 border-b border-stone-200">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <a href="index.php" class="font-serif text-2xl font-bold text-stone-900">Minimal<span class="text-amber-600">.</span></a>
            <div class="hidden md:flex space-x-8">
                <a href="index.php" class="text-stone-600 hover:text-amber-600 transition-colors font-medium">Home</a>
                <a href="#" class="text-stone-600 hover:text-amber-600 transition-colors font-medium">Articles</a>
                <a href="#" class="text-stone-600 hover:text-amber-600 transition-colors font-medium">Categories</a>
                <a href="#" class="text-stone-600 hover:text-amber-600 transition-colors font-medium">About</a>
                <a href="#" class="text-stone-600 hover:text-amber-600 transition-colors font-medium">Contact</a>
                <a href="login.php" class="text-stone-600 hover:text-amber-600 transition-colors font-medium">Login</a>
            </div>
            <button id="mobileMenuBtn" class="md:hidden p-2 rounded-lg hover:bg-stone-100">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </div>
    <!-- Mobile Menu -->
    <div id="mobileMenu" class="hidden md:hidden bg-white border-t border-stone-200">
        <div class="px-4 py-3 space-y-2">
            <a href="index.php" class="block py-2 text-stone-600 hover:text-amber-600">Home</a>
            <a href="#" class="block py-2 text-stone-600 hover:text-amber-600">Articles</a>
            <a href="#" class="block py-2 text-stone-600 hover:text-amber-600">Categories</a>
            <a href="#" class="block py-2 text-stone-600 hover:text-amber-600">About</a>
            <a href="#" class="block py-2 text-stone-600 hover:text-amber-600">Contact</a>
            <a href="login.php" class="block py-2 text-stone-600 hover:text-amber-600">Login</a>
        </div>
    </div>
</nav>