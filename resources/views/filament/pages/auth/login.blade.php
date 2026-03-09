<x-filament-panels::page.simple>
    <div class="flex flex-col items-center justify-center min-h-[400px]">
        {{-- Branding --}}
        <div class="mb-8 text-center animate-fade-in">
            <a href="/" class="inline-block transition-transform hover:scale-105">
                <img src="{{ asset('assets/branding/logo.svg') }}" alt="MN Editorial" class="h-10 mx-auto mb-4 filter drop-shadow-sm">
            </a>
            <h2 class="text-2xl font-serif tracking-tight text-mn-black">Administrative Entry</h2>
            <p class="mt-2 text-sm text-mn-gray font-sans uppercase tracking-widest">Sanctuary of Focused Thought</p>
        </div>

        {{-- Login Form --}}
        <form wire:submit="authenticate" class="w-full max-w-sm p-10 bg-white/[0.03] backdrop-blur-2xl rounded-[2rem] shadow-[0_32px_64px_-16px_rgba(0,0,0,0.3)] space-y-8 animate-fade-in-up">
            {{ $this->form }}
            <x-filament-panels::form.actions
                :actions="$this->getFormActions()"
                :full-width="$this->hasFullWidthFormActions()"
            />
        </form>

        {{-- Footer Links --}}
        <div class="mt-8 text-center opacity-60 hover:opacity-100 transition-opacity">
            <a href="/" class="text-xs font-sans uppercase tracking-widest text-mn-gray hover:text-mn-black transition-colors flex items-center justify-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Return to Narrative
            </a>
        </div>
    </div>

    <style>
        /* Premium Monochrome Enhancements */
        .fi-btn {
            @apply rounded-xl font-sans uppercase tracking-widest text-xs py-3 transition-all duration-300 !important;
        }
        .fi-btn-color-primary {
            @apply bg-mn-black hover:bg-mn-gray text-white shadow-xl hover:shadow-mn-black/20 !important;
        }
        .fi-input {
            @apply border-mn-gray/20 focus:border-mn-black focus:ring-mn-black/5 rounded-xl transition-all duration-300 !important;
        }
        .fi-input-wrp {
            @apply shadow-none !important;
        }
        .animate-fade-in {
            animation: fadeIn 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</x-filament-panels::page.simple>
