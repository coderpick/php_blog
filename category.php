<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories - Minimal Blog</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .font-serif {
            font-family: 'Playfair Display', serif;
        }
    </style>
</head>
<body class="bg-stone-50 text-stone-800">
    <!-- Navigation -->
    <nav class="bg-white/80 backdrop-blur-md sticky top-0 z-50 border-b border-stone-200">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <a href="index.html" class="font-serif text-2xl font-bold text-stone-900">Minimal<span class="text-amber-600">.</span></a>
                <div class="hidden md:flex space-x-8">
                    <a href="index.html" class="text-stone-600 hover:text-amber-600 transition-colors font-medium">Home</a>
                    <a href="articles.html" class="text-stone-600 hover:text-amber-600 transition-colors font-medium">Articles</a>
                    <a href="categories.html" class="text-amber-600 font-medium">Categories</a>
                    <a href="about.html" class="text-stone-600 hover:text-amber-600 transition-colors font-medium">About</a>
                    <a href="contact.html" class="text-stone-600 hover:text-amber-600 transition-colors font-medium">Contact</a>
                </div>
                <button id="mobileMenuBtn" class="md:hidden p-2 rounded-lg hover:bg-stone-100">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div id="mobileMenu" class="hidden md:hidden bg-white border-t border-stone-200">
            <div class="px-4 py-3 space-y-2">
                <a href="index.html" class="block py-2 text-stone-600 hover:text-amber-600">Home</a>
                <a href="articles.html" class="block py-2 text-stone-600 hover:text-amber-600">Articles</a>
                <a href="categories.html" class="block py-2 text-amber-600">Categories</a>
                <a href="about.html" class="block py-2 text-stone-600 hover:text-amber-600">About</a>
                <a href="contact.html" class="block py-2 text-stone-600 hover:text-amber-600">Contact</a>
            </div>
        </div>
    </nav>
    <!-- Page Header -->
    <header class="bg-gradient-to-br from-stone-100 to-amber-50 py-16">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="font-serif text-4xl md:text-5xl font-bold text-stone-900 mb-4">Categories</h1>
            <p class="text-stone-600 text-lg max-w-2xl mx-auto">Browse articles by topic and discover content that resonates with your interests.</p>
        </div>
    </header>
    <!-- Categories Grid -->
    <main class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        
        <!-- Category Cards -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
            
            <!-- Lifestyle Category -->
            <a href="articles.html" class="group relative overflow-hidden rounded-2xl h-64">
                <img src="https://images.unsplash.com/photo-1499750310107-5fef28a66643?w=600&h=400&fit=crop" alt="Lifestyle" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-stone-900/80 via-stone-900/40 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6">
                    <span class="inline-block px-3 py-1 bg-amber-500 text-stone-900 rounded-full text-xs font-medium mb-3">24 Articles</span>
                    <h3 class="font-serif text-2xl font-bold text-white mb-2">Lifestyle</h3>
                    <p class="text-stone-300 text-sm">Tips for intentional living and daily inspiration</p>
                </div>
            </a>
            <!-- Travel Category -->
            <a href="articles.html" class="group relative overflow-hidden rounded-2xl h-64">
                <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=600&h=400&fit=crop" alt="Travel" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-stone-900/80 via-stone-900/40 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6">
                    <span class="inline-block px-3 py-1 bg-amber-500 text-stone-900 rounded-full text-xs font-medium mb-3">18 Articles</span>
                    <h3 class="font-serif text-2xl font-bold text-white mb-2">Travel</h3>
                    <p class="text-stone-300 text-sm">Destinations, adventures, and wanderlust stories</p>
                </div>
            </a>
            <!-- Wellness Category -->
            <a href="articles.html" class="group relative overflow-hidden rounded-2xl h-64">
                <img src="https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?w=600&h=400&fit=crop" alt="Wellness" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-stone-900/80 via-stone-900/40 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6">
                    <span class="inline-block px-3 py-1 bg-amber-500 text-stone-900 rounded-full text-xs font-medium mb-3">15 Articles</span>
                    <h3 class="font-serif text-2xl font-bold text-white mb-2">Wellness</h3>
                    <p class="text-stone-300 text-sm">Health, mindfulness, and self-care practices</p>
                </div>
            </a>
            <!-- Technology Category -->
            <a href="articles.html" class="group relative overflow-hidden rounded-2xl h-64">
                <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?w=600&h=400&fit=crop" alt="Technology" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-stone-900/80 via-stone-900/40 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6">
                    <span class="inline-block px-3 py-1 bg-amber-500 text-stone-900 rounded-full text-xs font-medium mb-3">12 Articles</span>
                    <h3 class="font-serif text-2xl font-bold text-white mb-2">Technology</h3>
                    <p class="text-stone-300 text-sm">Digital life, tools, and mindful tech usage</p>
                </div>
            </a>
            <!-- Creativity Category -->
            <a href="articles.html" class="group relative overflow-hidden rounded-2xl h-64">
                <img src="https://images.unsplash.com/photo-1513364776144-60967b0f800f?w=600&h=400&fit=crop" alt="Creativity" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-stone-900/80 via-stone-900/40 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6">
                    <span class="inline-block px-3 py-1 bg-amber-500 text-stone-900 rounded-full text-xs font-medium mb-3">9 Articles</span>
                    <h3 class="font-serif text-2xl font-bold text-white mb-2">Creativity</h3>
                    <p class="text-stone-300 text-sm">Art, inspiration, and creative expression</p>
                </div>
            </a>
            <!-- Books Category -->
            <a href="articles.html" class="group relative overflow-hidden rounded-2xl h-64">
                <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794?w=600&h=400&fit=crop" alt="Books" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-stone-900/80 via-stone-900/40 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6">
                    <span class="inline-block px-3 py-1 bg-amber-500 text-stone-900 rounded-full text-xs font-medium mb-3">7 Articles</span>
                    <h3 class="font-serif text-2xl font-bold text-white mb-2">Books</h3>
                    <p class="text-stone-300 text-sm">Reviews, recommendations, and reading lists</p>
                </div>
            </a>
        </div>
        <!-- Featured Category Section -->
        <section class="mb-16">
            <div class="flex items-center justify-between mb-8">
                <h2 class="font-serif text-3xl font-bold text-stone-900">Featured: Lifestyle</h2>
                <a href="articles.html" class="text-amber-600 font-medium hover:underline flex items-center gap-2">
                    View All
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Article 1 -->
                <article class="bg-white rounded-xl shadow-sm overflow-hidden group hover:shadow-lg transition-shadow">
                    <img src="https://images.unsplash.com/photo-1499750310107-5fef28a66643?w=300&h=200&fit=crop" alt="Article" class="w-full h-40 object-cover group-hover:scale-105 transition-transform duration-300">
                    <div class="p-4">
                        <h3 class="font-serif font-bold text-stone-900 mb-2 group-hover:text-amber-600 transition-colors line-clamp-2">
                            <a href="article.html">The Art of Minimalist Living</a>
                        </h3>
                        <p class="text-stone-500 text-sm">Jun 15, 2025</p>
                    </div>
                </article>
                <!-- Article 2 -->
                <article class="bg-white rounded-xl shadow-sm overflow-hidden group hover:shadow-lg transition-shadow">
                    <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794?w=300&h=200&fit=crop" alt="Article" class="w-full h-40 object-cover group-hover:scale-105 transition-transform duration-300">
                    <div class="p-4">
                        <h3 class="font-serif font-bold text-stone-900 mb-2 group-hover:text-amber-600 transition-colors line-clamp-2">
                            <a href="article.html">Daily Journaling Practices</a>
                        </h3>
                        <p class="text-stone-500 text-sm">Jun 12, 2025</p>
                    </div>
                </article>
                <!-- Article 3 -->
                <article class="bg-white rounded-xl shadow-sm overflow-hidden group hover:shadow-lg transition-shadow">
                    <img src="https://images.unsplash.com/photo-1488190211105-8b0e65b80b4e?w=300&h=200&fit=crop" alt="Article" class="w-full h-40 object-cover group-hover:scale-105 transition-transform duration-300">
                    <div class="p-4">
                        <h3 class="font-serif font-bold text-stone-900 mb-2 group-hover:text-amber-600 transition-colors line-clamp-2">
                            <a href="article.html">The Power of Saying No</a>
                        </h3>
                        <p class="text-stone-500 text-sm">May 20, 2025</p>
                    </div>
                </article>
                <!-- Article 4 -->
                <article class="bg-white rounded-xl shadow-sm overflow-hidden group hover:shadow-lg transition-shadow">
                    <img src="https://images.unsplash.com/photo-1484480974693-6ca0a78fb36b?w=300&h=200&fit=crop" alt="Article" class="w-full h-40 object-cover group-hover:scale-105 transition-transform duration-300">
                    <div class="p-4">
                        <h3 class="font-serif font-bold text-stone-900 mb-2 group-hover:text-amber-600 transition-colors line-clamp-2">
                            <a href="article.html">Building Better Habits</a>
                        </h3>
                        <p class="text-stone-500 text-sm">May 15, 2025</p>
                    </div>
                </article>
            </div>
        </section>
        <!-- Popular Tags -->
        <section class="bg-white rounded-2xl p-8 shadow-sm">
            <h2 class="font-serif text-2xl font-bold text-stone-900 mb-6">Popular Tags</h2>
            <div class="flex flex-wrap gap-3">
                <a href="#" class="px-4 py-2 bg-stone-100 text-stone-700 rounded-full hover:bg-amber-100 hover:text-amber-700 transition-colors font-medium">Mindfulness</a>
                <a href="#" class="px-4 py-2 bg-stone-100 text-stone-700 rounded-full hover:bg-amber-100 hover:text-amber-700 transition-colors font-medium">Minimalism</a>
                <a href="#" class="px-4 py-2 bg-stone-100 text-stone-700 rounded-full hover:bg-amber-100 hover:text-amber-700 transition-colors font-medium">Self-care</a>
                <a href="#" class="px-4 py-2 bg-stone-100 text-stone-700 rounded-full hover:bg-amber-100 hover:text-amber-700 transition-colors font-medium">Nature</a>
                <a href="#" class="px-4 py-2 bg-stone-100 text-stone-700 rounded-full hover:bg-amber-100 hover:text-amber-700 transition-colors font-medium">Books</a>
                <a href="#" class="px-4 py-2 bg-stone-100 text-stone-700 rounded-full hover:bg-amber-100 hover:text-amber-700 transition-colors font-medium">Productivity</a>
                <a href="#" class="px-4 py-2 bg-stone-100 text-stone-700 rounded-full hover:bg-amber-100 hover:text-amber-700 transition-colors font-medium">Health</a>
                <a href="#" class="px-4 py-2 bg-stone-100 text-stone-700 rounded-full hover:bg-amber-100 hover:text-amber-700 transition-colors font-medium">Meditation</a>
                <a href="#" class="px-4 py-2 bg-stone-100 text-stone-700 rounded-full hover:bg-amber-100 hover:text-amber-700 transition-colors font-medium">Adventure</a>
                <a href="#" class="px-4 py-2 bg-stone-100 text-stone-700 rounded-full hover:bg-amber-100 hover:text-amber-700 transition-colors font-medium">Journaling</a>
                <a href="#" class="px-4 py-2 bg-stone-100 text-stone-700 rounded-full hover:bg-amber-100 hover:text-amber-700 transition-colors font-medium">Digital Detox</a>
                <a href="#" class="px-4 py-2 bg-stone-100 text-stone-700 rounded-full hover:bg-amber-100 hover:text-amber-700 transition-colors font-medium">Slow Living</a>
            </div>
        </section>
    </main>
    <!-- Footer -->
    <footer class="bg-stone-900 text-white py-16">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8 mb-12">
                <div class="md:col-span-2">
                    <a href="index.html" class="font-serif text-3xl font-bold">Minimal<span class="text-amber-500">.</span></a>
                    <p class="text-stone-400 mt-4 max-w-md">A blog about thoughtful living, mindful practices, and finding beauty in simplicity.</p>
                    <div class="flex space-x-4 mt-6">
                        <a href="#" class="w-10 h-10 bg-stone-800 rounded-full flex items-center justify-center hover:bg-amber-500 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-stone-800 rounded-full flex items-center justify-center hover:bg-amber-500 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </a>
                    </div>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2 text-stone-400">
                        <li><a href="index.html" class="hover:text-amber-500 transition-colors">Home</a></li>
                        <li><a href="about.html" class="hover:text-amber-500 transition-colors">About Us</a></li>
                        <li><a href="articles.html" class="hover:text-amber-500 transition-colors">Articles</a></li>
                        <li><a href="contact.html" class="hover:text-amber-500 transition-colors">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Categories</h4>
                    <ul class="space-y-2 text-stone-400">
                        <li><a href="categories.html" class="hover:text-amber-500 transition-colors">Lifestyle</a></li>
                        <li><a href="categories.html" class="hover:text-amber-500 transition-colors">Travel</a></li>
                        <li><a href="categories.html" class="hover:text-amber-500 transition-colors">Wellness</a></li>
                        <li><a href="categories.html" class="hover:text-amber-500 transition-colors">Technology</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-stone-800 pt-8 text-center text-stone-500 text-sm">
                <p>© 2025 Minimal Blog. All rights reserved.</p>
            </div>
        </div>
    </footer>
    <script>
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html>