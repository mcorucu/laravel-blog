# MN Editorial — Premium Laravel Blog

A sanctuary for focused thought. A modern, "Apple-ish" editorial platform built with Laravel, Filament, and Tailwind CSS.

## 🌟 Key Features
- **Premium Aesthetics**: Monochrome, minimalist design with a focus on typography and reading comfort.
- **Micro-interactions**: Smooth transitions, sticky frosted-glass navbar, and a refined mobile experience.
- **Filament Admin**: A custom, monochrome admin panel for managing posts, categories, and site settings.
- **Smart Search**: Real-time search suggestions with premium visual feedback.
- **Newsletter System**: Integrated subscription system with AJAX submission and admin management.
- **X Feed Integration**: Live social transmissions embedded directly into the footer.
- **Optimization**: Automatic WebP conversion and SEO-friendly metadata.

## 🛠 Tech Stack
- **Framework**: [Laravel](https://laravel.com)
- **CMS**: [Filament PHP](https://filamentphp.com)
- **Frontend**: [Tailwind CSS](https://tailwindcss.com), [Alpine.js](https://alpinejs.dev)
- **Build Tool**: [Vite](https://vitejs.dev)

## 🚀 Getting Started

### Prerequisites
- PHP 8.2+
- Composer
- Node.js & NPM
- SQLite (or MySQL/PostgreSQL)

### Installation
1. Clone the repository
2. Install dependencies: `composer install && npm install`
3. Copy `.env.example` to `.env`
4. Generate app key: `php artisan key:generate`
5. Run migrations: `php artisan migrate`
6. Compile assets: `npm run build`
7. Start server: `php artisan serve`

## 📡 Deployment Note
This is a **dynamic PHP application**. 
- **GitHub Pages** does not support hosting Laravel (it is for static sites only).
- Recommended hosting: **DigitalOcean App Platform**, **Laravel Forge**, or **Ploi.io**.

---
Designed for Clarity.
