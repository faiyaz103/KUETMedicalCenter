<!-- resources/views/components/mainlayout.blade.php -->
<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <title>{{ $title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full bg-white">
    <!-- Include Header -->
    <x-header />

    <!-- Include Navbar -->
    <x-navbar />

    <!-- Main Content -->
    <div class="min-h-full">
        <header class="bg-white shadow">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <h1 class="text-2xl font-semibold tracking-tight text-gray-900">{{ $heading }}</h1>
            </div>
        </header>
        <main>
            {{ $slot }}
        </main>
    </div>

    <!-- Include Footer -->
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
