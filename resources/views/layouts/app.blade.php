<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @if($settings['favicon'] ?? false)
        <link rel="icon" type="image/svg+xml" href="{{ Str::startsWith($settings['favicon'], 'assets/') ? asset($settings['favicon']) : Storage::url($settings['favicon']) }}">
    @else
        <link rel="icon" type="image/x-icon" href="/favicon.ico">
    @endif
    <title>@yield('title', $settings['site_name'] ?? 'MN — A Space for Inquisitive Minds')</title>
    <meta name="description" content="@yield('meta_description', $settings['meta_description'] ?? '')">
    
    <!-- Open Graph -->
    <meta property="og:title" content="@yield('title', $settings['site_name'] ?? 'MN')">
    <meta property="og:description" content="@yield('meta_description', $settings['meta_description'] ?? '')">
    <meta property="og:type" content="website">
    
    <!-- Premium Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Lora:ital,wght@0,400..700;1,400..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        [x-cloak] { display: none !important; }
        .page-enter { animation: pageEnter 0.6s cubic-bezier(0.16, 1, 0.3, 1) forwards; }
        @keyframes pageEnter {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body class="flex flex-col min-h-screen selection:bg-mn-black selection:text-mn-white">
    <x-navbar />

    <main class="flex-grow page-enter">
        @yield('content')
    </main>

    <x-footer />

    <script>
        // Smooth reading progress with debouncing
        let scrollTimeout;
        window.addEventListener('scroll', () => {
            if (scrollTimeout) window.cancelAnimationFrame(scrollTimeout);
            
            scrollTimeout = window.requestAnimationFrame(() => {
                const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
                const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
                const scrolled = (winScroll / height) * 100;
                const progressIndicator = document.getElementById('reading-progress');
                if (progressIndicator) {
                    progressIndicator.style.width = scrolled + "%";
                }
            });
        });
    </script>
</body>
</html>
