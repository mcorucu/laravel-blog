import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/View/Component*.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            colors: {
                'mn-black': '#1C1C1E',      // Apple-style softened black
                'mn-white': '#FFFFFF',
                'mn-paper': '#FBFBFB',      // Kindle-style paper off-white
                'mn-pearl': '#F2F2F7',      // Apple-style soft gray
                'mn-charcoal': '#2C2C2E',
                'mn-graphite': '#48484A',
                'mn-silver': '#D1D1D6',
                'mn-slate': '#8E8E93',
            },
            fontFamily: {
                // Editorial headline serif
                'display': ['"Playfair Display"', '"Georgia"', '"Times New Roman"', ...defaultTheme.fontFamily.serif],
                // Reading body serif
                'serif': ['"Lora"', '"Georgia"', '"Times New Roman"', ...defaultTheme.fontFamily.serif],
                // Functional UI sans
                'sans': ['"Inter"', '"SF Pro Display"', '"San Francisco"', '"Helvetica Neue"', ...defaultTheme.fontFamily.sans],
            },
            letterSpacing: {
                'tightest': '-.05em',
                'wide-editorial': '.05em',
            },
            lineHeight: {
                'reading-comfort': '1.85',
            },
            maxWidth: {
                'reading': '650px',
            },
            boxShadow: {
                'premium': '0 4px 20px -5px rgba(0, 0, 0, 0.05)',
                'premium-hover': '0 10px 40px -10px rgba(0, 0, 0, 0.08)',
            },
            spacing: {
                '18': '4.5rem',
                '22': '5.5rem',
            },
            animation: {
                'fade-in-up': 'fadeInUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards',
                'fade-in': 'fadeIn 1s ease-out forwards',
            },
            keyframes: {
                fadeInUp: {
                    '0%': { transform: 'translateY(15px)', opacity: '0' },
                    '100%': { transform: 'translateY(0)', opacity: '1' },
                },
                fadeIn: {
                    '0%': { opacity: '0' },
                    '100%': { opacity: '1' },
                },
            },
        },
    },
    plugins: [],
};
