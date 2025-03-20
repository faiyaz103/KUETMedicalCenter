<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
        <title>{{ config('app.name', 'KUET Medical Center') }}</title>

        {{-- <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> --}}

        <!-- Scripts -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-white antialiased">

        <x-header />
        <x-navbar />

        <div class="min-h-full">
        {{-- <header class="bg-white shadow">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <h1 class="text-2xl font-semibold tracking-tight text-gray-900"></h1>
            </div>
        </header> --}}

        <div class="mx-auto w-full max-w-3xl px-5 py-16 md:px-10 md:py-16">
            <div class="mx-auto max-w-xl bg-green-200 px-8 py-12 text-left">
                <div class="mx-auto w-full max-w-sm">
                    <div class="mx-auto mb-4 max-w-sm pb-4">
                        <main class="p-2">
                            {{ $slot }}
                        </main>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <x-footer />

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const menuButton = document.querySelector('button[aria-controls="mobile-menu"]');
            const mobileMenu = document.getElementById('mobile-menu');

            menuButton.addEventListener('click', () => {
                const isExpanded = menuButton.getAttribute('aria-expanded') === 'true';
                menuButton.setAttribute('aria-expanded', !isExpanded);
                mobileMenu.classList.toggle('hidden');
            });
        });

        document.addEventListener('DOMContentLoaded', () => {
            const dropdownButton = document.getElementById('dropdown-button');
            const dropdownMenu = document.getElementById('dropdown-menu');

            const mobileDropdownButton = document.querySelector('[aria-controls="mobile-dropdown"]');
            const mobileDropdownMenu = document.getElementById('mobile-dropdown');

            dropdownButton?.addEventListener('click', () => {
                dropdownMenu.classList.toggle('hidden');
            });

            mobileDropdownButton?.addEventListener('click', () => {
                mobileDropdownMenu.classList.toggle('hidden');
            });
        });

        document.addEventListener('DOMContentLoaded', () => {
            const dropdownButton = document.getElementById('service-dropdown-button');
            const dropdownMenu = document.getElementById('service-dropdown-menu');

            const mobileDropdownButton = document.querySelector('[aria-controls="service-mobile-dropdown"]');
            const mobileDropdownMenu = document.getElementById('service-mobile-dropdown');

            dropdownButton?.addEventListener('click', () => {
                dropdownMenu.classList.toggle('hidden');
            });

            mobileDropdownButton?.addEventListener('click', () => {
                mobileDropdownMenu.classList.toggle('hidden');
            });
        });

    </script>

    </body>
</html>
