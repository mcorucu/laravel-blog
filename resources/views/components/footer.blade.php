<footer class="bg-mn-pearl/30 border-t border-mn-pearl pt-16 md:pt-24 pb-12 md:pb-16 px-6">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-12 gap-12 lg:gap-16 text-center md:text-left">
        <!-- Brand Section -->
        <div class="md:col-span-12 lg:col-span-4 space-y-8 md:space-y-10 flex flex-col items-center md:items-start">
            <a href="/" class="flex items-center space-x-3 group">
                <x-logo class="w-12 h-12 transition-transform duration-500 group-hover:scale-110" />
                <div class="flex flex-col -space-y-1">
                    <span class="font-sans font-bold tracking-tightest text-2xl uppercase text-mn-black">MN</span>
                    <span class="text-[10px] uppercase tracking-[0.5em] text-mn-slate font-bold">Editorial</span>
                </div>
            </a>
            <p class="text-mn-graphite font-serif text-lg leading-relaxed max-w-sm opacity-80 h-auto">
                A sanctuary for focused thought. We curate deep inquiries into the intersection of history, technology, and the human spirit.
            </p>
            
            <!-- Dynamic Social Links - Fixed Order -->
            <div class="flex flex-wrap justify-center md:justify-start items-center space-x-6 md:space-x-8 lg:space-x-10 pt-4">
                @if($settings['social_youtube'] ?? '')
                    <a href="{{ $settings['social_youtube'] }}" target="_blank" class="text-mn-slate hover:text-mn-black transition-colors lowercase font-sans text-xs md:text-sm tracking-tight border-b border-transparent hover:border-mn-black pb-0.5">YouTube</a>
                @endif
                @if($settings['social_x'] ?? '')
                    <a href="{{ $settings['social_x'] }}" target="_blank" class="text-mn-slate hover:text-mn-black transition-colors lowercase font-sans text-xs md:text-sm tracking-tight border-b border-transparent hover:border-mn-black pb-0.5">X</a>
                @endif
                @if($settings['social_instagram'] ?? '')
                    <a href="{{ $settings['social_instagram'] }}" target="_blank" class="text-mn-slate hover:text-mn-black transition-colors lowercase font-sans text-xs md:text-sm tracking-tight border-b border-transparent hover:border-mn-black pb-0.5">Instagram</a>
                @endif
                @if($settings['social_rss'] ?? '')
                    <a href="{{ $settings['social_rss'] }}" class="text-mn-slate hover:text-mn-black transition-colors lowercase font-sans text-xs md:text-sm tracking-tight border-b border-transparent hover:border-mn-black pb-0.5">RSS</a>
                @endif
            </div>
        </div>
        
        <!-- Navigation Section -->
        <div class="hidden md:grid md:grid-cols-1 md:col-span-2 gap-12 md:text-left">
            <div class="space-y-8">
                <div class="space-y-4">
                    <h4 class="text-[10px] uppercase tracking-[0.3em] font-bold text-mn-black">Inquiries</h4>
                    <ul class="space-y-3">
                        <li><a href="/category/philosophy" class="nav-link text-[11px]">Philosophy</a></li>
                        <li><a href="/category/technology" class="nav-link text-[11px]">Technology</a></li>
                        <li><a href="/category/history" class="nav-link text-[11px]">History</a></li>
                    </ul>
                </div>
                <div class="space-y-4">
                    <h4 class="text-[10px] uppercase tracking-[0.3em] font-bold text-mn-black">Narrative</h4>
                    <ul class="space-y-3">
                        <li><a href="/about" class="nav-link text-[11px]">About</a></li>
                        <li><a href="/contact" class="nav-link text-[11px]">Inquiry</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Connected Newsletter Section -->
        <div class="hidden md:flex md:col-span-3 space-y-8 flex-col items-center md:items-start"
             x-data="{ email: '', loading: false, success: false, error: '' }">
            <h4 class="text-[10px] uppercase tracking-[0.3em] font-bold text-mn-black">Journal</h4>
            <p class="text-xs text-mn-slate font-serif leading-relaxed max-w-xs">Weekly reflections delivered with the precision of print and the ease of digital.</p>
            
            <form @submit.prevent="loading = true; error = ''; 
                fetch('/api/subscribe', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json', 'Accept': 'application/json', 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
                    body: JSON.stringify({ email: email })
                })
                .then(res => res.json())
                .then(data => { if (data.success) { success = true; email = ''; } else { error = data.message; } })
                .catch(() => error = 'Error.')
                .finally(() => loading = false)"
                class="relative w-full">
                
                <input type="email" x-model="email" required placeholder="Email Address" 
                       class="w-full bg-transparent border-b border-mn-silver/50 py-3 text-sm focus:outline-none focus:border-mn-black transition-colors font-serif italic placeholder:text-mn-silver/50"
                       :disabled="loading || success">
                
                <button type="submit" :disabled="loading || success" class="absolute right-0 bottom-3 text-mn-black hover:translate-x-1 transition-transform disabled:opacity-30">
                    <svg x-show="!loading && !success" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    <svg x-show="loading" x-cloak class="w-4 h-4 animate-spin" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
                    <svg x-show="success" x-cloak class="w-4 h-4 text-mn-black" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                </button>
                
                <div x-show="error" x-cloak class="absolute top-full left-0 text-[8px] text-mn-black font-bold uppercase tracking-widest mt-1" x-text="error"></div>
                <div x-show="success" x-cloak class="absolute top-full left-0 text-[8px] text-mn-black font-bold uppercase tracking-widest mt-1">Synchronized.</div>
            </form>
        </div>

        <!-- X (Twitter) Feed Section -->
        <div class="hidden md:flex md:col-span-3 flex-col space-y-6 md:text-left">
            <h4 class="text-[10px] uppercase tracking-[0.3em] font-bold text-mn-black">Latest Inquiries</h4>
            <div class="h-48 overflow-y-auto no-scrollbar rounded-lg border border-mn-pearl/50 p-2">
                <a class="twitter-timeline" 
                   data-height="300" 
                   data-theme="light" 
                   data-chrome="noheader nofooter noborders transparent"
                   href="{{ $settings['social_x'] ?? 'https://twitter.com/editorial' }}">
                   Tweets by MN
                </a> 
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </div>
    </div>
    
    <!-- Legal Section -->
    <div class="max-w-7xl mx-auto mt-16 md:mt-24 pt-10 border-t border-mn-pearl flex flex-col md:flex-row items-center justify-between space-y-8 md:space-y-0 text-center md:text-left">
        <span class="text-[9px] text-mn-slate uppercase tracking-[0.5em] font-bold">© {{ date('Y') }} MN Editorial — Designed for Clarity.</span>
        <div class="flex items-center space-x-8">
            <span class="text-[9px] text-mn-slate uppercase tracking-[0.2em] font-medium opacity-50">Apple-Inspired</span>
            <span class="text-[9px] text-mn-slate uppercase tracking-[0.2em] font-medium opacity-50">Kindle-Comfort</span>
        </div>
    </div>
</footer>
