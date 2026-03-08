<nav class="sticky top-0 z-50 glass-nav" x-data="{ 
    searchOpen: false, 
    mobileMenuOpen: false,
    searchQuery: '', 
    results: [], 
    loading: false,
    async performSearch() {
        if (this.searchQuery.length < 2) {
            this.results = [];
            return;
        }
        this.loading = true;
        try {
            const response = await fetch(`/api/search?q=${encodeURIComponent(this.searchQuery)}`);
            this.results = await response.json();
        } catch (e) {
            console.error('Search failed', e);
        } finally {
            this.loading = false;
        }
    }
}" @keydown.escape="searchOpen = false; mobileMenuOpen = false">
    <div id="reading-progress" class="absolute top-0 left-0 h-[3px] bg-mn-black transition-all duration-300 ease-out z-[60]" style="width: 0%"></div>
    <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
        <div class="flex items-center space-x-4">
            <!-- Hamburger Button (Mobile Only) -->
            <div id="desktop-hidden-hamburger" class="md:hidden lg:hidden">
                <button 
                    @click="mobileMenuOpen = !mobileMenuOpen; searchOpen = false"
                    class="flex items-center justify-center w-12 h-12 text-mn-black focus:outline-none z-[80] -ml-2 select-none"
                    aria-label="Toggle Menu"
                >
                    <!-- Thicker Hamburger -->
                    <svg x-show="!mobileMenuOpen" class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <!-- Thicker Close X -->
                    <svg x-show="mobileMenuOpen" x-cloak class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <style>
                @media (min-width: 768px) {
                    #desktop-hidden-hamburger {
                        display: none !important;
                    }
                }
            </style>

            <a href="/" class="flex items-center space-x-3 group active:scale-95 transition-transform duration-200">
                <?php if (isset($component)) { $__componentOriginal987d96ec78ed1cf75b349e2e5981978f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal987d96ec78ed1cf75b349e2e5981978f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.logo','data' => ['class' => 'w-10 h-10 group-hover:opacity-80 transition-opacity']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-10 h-10 group-hover:opacity-80 transition-opacity']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal987d96ec78ed1cf75b349e2e5981978f)): ?>
