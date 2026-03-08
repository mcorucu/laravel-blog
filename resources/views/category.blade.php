@extends('layouts.app')

@section('content')
<section class="py-[15px] md:py-[35px] px-6 bg-mn-paper overflow-hidden">
    <header class="max-w-7xl mx-auto mb-20 md:mb-32 grid grid-cols-1 lg:grid-cols-12 gap-8 md:gap-12 items-end">
        <div class="lg:col-span-8 flex flex-col items-start space-y-6 md:space-y-8 animate-fade-in">
            <div class="flex items-center space-x-3">
                <span class="text-[10px] uppercase tracking-[0.5em] font-bold text-mn-slate">Editorial archive</span>
                <div class="w-10 h-[1px] bg-mn-silver"></div>
            </div>
            <h1 class="text-6xl md:text-9xl font-display font-medium tracking-tightest leading-[0.9]">
                {{ $category->name }}
            </h1>
        </div>
        <div class="lg:col-span-4 animate-fade-in-up delay-300">
            <p class="text-lg md:text-xl font-serif text-mn-graphite leading-relaxed border-l-2 border-mn-black pl-6 md:pl-8 italic">
                {{ $category->description }}
            </p>
        </div>
    </header>

    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-12 gap-y-24">
            @foreach($posts as $post)
                <x-post-card :post="$post" />
            @endforeach
        </div>

        <div class="mt-40 pt-16 border-t border-mn-silver/20 flex items-center justify-between">
            <span class="text-[10px] uppercase tracking-[0.2em] font-bold text-mn-slate">Page {{ $posts->currentPage() }} of {{ $posts->lastPage() }}</span>
            <div class="flex space-x-8">
                @if($posts->onFirstPage())
                    <span class="text-[10px] uppercase tracking-[0.2em] font-bold text-mn-silver cursor-not-allowed">Previous</span>
                @else
                    <a href="{{ $posts->previousPageUrl() }}" class="text-[10px] uppercase tracking-[0.2em] font-bold text-mn-black hover:text-mn-slate transition-colors">Previous</a>
                @endif

                @if($posts->hasMorePages())
                    <a href="{{ $posts->nextPageUrl() }}" class="text-[10px] uppercase tracking-[0.2em] font-bold text-mn-black hover:text-mn-slate transition-colors">Next Inquiry</a>
                @else
                    <span class="text-[10px] uppercase tracking-[0.2em] font-bold text-mn-silver cursor-not-allowed">Next</span>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection
