@extends('layouts.app')

@section('content')
<section class="max-w-5xl mx-auto py-[15px] md:py-[35px] px-6 space-y-12">
    <div class="space-y-12 animate-fade-in-up">
        <div class="flex items-center space-x-4">
            <span class="text-[10px] uppercase tracking-[0.5em] font-bold text-mn-slate">The Narrative</span>
            <div class="w-12 h-[1px] bg-mn-black"></div>
        </div>
        <h1 class="text-7xl md:text-9xl font-display font-medium tracking-tightest leading-[0.9]">Claritas.</h1>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-12 gap-16 md:gap-24 items-start font-serif">
        <div class="md:col-span-12 space-y-12 text-2xl md:text-3xl leading-relaxed text-mn-black animate-fade-in delay-300">
            <p class="font-display italic text-4xl md:text-5xl leading-tight border-b border-mn-pearl pb-16">
                MN was founded on a singular premise: depth requires distance. Distance from noise, distraction, and the immediate buzz of the superficial.
            </p>
            
            <p class="pt-8">Our mission is to provide an architecture for focus. We believe the digital age should not be the death of long-form thought, but its evolution. By combining the aesthetic precision of Apple with the tactile comfort of e-link reading, we have built a sanctuary for the inquisitive mind.</p>
            
            <p>We explore philosophy, technology, history, and culture not as separate silos, but as interconnected synapses in the tapestry of human understanding. Every inquiry we publish is designed to be lived with, not just consumed.</p>
        </div>

        <div class="md:col-span-12 pt-24 border-t border-mn-pearl flex flex-col md:flex-row items-start justify-between space-y-12 md:space-y-0 animate-fade-in delay-500">
            <div class="space-y-4">
                <span class="block text-[10px] uppercase tracking-[0.4em] text-mn-slate font-bold">Curated By</span>
                <span class="font-sans font-bold text-xl uppercase tracking-tighter">Marcus Thorne</span>
                <p class="text-sm font-serif text-mn-graphite">Editor-in-Chief & Founder</p>
            </div>
            <div class="space-y-4">
                <span class="block text-[10px] uppercase tracking-[0.4em] text-mn-slate font-bold">Location</span>
                <span class="font-sans font-bold text-xl uppercase tracking-tighter">Remote — London</span>
                <p class="text-sm font-serif text-mn-graphite">Synchronized Worldwide</p>
            </div>
            <div class="space-y-4">
                <span class="block text-[10px] uppercase tracking-[0.4em] text-mn-slate font-bold">Established</span>
                <span class="font-sans font-bold text-xl uppercase tracking-tighter">MMXXVI</span>
                <p class="text-sm font-serif text-mn-graphite">The Year of Clarity</p>
            </div>
        </div>
    </div>
</section>

<!-- Vision Section -->
<section class="bg-mn-pearl/30 py-[15px] md:py-[35px] px-6 border-y border-mn-pearl">
    <div class="max-w-4xl mx-auto text-center space-y-12">
        <h2 class="text-4xl md:text-5xl font-display">A commitment to quality.</h2>
        <p class="text-xl font-serif text-mn-graphite leading-relaxed">Unlike the ephemeral nature of social feeds, our Archive is designed for permanence. Every article is a piece of a larger puzzle, a brick in the wall of better understanding.</p>
        <div class="pt-10">
            <x-logo class="w-20 h-20 mx-auto opacity-10" />
        </div>
    </div>
</section>
@endsection
