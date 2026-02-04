<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Art of Minimalist Living in Modern Times - Minimal Blog</title>
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
        .prose p {
            margin-bottom: 1.5rem;
            line-height: 1.8;
        }
        .prose h2 {
            font-family: 'Playfair Display', serif;
            font-size: 1.75rem;
            font-weight: 700;
            margin-top: 2.5rem;
            margin-bottom: 1rem;
        }
        .prose blockquote {
            border-left: 4px solid #f59e0b;
            padding-left: 1.5rem;
            font-style: italic;
            color: #57534e;
            margin: 2rem 0;
        }
        .prose ul {
            list-style-type: disc;
            padding-left: 1.5rem;
            margin-bottom: 1.5rem;
        }
        .prose li {
            margin-bottom: 0.5rem;
            line-height: 1.8;
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
                    <a href="#" class="text-stone-600 hover:text-amber-600 transition-colors font-medium">Articles</a>
                    <a href="#" class="text-stone-600 hover:text-amber-600 transition-colors font-medium">Categories</a>
                    <a href="#" class="text-stone-600 hover:text-amber-600 transition-colors font-medium">About</a>
                    <a href="#" class="text-stone-600 hover:text-amber-600 transition-colors font-medium">Contact</a>
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
                <a href="#" class="block py-2 text-stone-600 hover:text-amber-600">Articles</a>
                <a href="#" class="block py-2 text-stone-600 hover:text-amber-600">Categories</a>
                <a href="#" class="block py-2 text-stone-600 hover:text-amber-600">About</a>
                <a href="#" class="block py-2 text-stone-600 hover:text-amber-600">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Article Header -->
    <header class="bg-gradient-to-br from-stone-100 to-amber-50 py-12 lg:py-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <a href="#" class="inline-block px-4 py-1 bg-amber-100 text-amber-700 rounded-full text-sm font-medium mb-6 hover:bg-amber-200 transition-colors">Lifestyle</a>
            <h1 class="font-serif text-3xl md:text-4xl lg:text-5xl font-bold text-stone-900 leading-tight mb-6">
                The Art of Minimalist Living in Modern Times
            </h1>
            <p class="text-stone-600 text-lg max-w-2xl mx-auto mb-8">
                Discover how embracing simplicity can transform your life, reduce stress, and bring clarity to your daily routines.
            </p>
            <div class="flex items-center justify-center space-x-4">
                <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100&h=100&fit=crop&crop=face" alt="Sarah Mitchell" class="w-12 h-12 rounded-full object-cover ring-2 ring-white">
                <div class="text-left">
                    <p class="font-medium text-stone-900">Sarah Mitchell</p>
                    <p class="text-stone-500 text-sm">June 15, 2025 · 8 min read</p>
                </div>
            </div>
        </div>
    </header>

    <!-- Featured Image -->
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 -mt-4">
        <img src="https://images.unsplash.com/photo-1499750310107-5fef28a66643?w=1200&h=600&fit=crop" alt="Minimalist workspace" class="w-full h-64 md:h-96 lg:h-[500px] object-cover rounded-2xl shadow-xl">
    </div>

    <!-- Article Content -->
    <main class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid lg:grid-cols-3 gap-12">
            
            <!-- Main Content -->
            <article class="lg:col-span-2">
                <div class="bg-white rounded-2xl shadow-sm p-6 md:p-10">
                    
                    <!-- Social Share - Floating -->
                    <div class="hidden xl:flex flex-col fixed left-8 top-1/2 -translate-y-1/2 space-y-3">
                        <button class="w-10 h-10 bg-white rounded-full shadow-md flex items-center justify-center text-stone-500 hover:text-amber-600 hover:shadow-lg transition-all">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                        </button>
                        <button class="w-10 h-10 bg-white rounded-full shadow-md flex items-center justify-center text-stone-500 hover:text-amber-600 hover:shadow-lg transition-all">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm3 8h-1.35c-.538 0-.65.221-.65.778v1.222h2l-.209 2h-1.791v7h-3v-7h-2v-2h2v-2.308c0-1.769.931-2.692 3.029-2.692h1.971v3z"/></svg>
                        </button>
                        <button class="w-10 h-10 bg-white rounded-full shadow-md flex items-center justify-center text-stone-500 hover:text-amber-600 hover:shadow-lg transition-all">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                        </button>
                        <button class="w-10 h-10 bg-white rounded-full shadow-md flex items-center justify-center text-stone-500 hover:text-amber-600 hover:shadow-lg transition-all">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/></svg>
                        </button>
                    </div>

                    <!-- Article Body -->
                    <div class="prose text-stone-700 text-lg">
                        <p>
                            In a world that constantly pushes us toward more—more possessions, more commitments, more digital noise—the philosophy of minimalism offers a refreshing counterpoint. It's not about living with nothing; it's about living with intention.
                        </p>

                        <p>
                            When I first discovered minimalism five years ago, I was drowning in clutter. My apartment was filled with things I rarely used, my calendar was packed with obligations I didn't enjoy, and my mind was cluttered with worries about maintaining it all. Something had to change.
                        </p>

                        <h2>Understanding the Minimalist Mindset</h2>

                        <p>
                            Minimalism isn't a one-size-fits-all approach. For some, it means owning fewer than 100 items. For others, it's simply about being more intentional with purchases and time. The core principle remains the same: eliminate the excess to make room for what truly matters.
                        </p>

                        <blockquote>
                            "The secret of happiness, you see, is not found in seeking more, but in developing the capacity to enjoy less." — Socrates
                        </blockquote>

                        <p>
                            This ancient wisdom rings especially true today. Our modern consumer culture has convinced us that happiness lies in the next purchase, the next upgrade, the next acquisition. But research consistently shows that beyond meeting our basic needs, more stuff doesn't lead to more happiness.
                        </p>

                        <h2>Practical Steps to Begin</h2>

                        <p>
                            Starting your minimalist journey doesn't require dramatic gestures. Here are some practical steps that helped me begin:
                        </p>

                        <ul>
                            <li><strong>Start with one area:</strong> Choose a single drawer, shelf, or corner. Complete that before moving on. Small wins build momentum.</li>
                            <li><strong>Ask the right questions:</strong> For each item, ask: "Does this add value to my life? Have I used it in the past year? Would I buy it again today?"</li>
                            <li><strong>Embrace the one-in-one-out rule:</strong> For every new item that enters your home, one must leave. This prevents accumulation.</li>
                            <li><strong>Digitize what you can:</strong> Photos, documents, and media can live in the cloud, freeing physical space and mental energy.</li>
                            <li><strong>Practice mindful consumption:</strong> Before any purchase, wait 48 hours. Most impulse urges fade with time.</li>
                        </ul>

                        <h2>The Unexpected Benefits</h2>

                        <p>
                            What surprised me most about embracing minimalism wasn't the tidy spaces or the money saved—though both were welcome. It was the mental clarity that emerged. With fewer possessions to manage, fewer commitments to juggle, and fewer decisions to make, I found more energy for creativity, relationships, and personal growth.
                        </p>

                        <p>
                            My mornings became calmer. Decision fatigue decreased. I spent less time cleaning and organizing, more time reading and walking. The space I created wasn't empty—it was filled with possibility.
                        </p>

                        <figure class="my-8">
                            <img src="https://images.unsplash.com/photo-1494438639946-1ebd1d20bf85?w=800&h=400&fit=crop" alt="Minimalist interior" class="w-full rounded-xl">
                            <figcaption class="text-center text-stone-500 text-sm mt-3">A minimalist space invites calm and clarity into daily life.</figcaption>
                        </figure>

                        <h2>Minimalism in the Digital Age</h2>

                        <p>
                            Physical decluttering is only half the battle. Our digital lives often need even more attention. The average person checks their phone 96 times a day. We're subscribed to dozens of newsletters we never read, follow hundreds of accounts that add little value, and keep apps we haven't opened in months.
                        </p>

                        <p>
                            Digital minimalism means curating your online experience as carefully as your physical space. Unsubscribe ruthlessly. Unfollow accounts that don't inspire or inform. Turn off non-essential notifications. Your attention is your most valuable resource—protect it accordingly.
                        </p>

                        <h2>The Journey Continues</h2>

                        <p>
                            Minimalism isn't a destination; it's an ongoing practice. Our lives change, our needs evolve, and what serves us today may not serve us tomorrow. The key is maintaining awareness—regularly evaluating what we own, how we spend our time, and whether our choices align with our values.
                        </p>

                        <p>
                            If you're feeling overwhelmed by the pace of modern life, consider that the answer might not be doing more, but doing less—with greater intention. Start small. Be patient with yourself. And remember: the goal isn't perfection. It's freedom.
                        </p>
                    </div>

                    <!-- Tags -->
                    <div class="mt-10 pt-8 border-t border-stone-200">
                        <div class="flex flex-wrap gap-2">
                            <span class="text-stone-500 text-sm mr-2">Tags:</span>
                            <a href="#" class="px-3 py-1 bg-stone-100 text-stone-600 rounded-full text-sm hover:bg-amber-100 hover:text-amber-700 transition-colors">Minimalism</a>
                            <a href="#" class="px-3 py-1 bg-stone-100 text-stone-600 rounded-full text-sm hover:bg-amber-100 hover:text-amber-700 transition-colors">Lifestyle</a>
                            <a href="#" class="px-3 py-1 bg-stone-100 text-stone-600 rounded-full text-sm hover:bg-amber-100 hover:text-amber-700 transition-colors">Mindfulness</a>
                            <a href="#" class="px-3 py-1 bg-stone-100 text-stone-600 rounded-full text-sm hover:bg-amber-100 hover:text-amber-700 transition-colors">Self-improvement</a>
                        </div>
                    </div>

                    <!-- Mobile Share Buttons -->
                    <div class="xl:hidden mt-8 pt-8 border-t border-stone-200">
                        <p class="text-stone-500 text-sm mb-4">Share this article:</p>
                        <div class="flex space-x-3">
                            <button class="w-10 h-10 bg-stone-100 rounded-full flex items-center justify-center text-stone-500 hover:bg-amber-100 hover:text-amber-600 transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                            </button>
                            <button class="w-10 h-10 bg-stone-100 rounded-full flex items-center justify-center text-stone-500 hover:bg-amber-100 hover:text-amber-600 transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm3 8h-1.35c-.538 0-.65.221-.65.778v1.222h2l-.209 2h-1.791v7h-3v-7h-2v-2h2v-2.308c0-1.769.931-2.692 3.029-2.692h1.971v3z"/></svg>
                            </button>
                            <button class="w-10 h-10 bg-stone-100 rounded-full flex items-center justify-center text-stone-500 hover:bg-amber-100 hover:text-amber-600 transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                            </button>
                            <button class="w-10 h-10 bg-stone-100 rounded-full flex items-center justify-center text-stone-500 hover:bg-amber-100 hover:text-amber-600 transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/></svg>
                            </button>
                        </div>
                    </div>

                    <!-- Author Bio -->
                    <div class="mt-10 pt-8 border-t border-stone-200">
                        <div class="flex flex-col sm:flex-row gap-6 bg-stone-50 rounded-xl p-6">
                            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=200&h=200&fit=crop&crop=face" alt="Sarah Mitchell" class="w-20 h-20 rounded-full object-cover mx-auto sm:mx-0">
                            <div class="text-center sm:text-left">
                                <p class="text-sm text-amber-600 font-medium mb-1">Written by</p>
                                <h4 class="font-serif text-xl font-bold text-stone-900 mb-2">Sarah Mitchell</h4>
                                <p class="text-stone-600 mb-3">Sarah is a lifestyle writer and mindfulness advocate. She's spent the last decade exploring intentional living and shares her journey to help others find clarity in the chaos of modern life.</p>
                                <div class="flex justify-center sm:justify-start space-x-3">
                                    <a href="#" class="text-stone-400 hover:text-amber-600 transition-colors">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                                    </a>
                                    <a href="#" class="text-stone-400 hover:text-amber-600 transition-colors">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Post Navigation -->
                    <div class="mt-10 pt-8 border-t border-stone-200 grid sm:grid-cols-2 gap-4">
                        <a href="#" class="group flex items-center gap-4 p-4 bg-stone-50 rounded-xl hover:bg-amber-50 transition-colors">
                            <svg class="w-5 h-5 text-stone-400 group-hover:text-amber-600 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                            <div>
                                <p class="text-xs text-stone-400 mb-1">Previous Article</p>
                                <p class="text-sm font-medium text-stone-700 group-hover:text-amber-700 transition-colors">Finding Peace Through Daily Journaling</p>
                            </div>
                        </a>
                        <a href="#" class="group flex items-center justify-end gap-4 p-4 bg-stone-50 rounded-xl hover:bg-amber-50 transition-colors text-right">
                            <div>
                                <p class="text-xs text-stone-400 mb-1">Next Article</p>
                                <p class="text-sm font-medium text-stone-700 group-hover:text-amber-700 transition-colors">Digital Detox: Reclaiming Your Time</p>
                            </div>
                            <svg class="w-5 h-5 text-stone-400 group-hover:text-amber-600 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Comments Section -->
                <div class="bg-white rounded-2xl shadow-sm p-6 md:p-10 mt-8">
                    <h3 class="font-serif text-2xl font-bold text-stone-900 mb-8">Comments (3)</h3>

                    <!-- Comment Form -->
                    <form id="commentForm" class="mb-10">
                        <textarea id="commentText" rows="4" placeholder="Share your thoughts..." class="w-full px-4 py-3 rounded-xl border border-stone-200 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent resize-none mb-4"></textarea>
                        <button type="submit" class="px-6 py-3 bg-stone-900 text-white rounded-full hover:bg-stone-800 transition-colors font-medium">
                            Post Comment
                        </button>
                    </form>

                    <!-- Comments List -->
                    <div class="space-y-8">
                        <!-- Comment 1 -->
                        <div class="flex gap-4">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&h=100&fit=crop&crop=face" alt="James Wilson" class="w-12 h-12 rounded-full object-cover flex-shrink-0">
                            <div class="flex-1">
                                <div class="flex items-center gap-3 mb-2">
                                    <h4 class="font-medium text-stone-900">James Wilson</h4>
                                    <span class="text-stone-400 text-sm">2 days ago</span>
                                </div>
                                <p class="text-stone-600 mb-3">This article really resonated with me. I've been trying to declutter my life for months, and your practical steps gave me a clear starting point. The one-in-one-out rule is genius!</p>
                                <button class="text-amber-600 text-sm font-medium hover:underline">Reply</button>
                            </div>
                        </div>

                        <!-- Comment 2 with Reply -->
                        <div class="flex gap-4">
                            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=100&h=100&fit=crop&crop=face" alt="Emily Chen" class="w-12 h-12 rounded-full object-cover flex-shrink-0">
                            <div class="flex-1">
                                <div class="flex items-center gap-3 mb-2">
                                    <h4 class="font-medium text-stone-900">Emily Chen</h4>
                                    <span class="text-stone-400 text-sm">3 days ago</span>
                                </div>
                                <p class="text-stone-600 mb-3">I love the section on digital minimalism. My phone notifications were out of control until I read this. Already feeling more peaceful!</p>
                                <button class="text-amber-600 text-sm font-medium hover:underline">Reply</button>

                                <!-- Nested Reply -->
                                <div class="flex gap-4 mt-6 pl-4 border-l-2 border-stone-100">
                                    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100&h=100&fit=crop&crop=face" alt="Sarah Mitchell" class="w-10 h-10 rounded-full object-cover flex-shrink-0">
                                    <div class="flex-1">
                                        <div class="flex items-center gap-3 mb-2">
                                            <h4 class="font-medium text-stone-900">Sarah Mitchell</h4>
                                            <span class="bg-amber-100 text-amber-700 text-xs px-2 py-0.5 rounded-full">Author</span>
                                            <span class="text-stone-400 text-sm">2 days ago</span>
                                        </div>
                                        <p class="text-stone-600">Thank you, Emily! Digital decluttering was a game-changer for me too. So glad it's helping you find more peace. 💛</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Comment 3 -->
                        <div class="flex gap-4">
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=100&h=100&fit=crop&crop=face" alt="David Park" class="w-12 h-12 rounded-full object-cover flex-shrink-0">
                            <div class="flex-1">
                                <div class="flex items-center gap-3 mb-2">
                                    <h4 class="font-medium text-stone-900">David Park</h4>
                                    <span class="text-stone-400 text-sm">5 days ago</span>
                                </div>
                                <p class="text-stone-600 mb-3">The Socrates quote is perfect. I've bookmarked this article to revisit whenever I feel the urge to make unnecessary purchases. Thank you for this thoughtful piece!</p>
                                <button class="text-amber-600 text-sm font-medium hover:underline">Reply</button>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Sidebar -->
            <aside class="space-y-8">
                <!-- Table of Contents -->
                <div class="bg-white rounded-2xl p-6 shadow-sm sticky top-24">
                    <h3 class="font-serif text-xl font-bold text-stone-900 mb-4">Table of Contents</h3>
                    <nav class="space-y-2">
                        <a href="#" class="block text-stone-600 hover:text-amber-600 transition-colors py-1 border-l-2 border-transparent hover:border-amber-500 pl-3">Understanding the Minimalist Mindset</a>
                        <a href="#" class="block text-stone-600 hover:text-amber-600 transition-colors py-1 border-l-2 border-transparent hover:border-amber-500 pl-3">Practical Steps to Begin</a>
                        <a href="#" class="block text-stone-600 hover:text-amber-600 transition-colors py-1 border-l-2 border-transparent hover:border-amber-500 pl-3">The Unexpected Benefits</a>
                        <a href="#" class="block text-stone-600 hover:text-amber-600 transition-colors py-1 border-l-2 border-transparent hover:border-amber-500 pl-3">Minimalism in the Digital Age</a>
                        <a href="#" class="block text-stone-600 hover:text-amber-600 transition-colors py-1 border-l-2 border-transparent hover:border-amber-500 pl-3">The Journey Continues</a>
                    </nav>
                </div>

                <!-- Newsletter Widget -->
                <div class="bg-gradient-to-br from-stone-900 to-stone-800 rounded-2xl p-6 text-white">
                    <h3 class="font-serif text-xl font-bold mb-2">Newsletter</h3>
                    <p class="text-stone-300 text-sm mb-4">Get the latest articles delivered straight to your inbox.</p>
                    <form id="newsletterForm" class="space-y-3">
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
                    </div>
                </div>
            </aside>
        </div>

        <!-- Related Articles -->
        <section class="mt-16">
            <h2 class="font-serif text-3xl font-bold text-stone-900 mb-8">Related Articles</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Related Article 1 -->
                <article class="bg-white rounded-2xl shadow-sm overflow-hidden group hover:shadow-lg transition-shadow">
                    <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794?w=400&h=250&fit=crop" alt="Journaling" class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                    <div class="p-6">
                        <span class="text-amber-600 text-sm font-medium">Lifestyle</span>
                        <h3 class="font-serif text-lg font-bold text-stone-900 mt-2 mb-3 group-hover:text-amber-600 transition-colors">
                            <a href="#">Finding Peace Through Daily Journaling Practices</a>
                        </h3>
                        <p class="text-stone-500 text-sm">June 12, 2025 · 6 min read</p>
                    </div>
                </article>

                <!-- Related Article 2 -->
                <article class="bg-white rounded-2xl shadow-sm overflow-hidden group hover:shadow-lg transition-shadow">
                    <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?w=400&h=250&fit=crop" alt="Digital Detox" class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                    <div class="p-6">
                        <span class="text-amber-600 text-sm font-medium">Technology</span>
                        <h3 class="font-serif text-lg font-bold text-stone-900 mt-2 mb-3 group-hover:text-amber-600 transition-colors">
                            <a href="#">Digital Detox: Reclaiming Your Time in a Connected World</a>
                        </h3>
                        <p class="text-stone-500 text-sm">June 5, 2025 · 7 min read</p>
                    </div>
                </article>

                <!-- Related Article 3 -->
                <article class="bg-white rounded-2xl shadow-sm overflow-hidden group hover:shadow-lg transition-shadow">
                    <img src="https://images.unsplash.com/photo-1493770348161-369560ae357d?w=400&h=250&fit=crop" alt="Mindful Eating" class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                    <div class="p-6">
                        <span class="text-amber-600 text-sm font-medium">Wellness</span>
                        <h3 class="font-serif text-lg font-bold text-stone-900 mt-2 mb-3 group-hover:text-amber-600 transition-colors">
                            <a href="#">Nourishing Your Body: A Guide to Mindful Eating</a>
                        </h3>
                        <p class="text-stone-500 text-sm">June 8, 2025 · 5 min read</p>
                    </div>
                </article>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-stone-900 text-white py-16">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8 mb-12">
                <div class="md:col-span-2">
                    <a href="index.html" class="font-serif text-3xl font-bold">Minimal<span class="text-amber-500">.</span></a>
                    <p class="text-stone-400 mt-4 max-w-md">A blog about thoughtful living, mindful practices, and finding beauty in simplicity. Join our community of mindful readers.</p>
                    <div class="flex space-x-4 mt-6">
                        <a href="#" class="w-10 h-10 bg-stone-800 rounded-full flex items-center justify-center hover:bg-amber-500 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-stone-800 rounded-full flex items-center justify-center hover:bg-amber-500 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-stone-800 rounded-full flex items-center justify-center hover:bg-amber-500 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/></svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-stone-800 rounded-full flex items-center justify-center hover:bg-amber-500 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm3 8h-1.35c-.538 0-.65.221-.65.778v1.222h2l-.209 2h-1.791v7h-3v-7h-2v-2h2v-2.308c0-1.769.931-2.692 3.029-2.692h1.971v3z"/></svg>
                        </a>
                    </div>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2 text-stone-400">
                        <li><a href="index.html" class="hover:text-amber-500 transition-colors">Home</a></li>
                        <li><a href="#" class="hover:text-amber-500 transition-colors">About Us</a></li>
                        <li><a href="#" class="hover:text-amber-500 transition-colors">Articles</a></li>
                        <li><a href="#" class="hover:text-amber-500 transition-colors">Contact</a></li>
                        <li><a href="#" class="hover:text-amber-500 transition-colors">Privacy Policy</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Categories</h4>
                    <ul class="space-y-2 text-stone-400">
                        <li><a href="#" class="hover:text-amber-500 transition-colors">Lifestyle</a></li>
                        <li><a href="#" class="hover:text-amber-500 transition-colors">Travel</a></li>
                        <li><a href="#" class="hover:text-amber-500 transition-colors">Wellness</a></li>
                        <li><a href="#" class="hover:text-amber-500 transition-colors">Technology</a></li>
                        <li><a href="#" class="hover:text-amber-500 transition-colors">Creativity</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-stone-800 pt-8 text-center text-stone-500 text-sm">
                <p>© 2025 Minimal Blog. All rights reserved. Crafted with ♥ for mindful readers.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile Menu Toggle
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');

        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Comment form submission
        document.getElementById('commentForm').addEventListener('submit', (e) => {
            e.preventDefault();
            const comment = document.getElementById('commentText').value;
            if (comment.trim()) {
                alert('Thank you for your comment! It will appear after moderation.');
                document.getElementById('commentText').value = '';
            }
        });

        // Newsletter form submission
        document.getElementById('newsletterForm').addEventListener('submit', (e) => {
            e.preventDefault();
            const email = e.target.querySelector('input[type="email"]').value;
            if (email) {
                alert('Thank you for subscribing! 🎉');
                e.target.reset();
            }
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
</body>
</html>
