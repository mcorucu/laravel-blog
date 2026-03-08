@props(['post'])

<div class="group card-hover-effect bg-mn-white border border-mn-pearl/30 overflow-hidden">
    <a href="/post/{{ $post->slug }}" class="block">
        <div class="aspect-[16/10] overflow-hidden bg-mn-pearl/50 flex items-center justify-center relative">
            @if($post->featured_image)
                <img src="{{ \Illuminate\Support\Facades\Storage::url($post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 group-hover:scale-110 transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)]">
            @elseif($post->featured_svg)
                <div class="p-12 w-full h-full flex items-center justify-center">
                    <img src="/assets/illustrations/{{ $post->featured_svg }}" alt="{{ $post->title }}" class="w-full h-full object-contain opacity-70 group-hover:opacity-100 group-hover:scale-110 transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)]">
                </div>
            @else
                <x-logo class="w-20 h-20 opacity-05" />
            @endif
            
            <div class="absolute inset-0 bg-gradient-to-t from-mn-pearl/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
        </div>
        
        <div class="p-8 space-y-5">
            <div class="flex items-center justify-between">
                <span class="text-[10px] uppercase tracking-[0.2em] font-bold text-mn-slate">{{ $post->category->name }}</span>
                <span class="text-[10px] text-mn-slate font-sans">{{ $post->reading_time }} min read</span>
            </div>
            
            <h3 class="text-2xl font-display leading-[1.2] group-hover:text-mn-charcoal transition-colors">
                {{ $post->title }}
            </h3>
            
            <p class="text-mn-graphite font-serif text-[15px] line-clamp-2 leading-relaxed opacity-80 group-hover:opacity-100 transition-opacity">
                {{ $post->excerpt }}
            </p>
            
            <div class="pt-2 flex items-center space-x-2 text-[10px] uppercase tracking-widest font-bold text-mn-black group-hover:translate-x-1 transition-transform duration-500">
                <span>Read Inquiry</span>
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
            </div>
        </div>
    </a>
</div>
