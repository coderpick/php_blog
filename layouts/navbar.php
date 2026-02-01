<?php include_once "libs/Auth.php"; ?>
<nav class="bg-white/80 backdrop-blur-md sticky top-0 z-50 border-b border-stone-200">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <a href="index.php" class="font-serif text-2xl font-bold text-stone-900">Minimal<span class="text-amber-600">.</span></a>
            <div class="hidden md:flex space-x-8 items-center">
                <a href="index.php" class="text-stone-600 hover:text-amber-600 transition-colors font-medium">Home</a>
                <a href="#" class="text-stone-600 hover:text-amber-600 transition-colors font-medium">Articles</a>
                <a href="#" class="text-stone-600 hover:text-amber-600 transition-colors font-medium">Categories</a>
                <a href="#" class="text-stone-600 hover:text-amber-600 transition-colors font-medium">About</a>
                <a href="#" class="text-stone-600 hover:text-amber-600 transition-colors font-medium">Contact</a>
                <?php if (Auth::check()): ?>
                    <div class="relative ml-3 group">
                        <button type="button" id="userMenuBtn" class="flex items-center space-x-2 text-sm bg-white rounded-full focus:outline-none focus:ring-2 focus:ring-amber-500 transition-all">
                            <span class="hidden lg:block font-medium text-stone-700"><?php echo htmlspecialchars($_SESSION['user_name']); ?></span>
                            <img class="h-9 w-9 rounded-full object-cover border border-stone-200" src="https://ui-avatars.com/api/?name=<?php echo urlencode($_SESSION['user_name']); ?>&background=0f172a&color=fff" alt="">
                        </button>
                        
                        <!-- Dropdown Menu -->
                        <div id="userMenuDropdown" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-lg py-1 ring-1 ring-black ring-opacity-5 focus:outline-none z-50 transform transition-all duration-200 origin-top-right">
                            <div class="px-4 py-3 border-b border-stone-100">
                                <p class="text-xs text-stone-500 uppercase tracking-wider font-semibold">Signed in as</p>
                                <p class="text-sm font-bold text-stone-900 truncate"><?php echo htmlspecialchars($_SESSION['user_name']); ?></p>
                            </div>
                            <a href="#" class="block px-4 py-2 text-sm text-stone-600 hover:bg-amber-50 hover:text-amber-700 transition-colors">Your Profile</a>
                            <a href="#" class="block px-4 py-2 text-sm text-stone-600 hover:bg-amber-50 hover:text-amber-700 transition-colors">Settings</a>
                            <div class="border-t border-stone-100 my-1"></div>
                            <a href="logout.php" class="block px-4 py-2 text-sm text-red-600 hover:bg-red-50 hover:text-red-700 transition-colors">Sign out</a>
                        </div>
                    </div>
                <?php else: ?>
                    <a href="login.php" class="text-stone-600 hover:text-amber-600 transition-colors font-medium">Login</a>
                <?php endif; ?>
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
            <?php if (Auth::check()): ?>
                <div class="pt-4 pb-3 border-t border-stone-200">
                    <div class="flex items-center px-2 mb-3">
                        <div class="flex-shrink-0">
                            <img class="h-10 w-10 rounded-full" src="https://ui-avatars.com/api/?name=<?php echo urlencode($_SESSION['user_name']); ?>&background=0f172a&color=fff" alt="">
                        </div>
                        <div class="ml-3">
                            <div class="text-base font-medium leading-none text-stone-800"><?php echo htmlspecialchars($_SESSION['user_name']); ?></div>
                            <div class="text-sm font-medium leading-none text-stone-500 mt-1">user@example.com</div> 
                        </div>
                    </div>
                    <div class="space-y-1">
                        <a href="#" class="block px-2 py-2 text-base font-medium text-stone-600 hover:text-amber-600 hover:bg-stone-50 rounded-md">Your Profile</a>
                        <a href="#" class="block px-2 py-2 text-base font-medium text-stone-600 hover:text-amber-600 hover:bg-stone-50 rounded-md">Settings</a>
                        <a href="logout.php" class="block px-2 py-2 text-base font-medium text-red-600 hover:text-red-700 hover:bg-stone-50 rounded-md">Sign out</a>
                    </div>
                </div>
            <?php else: ?>
                <a href="login.php" class="block py-2 text-stone-600 hover:text-amber-600">Login</a>
            <?php endif; ?>
        </div>
    </div>
</nav>

<script>
    // Mobile menu toggle
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileMenu = document.getElementById('mobileMenu');

    mobileMenuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });

    // User dropdown toggle
    const userMenuBtn = document.getElementById('userMenuBtn');
    const userMenuDropdown = document.getElementById('userMenuDropdown');

    if (userMenuBtn && userMenuDropdown) {
        userMenuBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            userMenuDropdown.classList.toggle('hidden');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', (e) => {
            if (!userMenuBtn.contains(e.target) && !userMenuDropdown.contains(e.target)) {
                userMenuDropdown.classList.add('hidden');
            }
        });
    }
</script>