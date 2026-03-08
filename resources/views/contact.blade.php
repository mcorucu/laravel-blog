@extends('layouts.app')

@section('content')
<section class="max-w-7xl mx-auto py-[15px] md:py-[35px] px-6 grid grid-cols-1 lg:grid-cols-12 gap-12 md:gap-24 items-start">
    <div class="lg:col-span-5 space-y-16 animate-fade-in">
        <div class="space-y-8">
            <div class="flex items-center space-x-4">
                <span class="text-[10px] uppercase tracking-[0.5em] font-bold text-mn-slate">Contact</span>
                <div class="w-12 h-[1px] bg-mn-black"></div>
            </div>
            <h1 class="text-7xl md:text-9xl font-display font-medium tracking-tightest leading-[0.9]">Inquire.</h1>
        </div>
        
        <p class="text-2xl font-serif leading-relaxed text-mn-graphite italic pr-12">We welcome deep collaboration, contribution inquiries, and constructive critique. Let us begin a conversation.</p>
        
        <div class="space-y-10 pt-16 border-t border-mn-pearl">
            <div class="flex flex-col space-y-3">
                <span class="text-[10px] uppercase tracking-[0.4em] text-mn-slate font-bold">Editorial Board</span>
                <a href="mailto:editor@mneditorial.com" class="text-2xl font-sans font-bold hover:text-mn-slate transition-colors uppercase tracking-tightest">editor@mneditorial.com</a>
            </div>
            <div class="flex flex-col space-y-3">
                <span class="text-[10px] uppercase tracking-[0.4em] text-mn-slate font-bold">General Inquiries</span>
                <a href="mailto:hello@mneditorial.com" class="text-2xl font-sans font-bold hover:text-mn-slate transition-colors uppercase tracking-tightest">hello@mneditorial.com</a>
            </div>
        </div>
    </div>

    <div class="lg:col-span-7 bg-mn-white p-10 md:p-20 border border-mn-pearl shadow-premium animate-fade-in-up delay-300">
        <form class="space-y-16">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div class="space-y-4">
                    <label class="text-[10px] uppercase tracking-[0.3em] font-bold text-mn-slate">Identity</label>
                    <input type="text" placeholder="Full Name" class="w-full bg-transparent border-b border-mn-silver/30 py-5 focus:outline-none focus:border-mn-black transition-all font-serif text-lg">
                </div>
                <div class="space-y-4">
                    <label class="text-[10px] uppercase tracking-[0.3em] font-bold text-mn-slate">Electronic Mail</label>
                    <input type="email" placeholder="example@domain.com" class="w-full bg-transparent border-b border-mn-silver/30 py-5 focus:outline-none focus:border-mn-black transition-all font-serif text-lg">
                </div>
            </div>
            
            <div class="space-y-4">
                <label class="text-[10px] uppercase tracking-[0.3em] font-bold text-mn-slate">Topic of Inquiry</label>
                <select class="w-full bg-transparent border-b border-mn-silver/30 py-5 focus:outline-none focus:border-mn-black transition-all font-serif text-lg appearance-none cursor-pointer">
                    <option>General Contribution</option>
                    <option>Editorial Feedback</option>
                    <option>Press Inquiry</option>
                    <option>Other</option>
                </select>
            </div>

            <div class="space-y-4">
                <label class="text-[10px] uppercase tracking-[0.3em] font-bold text-mn-slate">Message Content</label>
                <textarea rows="5" placeholder="Your thoughts here..." class="w-full bg-transparent border-b border-mn-silver/30 py-5 focus:outline-none focus:border-mn-black transition-all font-serif text-lg resize-none"></textarea>
            </div>
            
            <div class="pt-8">
                <button class="btn-premium w-full md:w-auto !py-6 !px-16 !text-xs">Submit Inquiry</button>
            </div>
        </form>
    </div>
</section>
@endsection