<?php $attributes = $__attributesOriginal987d96ec78ed1cf75b349e2e5981978f; ?>
<?php unset($__attributesOriginal987d96ec78ed1cf75b349e2e5981978f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal987d96ec78ed1cf75b349e2e5981978f)): ?>
<?php $component = $__componentOriginal987d96ec78ed1cf75b349e2e5981978f; ?>
<?php unset($__componentOriginal987d96ec78ed1cf75b349e2e5981978f); ?>
<?php endif; ?>
                <div class="flex flex-col -space-y-1">
                    <span class="font-sans font-bold tracking-tightest text-xl uppercase">MN</span>
                    <span class="text-[9px] uppercase tracking-[0.4em] text-mn-slate font-bold">Editorial</span>
                </div>
            </a>
        </div>

        <div class="hidden md:flex items-center space-x-10">
            <a href="/category/philosophy" class="nav-link">Philosophy</a>
            <a href="/category/technology" class="nav-link">Technology</a>
            <a href="/category/history" class="nav-link">History</a>
            <a href="/about" class="nav-link">About</a>
        </div>

        <div class="flex items-center space-x-3 md:space-x-4">
            <!-- Desktop Search Bar -->
            <div class="hidden md:flex items-center bg-mn-pearl/30 rounded-full px-4 py-1.5 border border-mn-pearl/50 focus-within:border-mn-black/20 focus-within:bg-white transition-all duration-300">
                <svg class="w-4 h-4 text-mn-slate/50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                <input 
                    type="text" 
                    x-model="searchQuery" 
                    @input.debounce.300ms="performSearch(); searchOpen = searchQuery.length >= 2" 
                    @focus="searchQuery.length >= 2 ? searchOpen = true : null"
                    placeholder="Search..." 
                    class="bg-transparent border-none focus:ring-0 text-[13px] w-24 lg:w-40 font-sans ml-2 placeholder:text-mn-silver"
                >
            </div>

            <!-- Mobile Search Toggle -->
            <button 
                @click="searchOpen = !searchOpen; mobileMenuOpen = false; if(searchOpen) $nextTick(() => $refs.searchInput.focus())"
                class="md:hidden text-mn-slate hover:text-mn-black transition-colors p-2 rounded-full hover:bg-mn-pearl/50"
                :class="searchOpen && 'text-mn-black bg-mn-pearl/50'"
            >
                <svg x-show="!searchOpen" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                <svg x-show="searchOpen" x-cloak class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>

            <!-- RSS Feed -->
            <a href="<?php echo e(\App\Models\Setting::where('key', 'rss_feed_url')->value('value') ?? '/rss'); ?>" target="_blank" class="text-mn-slate hover:text-mn-black transition-colors p-2 rounded-full hover:bg-mn-pearl/50" title="RSS Feed">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 11a9 9 0 019 9M4 4a16 16 0 0116 16M4 20h.01"></path>
                </svg>
            </a>
        </div>
    </div>

    <!-- Mobile Menu Drawer (Below Header) -->
    <div 
        x-show="mobileMenuOpen" 
        x-transition:enter="transition ease-out duration-300 transform"
        x-transition:enter-start="-translate-y-4 opacity-0"
        x-transition:enter-end="translate-y-0 opacity-100"
        x-transition:leave="transition ease-in duration-200 transform"
        x-transition:leave-start="translate-y-0 opacity-100"
        x-transition:leave-end="-translate-y-4 opacity-0"
        x-cloak
        class="absolute top-full left-0 w-full bg-white z-[95] md:hidden shadow-[0_20px_50px_rgba(0,0,0,0.1)] border-t border-mn-pearl/30"
    >
        <nav class="flex flex-col space-y-6 items-center text-center py-[25px] px-6">
            <a href="/" @click="mobileMenuOpen = false" 
               x-show="mobileMenuOpen"
               x-transition:enter="transition ease-out duration-500 delay-[100ms]"
               x-transition:enter-start="opacity-0 translate-y-4"
               x-transition:enter-end="opacity-100 translate-y-0"
               class="text-[11px] font-display text-mn-black transition-colors capitalize tracking-[0.4em] hover:text-mn-slate">Home</a>
            <a href="/category/philosophy" @click="mobileMenuOpen = false" 
               x-show="mobileMenuOpen"
               x-transition:enter="transition ease-out duration-500 delay-[200ms]"
               x-transition:enter-start="opacity-0 translate-y-4"
               x-transition:enter-end="opacity-100 translate-y-0"
               class="text-[11px] font-display text-mn-black transition-colors capitalize tracking-[0.4em] hover:text-mn-slate">Philosophy</a>
            <a href="/category/technology" @click="mobileMenuOpen = false" 
               x-show="mobileMenuOpen"
               x-transition:enter="transition ease-out duration-500 delay-[300ms]"
               x-transition:enter-start="opacity-0 translate-y-4"
               x-transition:enter-end="opacity-100 translate-y-0"
               class="text-[11px] font-display text-mn-black transition-colors capitalize tracking-[0.4em] hover:text-mn-slate">Technology</a>
            <a href="/about" @click="mobileMenuOpen = false" 
               x-show="mobileMenuOpen"
               x-transition:enter="transition ease-out duration-500 delay-[400ms]"
               x-transition:enter-start="opacity-0 translate-y-4"
               x-transition:enter-end="opacity-100 translate-y-0"
               class="text-[11px] font-display text-mn-black transition-colors capitalize tracking-[0.4em] hover:text-mn-slate">About</a>
            <a href="/contact" @click="mobileMenuOpen = false" 
               x-show="mobileMenuOpen"
               x-transition:enter="transition ease-out duration-500 delay-[500ms]"
               x-transition:enter-start="opacity-0 translate-y-4"
               x-transition:enter-end="opacity-100 translate-y-0"
               class="text-[11px] font-display text-mn-black transition-colors capitalize tracking-[0.4em] hover:text-mn-slate">Contact</a>
        </nav>
    </div>
    </div>

    <!-- Full-Width Search Bar -->
    <div 
        x-show="searchOpen"
        x-transition:enter="transition ease-out duration-300 transform"
        x-transition:enter-start="opacity-0 -translate-y-4"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-200 transform"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-4"
        @click.away="searchOpen = false"
        x-cloak
        class="absolute top-full left-0 w-full px-6 py-4 z-40"
    >
        <div class="max-w-7xl mx-auto">
            <div class="bg-white rounded-2xl shadow-[0_20px_50px_rgba(0,0,0,0.1)] border border-mn-pearl/50 overflow-hidden">
                <div class="relative flex items-center p-2">
                    <div class="pl-6 pointer-events-none">
                        <svg class="w-5 h-5 text-mn-slate/50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <input 
                        x-ref="searchInput"
                        type="search" 
                        x-model="searchQuery"
                        @input.debounce.300ms="performSearch()"
                        @keydown.escape="searchOpen = false"
                        placeholder="Search for articles, movements, or ideas..." 
                        class="w-full bg-transparent px-6 py-4 text-xl md:text-2xl font-display focus:outline-none placeholder:text-mn-silver/60"
                    >
                    <div x-show="loading" class="pr-6" x-cloak>
                        <svg class="animate-spin h-6 w-6 text-mn-silver" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                    </div>
                </div>

                <!-- Live Results Area -->
                <div x-show="results.length > 0 || (searchQuery.length >= 2 && !loading)" x-cloak class="border-t border-mn-pearl bg-mn-paper/20">
                    <div class="max-h-[60vh] overflow-y-auto custom-scrollbar">
                        <template x-if="results.length > 0">
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-1 p-4">
                                <template x-for="post in results" :key="post.slug">
                                    <a :href="'/post/' + post.slug" class="flex items-center p-4 hover:bg-white rounded-xl transition-all group shadow-sm hover:shadow-md border border-transparent hover:border-mn-pearl">
                                        <div class="flex-shrink-0 w-16 h-16 bg-mn-pearl border border-mn-pearl rounded-lg overflow-hidden">
                                            <template x-if="post.image">
                                                <img :src="post.image" class="w-full h-full object-cover">
                                            </template>
                                            <template x-if="!post.image">
                                                <div class="w-full h-full flex items-center justify-center p-2 text-center">
                                                    <span class="text-[8px] font-bold text-mn-slate uppercase whitespace-normal leading-tight" x-text="post.category"></span>
                                                </div>
                                            </template>
                                        </div>
                                        <div class="ml-4 flex-grow min-w-0">
                                            <span class="text-[9px] uppercase tracking-widest font-bold text-mn-slate" x-text="post.category"></span>
                                            <h4 class="text-sm font-display leading-tight truncate mt-0.5 group-hover:text-mn-black" x-text="post.title"></h4>
                                            <p class="text-[10px] text-mn-graphite font-serif mt-0.5 line-clamp-1 opacity-60" x-text="post.excerpt"></p>
                                        </div>
                                    </a>
                                </template>
                            </div>
                        </template>
                        
                        <template x-if="results.length === 0 && !loading && searchQuery.length >= 2">
                            <div class="py-20 text-center">
                                <div class="mb-4">
                                    <svg class="w-12 h-12 text-mn-silver/30 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9.172 9.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </div>
                                <p class="text-mn-graphite font-serif italic text-xl">We couldn't find matches for this inquiry.</p>
                                <p class="text-[10px] uppercase tracking-[0.3em] text-mn-slate font-bold mt-4">Try different concepts or keywords.</p>
                            </div>
                        </template>
                    </div>
                    
                    <div class="px-8 py-3 bg-mn-paper border-t border-mn-pearl flex justify-between items-center">
                        <span class="text-[9px] uppercase tracking-widest text-mn-slate font-bold">Inquiry Search Engine v1.0</span>
                        <div class="flex items-center space-x-4">
                            <span class="text-[9px] uppercase tracking-widest text-mn-silver font-bold">Press ESC to exit</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<?php /**PATH /Users/mcorucu/.gemini/antigravity/playground/solitary-viking/resources/views/components/navbar.blade.php ENDPATH**/ ?>