<?php
include_once "layouts/head.php"
?>
<!-- Navigation -->
<?php
include_once "layouts/navbar.php"
?>

<!-- Hero Section -->
<section class="bg-gradient-to-br from-stone-100 to-amber-50 py-16 lg:py-24">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <span class="inline-block px-4 py-1 bg-amber-100 text-amber-700 rounded-full text-sm font-medium mb-4">Featured Post</span>
                <h1 class="font-serif text-4xl lg:text-5xl font-bold text-stone-900 leading-tight mb-6">
                    The Art of Minimalist Living in Modern Times
                </h1>
                <p class="text-stone-600 text-lg mb-6 leading-relaxed">
                    Discover how embracing simplicity can transform your life, reduce stress, and bring clarity to your daily routines. A journey into mindful living.
                </p>
                <div class="flex items-center space-x-4 mb-8">
                    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100&h=100&fit=crop&crop=face" alt="Author" class="w-12 h-12 rounded-full object-cover">
                    <div>
                        <p class="font-medium text-stone-900">Sarah Mitchell</p>
                        <p class="text-stone-500 text-sm">June 15, 2025 · 8 min read</p>
                    </div>
                </div>
                <a href="article.html" class="inline-flex items-center px-6 py-3 bg-stone-900 text-white rounded-full hover:bg-stone-800 transition-colors font-medium">
                    Read Article
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1499750310107-5fef28a66643?w=800&h=600&fit=crop" alt="Featured" class="rounded-2xl shadow-2xl w-full object-cover">
                <div class="absolute -bottom-4 -left-4 w-24 h-24 bg-amber-400 rounded-xl -z-10"></div>
                <div class="absolute -top-4 -right-4 w-32 h-32 bg-stone-200 rounded-xl -z-10"></div>
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<main class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <div class="grid lg:grid-cols-3 gap-12">

        <!-- Blog Posts Grid -->
        <div class="lg:col-span-2">
            <h2 class="font-serif text-3xl font-bold text-stone-900 mb-8">Latest Articles</h2>

            <div class="space-y-8">
                <!-- Blog Post Card 1 -->
                <article class="bg-white rounded-2xl shadow-sm hover:shadow-lg transition-shadow overflow-hidden group">
                    <div class="grid md:grid-cols-5 gap-0">
                        <div class="md:col-span-2">
                            <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794?w=400&h=300&fit=crop" alt="Post" class="w-full h-48 md:h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        </div>
                        <div class="md:col-span-3 p-6">
                            <span class="text-amber-600 text-sm font-medium">Lifestyle</span>
                            <h3 class="font-serif text-xl font-bold text-stone-900 mt-2 mb-3 group-hover:text-amber-600 transition-colors">
                                <a href="article.html">Finding Peace Through Daily Journaling Practices</a>
                            </h3>
                            <p class="text-stone-600 mb-4 line-clamp-2">Explore the transformative power of putting pen to paper and how it can help you navigate life's challenges.</p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-3">
                                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&h=100&fit=crop&crop=face" alt="Author" class="w-8 h-8 rounded-full">
                                    <span class="text-sm text-stone-500">James Wilson</span>
                                </div>
                                <span class="text-sm text-stone-400">June 12, 2025</span>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Blog Post Card 2 -->
                <article class="bg-white rounded-2xl shadow-sm hover:shadow-lg transition-shadow overflow-hidden group">
                    <div class="grid md:grid-cols-5 gap-0">
                        <div class="md:col-span-2">
                            <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=400&h=300&fit=crop" alt="Post" class="w-full h-48 md:h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        </div>
                        <div class="md:col-span-3 p-6">
                            <span class="text-amber-600 text-sm font-medium">Travel</span>
                            <h3 class="font-serif text-xl font-bold text-stone-900 mt-2 mb-3 group-hover:text-amber-600 transition-colors">
                                <a href="article.html">Hidden Gems: Unexplored Destinations for 2025</a>
                            </h3>
                            <p class="text-stone-600 mb-4 line-clamp-2">Venture beyond the tourist trails and discover breathtaking locations that remain untouched by mass tourism.</p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-3">
                                    <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=100&h=100&fit=crop&crop=face" alt="Author" class="w-8 h-8 rounded-full">
                                    <span class="text-sm text-stone-500">Emily Chen</span>
                                </div>
                                <span class="text-sm text-stone-400">June 10, 2025</span>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Blog Post Card 3 -->
                <article class="bg-white rounded-2xl shadow-sm hover:shadow-lg transition-shadow overflow-hidden group">
                    <div class="grid md:grid-cols-5 gap-0">
                        <div class="md:col-span-2">
                            <img src="https://images.unsplash.com/photo-1493770348161-369560ae357d?w=400&h=300&fit=crop" alt="Post" class="w-full h-48 md:h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        </div>
                        <div class="md:col-span-3 p-6">
                            <span class="text-amber-600 text-sm font-medium">Wellness</span>
                            <h3 class="font-serif text-xl font-bold text-stone-900 mt-2 mb-3 group-hover:text-amber-600 transition-colors">
                                <a href="article.html">Nourishing Your Body: A Guide to Mindful Eating</a>
                            </h3>
                            <p class="text-stone-600 mb-4 line-clamp-2">Learn how to develop a healthier relationship with food and transform your eating habits for lasting wellness.</p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-3">
                                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=100&h=100&fit=crop&crop=face" alt="Author" class="w-8 h-8 rounded-full">
                                    <span class="text-sm text-stone-500">David Park</span>
                                </div>
                                <span class="text-sm text-stone-400">June 8, 2025</span>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Blog Post Card 4 -->
                <article class="bg-white rounded-2xl shadow-sm hover:shadow-lg transition-shadow overflow-hidden group">
                    <div class="grid md:grid-cols-5 gap-0">
                        <div class="md:col-span-2">
                            <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?w=400&h=300&fit=crop" alt="Post" class="w-full h-48 md:h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        </div>
                        <div class="md:col-span-3 p-6">
                            <span class="text-amber-600 text-sm font-medium">Technology</span>
                            <h3 class="font-serif text-xl font-bold text-stone-900 mt-2 mb-3 group-hover:text-amber-600 transition-colors">
                                <a href="article.html">Digital Detox: Reclaiming Your Time in a Connected World</a>
                            </h3>
                            <p class="text-stone-600 mb-4 line-clamp-2">Strategies for maintaining balance in an age of constant connectivity and digital overwhelm.</p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-3">
                                    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100&h=100&fit=crop&crop=face" alt="Author" class="w-8 h-8 rounded-full">
                                    <span class="text-sm text-stone-500">Sarah Mitchell</span>
                                </div>
                                <span class="text-sm text-stone-400">June 5, 2025</span>
                            </div>
                        </div>
                    </div>
                </article>
            </div>

            <!-- Pagination -->
            <div class="flex justify-center mt-12 space-x-2">
                <button class="w-10 h-10 rounded-full bg-stone-900 text-white font-medium">1</button>
                <button class="w-10 h-10 rounded-full bg-white text-stone-600 hover:bg-stone-100 font-medium">2</button>
                <button class="w-10 h-10 rounded-full bg-white text-stone-600 hover:bg-stone-100 font-medium">3</button>
                <button class="w-10 h-10 rounded-full bg-white text-stone-600 hover:bg-stone-100 font-medium">
                    <svg class="w-4 h-4 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Sidebar -->
        <aside class="space-y-8">
            <!-- About Widget -->
            <div class="bg-white rounded-2xl p-6 shadow-sm">
                <h3 class="font-serif text-xl font-bold text-stone-900 mb-4">About the Blog</h3>
                <p class="text-stone-600 mb-4">Welcome to Minimal, a blog dedicated to thoughtful living, mindful practices, and finding beauty in simplicity.</p>
                <a href="about.html" class="text-amber-600 font-medium hover:underline">Learn more →</a>
            </div>

            <!-- Categories Widget -->
            <div class="bg-white rounded-2xl p-6 shadow-sm">
                <h3 class="font-serif text-xl font-bold text-stone-900 mb-4">Categories</h3>
                <div class="space-y-3">
                    <a href="category.html" class="flex items-center justify-between group">
                        <span class="text-stone-600 group-hover:text-amber-600 transition-colors">Lifestyle</span>
                        <span class="bg-stone-100 text-stone-500 px-2 py-1 rounded-full text-xs">24</span>
                    </a>
                    <a href="#" class="flex items-center justify-between group">
                        <span class="text-stone-600 group-hover:text-amber-600 transition-colors">Travel</span>
                        <span class="bg-stone-100 text-stone-500 px-2 py-1 rounded-full text-xs">18</span>
                    </a>
                    <a href="#" class="flex items-center justify-between group">
                        <span class="text-stone-600 group-hover:text-amber-600 transition-colors">Wellness</span>
                        <span class="bg-stone-100 text-stone-500 px-2 py-1 rounded-full text-xs">15</span>
                    </a>
                    <a href="#" class="flex items-center justify-between group">
                        <span class="text-stone-600 group-hover:text-amber-600 transition-colors">Technology</span>
                        <span class="bg-stone-100 text-stone-500 px-2 py-1 rounded-full text-xs">12</span>
                    </a>
                    <a href="#" class="flex items-center justify-between group">
                        <span class="text-stone-600 group-hover:text-amber-600 transition-colors">Creativity</span>
                        <span class="bg-stone-100 text-stone-500 px-2 py-1 rounded-full text-xs">9</span>
                    </a>
                </div>
            </div>

            <!-- Newsletter Widget -->
            <div class="bg-gradient-to-br from-stone-900 to-stone-800 rounded-2xl p-6 text-white">
                <h3 class="font-serif text-xl font-bold mb-2">Newsletter</h3>
                <p class="text-stone-300 text-sm mb-4">Get the latest articles delivered straight to your inbox.</p>
                <form class="space-y-3">
                    <input type="email" placeholder="Your email address" class="w-full px-4 py-3 rounded-lg bg-white/10 border border-white/20 placeholder-stone-400 focus:outline-none focus:ring-2 focus:ring-amber-500 text-sm">
                    <button type="submit" class="w-full py-3 bg-amber-500 hover:bg-amber-600 text-stone-900 font-medium rounded-lg transition-colors">
                        Subscribe
                    </button>
                </form>
            </div>

            <!-- Popular Tags -->
            <div class="bg-white rounded-2xl p-6 shadow-sm">
                <h3 class="font-serif text-xl font-bold text-stone-900 mb-4">Popular Tags</h3>
                <div class="flex flex-wrap gap-2">
                    <a href="#" class="px-3 py-1 bg-stone-100 text-stone-600 rounded-full text-sm hover:bg-amber-100 hover:text-amber-700 transition-colors">Mindfulness</a>
                    <a href="#" class="px-3 py-1 bg-stone-100 text-stone-600 rounded-full text-sm hover:bg-amber-100 hover:text-amber-700 transition-colors">Minimalism</a>
                    <a href="#" class="px-3 py-1 bg-stone-100 text-stone-600 rounded-full text-sm hover:bg-amber-100 hover:text-amber-700 transition-colors">Self-care</a>
                    <a href="#" class="px-3 py-1 bg-stone-100 text-stone-600 rounded-full text-sm hover:bg-amber-100 hover:text-amber-700 transition-colors">Nature</a>
                    <a href="#" class="px-3 py-1 bg-stone-100 text-stone-600 rounded-full text-sm hover:bg-amber-100 hover:text-amber-700 transition-colors">Books</a>
                    <a href="#" class="px-3 py-1 bg-stone-100 text-stone-600 rounded-full text-sm hover:bg-amber-100 hover:text-amber-700 transition-colors">Productivity</a>
                    <a href="#" class="px-3 py-1 bg-stone-100 text-stone-600 rounded-full text-sm hover:bg-amber-100 hover:text-amber-700 transition-colors">Health</a>
                </div>
            </div>
        </aside>
    </div>
</main>

<!-- Footer -->
<?php
include_once "layouts/footer.php"
?>