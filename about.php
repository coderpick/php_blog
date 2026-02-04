<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Minimal Blog</title>
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
                    <a href="categories.html" class="text-stone-600 hover:text-amber-600 transition-colors font-medium">Categories</a>
                    <a href="about.html" class="text-amber-600 font-medium">About</a>
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
                <a href="categories.html" class="block py-2 text-stone-600 hover:text-amber-600">Categories</a>
                <a href="about.html" class="block py-2 text-amber-600">About</a>
                <a href="contact.html" class="block py-2 text-stone-600 hover:text-amber-600">Contact</a>
            </div>
        </div>
    </nav>
    <!-- Hero Section -->
    <header class="bg-gradient-to-br from-stone-100 to-amber-50 py-16 lg:py-24">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <span class="inline-block px-4 py-1 bg-amber-100 text-amber-700 rounded-full text-sm font-medium mb-4">Our Story</span>
                    <h1 class="font-serif text-4xl lg:text-5xl font-bold text-stone-900 leading-tight mb-6">
                        We believe in the power of simplicity
                    </h1>
                    <p class="text-stone-600 text-lg leading-relaxed">
                        Minimal was born from a simple idea: in a world of noise, clarity is a gift. We create content that helps you slow down, think deeply, and live intentionally.
                    </p>
                </div>
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=600&h=500&fit=crop" alt="Our Team" class="rounded-2xl shadow-2xl w-full object-cover">
                    <div class="absolute -bottom-4 -left-4 w-24 h-24 bg-amber-400 rounded-xl -z-10"></div>
                    <div class="absolute -top-4 -right-4 w-32 h-32 bg-stone-200 rounded-xl -z-10"></div>
                </div>
            </div>
        </div>
    </header>
    <!-- Mission Section -->
    <section class="py-16 lg:py-24">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="font-serif text-3xl lg:text-4xl font-bold text-stone-900 mb-6">Our Mission</h2>
            <p class="text-stone-600 text-lg leading-relaxed mb-8">
                We're on a mission to help people embrace mindful living in a fast-paced world. Through thoughtful articles, practical guides, and inspiring stories, we aim to be your companion on the journey toward a more intentional life.
            </p>
            <div class="grid md:grid-cols-3 gap-8 mt-12">
                <div class="bg-white rounded-2xl p-8 shadow-sm">
                    <div class="w-14 h-14 bg-amber-100 rounded-xl flex items-center justify-center mb-6 mx-auto">
                        <svg class="w-7 h-7 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                    </div>
                    <h3 class="font-serif text-xl font-bold text-stone-900 mb-3">Quality Content</h3>
                    <p class="text-stone-600">Every article is carefully crafted to provide genuine value and actionable insights.</p>
                </div>
                <div class="bg-white rounded-2xl p-8 shadow-sm">
                    <div class="w-14 h-14 bg-amber-100 rounded-xl flex items-center justify-center mb-6 mx-auto">
                        <svg class="w-7 h-7 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                    </div>
                    <h3 class="font-serif text-xl font-bold text-stone-900 mb-3">Authentic Voice</h3>
                    <p class="text-stone-600">We write from experience, sharing real stories and honest perspectives.</p>
                </div>
                <div class="bg-white rounded-2xl p-8 shadow-sm">
                    <div class="w-14 h-14 bg-amber-100 rounded-xl flex items-center justify-center mb-6 mx-auto">
                        <svg class="w-7 h-7 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <h3 class="font-serif text-xl font-bold text-stone-900 mb-3">Community First</h3>
                    <p class="text-stone-600">We foster meaningful connections with readers who share our values.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section -->
    <section class="bg-white py-16 lg:py-24">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="font-serif text-3xl lg:text-4xl font-bold text-stone-900 mb-4">Meet the Team</h2>
                <p class="text-stone-600 text-lg max-w-2xl mx-auto">The passionate people behind Minimal who bring you thoughtful content every week.</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Team Member 1 -->
                <div class="text-center group">
                    <div class="relative mb-6 inline-block">
                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=300&h=300&fit=crop&crop=face" alt="Sarah Mitchell" class="w-40 h-40 rounded-2xl object-cover mx-auto shadow-lg group-hover:shadow-xl transition-shadow">
                        <div class="absolute -bottom-2 -right-2 w-10 h-10 bg-amber-400 rounded-lg -z-10"></div>
                    </div>
                    <h3 class="font-serif text-xl font-bold text-stone-900 mb-1">Sarah Mitchell</h3>
                    <p class="text-amber-600 font-medium mb-3">Founder & Editor</p>
                    <p class="text-stone-600 text-sm">Lifestyle writer and mindfulness advocate with 10 years of experience.</p>
                    <div class="flex justify-center space-x-3 mt-4">
                        <a href="#" class="text-stone-400 hover:text-amber-600 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                        </a>
                        <a href="#" class="text-stone-400 hover:text-amber-600 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                        </a>
                    </div>
                </div>
                <!-- Team Member 2 -->
                <div class="text-center group">
                    <div class="relative mb-6 inline-block">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=300&h=300&fit=crop&crop=face" alt="James Wilson" class="w-40 h-40 rounded-2xl object-cover mx-auto shadow-lg group-hover:shadow-xl transition-shadow">
                        <div class="absolute -bottom-2 -right-2 w-10 h-10 bg-amber-400 rounded-lg -z-10"></div>
                    </div>
                    <h3 class="font-serif text-xl font-bold text-stone-900 mb-1">James Wilson</h3>
                    <p class="text-amber-600 font-medium mb-3">Senior Writer</p>
                    <p class="text-stone-600 text-sm">Travel enthusiast and storyteller exploring the world's hidden gems.</p>
                    <div class="flex justify-center space-x-3 mt-4">
                        <a href="#" class="text-stone-400 hover:text-amber-600 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                        </a>
                        <a href="#" class="text-stone-400 hover:text-amber-600 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                        </a>
                    </div>
                </div>
                <!-- Team Member 3 -->
                <div class="text-center group">
                    <div class="relative mb-6 inline-block">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=300&h=300&fit=crop&crop=face" alt="Emily Chen" class="w-40 h-40 rounded-2xl object-cover mx-auto shadow-lg group-hover:shadow-xl transition-shadow">
                        <div class="absolute -bottom-2 -right-2 w-10 h-10 bg-amber-400 rounded-lg -z-10"></div>
                    </div>
                    <h3 class="font-serif text-xl font-bold text-stone-900 mb-1">Emily Chen</h3>
                    <p class="text-amber-600 font-medium mb-3">Wellness Editor</p>
                    <p class="text-stone-600 text-sm">Certified yoga instructor and holistic health advocate.</p>
                    <div class="flex justify-center space-x-3 mt-4">
                        <a href="#" class="text-stone-400 hover:text-amber-600 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                        </a>
                        <a href="#" class="text-stone-400 hover:text-amber-600 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </a>
                    </div>
                </div>
                <!-- Team Member 4 -->
                <div class="text-center group">
                    <div class="relative mb-6 inline-block">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=300&h=300&fit=crop&crop=face" alt="David Park" class="w-40 h-40 rounded-2xl object-cover mx-auto shadow-lg group-hover:shadow-xl transition-shadow">
                        <div class="absolute -bottom-2 -right-2 w-10 h-10 bg-amber-400 rounded-lg -z-10"></div>
                    </div>
                    <h3 class="font-serif text-xl font-bold text-stone-900 mb-1">David Park</h3>
                    <p class="text-amber-600 font-medium mb-3">Tech Writer</p>
                    <p class="text-stone-600 text-sm">Digital minimalist helping others find balance with technology.</p>
                    <div class="flex justify-center space-x-3 mt-4">
                        <a href="#" class="text-stone-400 hover:text-amber-600 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                        </a>
                        <a href="#" class="text-stone-400 hover:text-amber-600 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Stats Section -->
    <section class="bg-stone-900 py-16">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 text-center">
                <div>
                    <p class="font-serif text-4xl lg:text-5xl font-bold text-amber-500 mb-2">500+</p>
                    <p class="text-stone-400">Articles Published</p>
                </div>
                <div>
                    <p class="font-serif text-4xl lg:text-5xl font-bold text-amber-500 mb-2">50K+</p>
                    <p class="text-stone-400">Monthly Readers</p>
                </div>
                <div>
                    <p class="font-serif text-4xl lg:text-5xl font-bold text-amber-500 mb-2">10K+</p>
                    <p class="text-stone-400">Newsletter Subscribers</p>
                </div>
                <div>
                    <p class="font-serif text-4xl lg:text-5xl font-bold text-amber-500 mb-2">5</p>
                    <p class="text-stone-400">Years Running</p>
                </div>
            </div>
        </div>
    </section>
    <!-- CTA Section -->
    <section class="py-16 lg:py-24">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="font-serif text-3xl lg:text-4xl font-bold text-stone-900 mb-6">Join Our Community</h2>
            <p class="text-stone-600 text-lg mb-8">Subscribe to our newsletter and get the latest articles delivered straight to your inbox.</p>
            <form class="flex flex-col sm:flex-row gap-4 max-w-lg mx-auto">
                <input type="email" placeholder="Enter your email" class="flex-1 px-6 py-4 rounded-full border border-stone-200 focus:outline-none focus:ring-2 focus:ring-amber-500">
                <button type="submit" class="px-8 py-4 bg-stone-900 text-white rounded-full hover:bg-stone-800 transition-colors font-medium">Subscribe</button>
            </form>
        </div>
    </section>
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