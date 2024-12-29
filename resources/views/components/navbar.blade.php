<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full">
    <header class="bg-gray-100">
        <div class="mx-auto max-w-screen-xl px-4 py-4 sm:px-6 sm:py-6 lg:px-8">
          <div class="flex flex-col items-start gap-4 md:flex-row md:items-center md:justify-between">
            <!-- Logo and Title Section -->
            <div class="flex items-center gap-4">
              <img 
                src="{{ asset('images/logos/kuetlogo.png') }}" 
                alt="KUET Logo" 
                class="h-12 w-12 object-contain" 
              />
              <div>
                <h1 class="text-2xl font-bold text-teal-800 sm:text-3xl">
                  KHULNA UNIVERSITY OF ENGINEERING & TECHNOLOGY
                </h1>
                <p class="mt-1.5 text-md text-teal-700">
                  Central Medical Center
                </p>
              </div>
            </div>
          </div>
        </div>
      </header>
      
      
<div class="min-h-full">
    <nav class="bg-teal-800 sticky top-0 z-50">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    {{-- <div class="shrink-0">
                        <img class="size-12" src="{{ asset('logos/kuetlogo.png') }}" alt="KUET">
                    </div> --}}
                    <div class="hidden md:block">
                        <div class="flex items-baseline space-x-4">
                            <x-navlink href="/" :active="request()->is('/')">Home</x-navlink>
                            <x-navlink href="/services" :active="request()->is('services')">Services</x-navlink>
                            <x-navlink href="/doctors" :active="request()->is('doctors')">Doctors</x-navlink>
                            <x-navlink href="/bloodbank" :active="request()->is('bloodbank')">Blood Bank</x-navlink>
                            <x-navlink href="/medcertificate" :active="request()->is('medcertificate')">Medical Certificate</x-navlink>
                            <x-navlink href="/notices" :active="request()->is('notices')">Notice</x-navlink>
                        </div>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-4 flex items-center md:ml-6">
                        @guest
                            <x-navlink href="/login" :active="request()->is('login')">Log In</x-navlink>
                            <x-navlink href="/register" :active="request()->is('register')">Register</x-navlink>
                        @endguest
                        @auth
                            <form method="POST" action="/logout">
                                @csrf
                                <x-form-button>Log Out</x-form-button>
                            </form>
                        @endauth
                    </div>
                </div>
                <div class="-mr-2 flex md:hidden">
                    <!-- Mobile menu button -->
                    <button type="button" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <svg class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu, hidden by default -->
        <div class="md:hidden hidden" id="mobile-menu">
            <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
                <x-mobile-navlink href="/" :active="request()->is('/')">Home</x-mobile-navlink>
                <x-mobile-navlink href="/services" :active="request()->is('services')">Services</x-mobile-navlink>
                <x-mobile-navlink href="/doctors" :active="request()->is('doctors')">Doctors</x-mobile-navlink>
                <x-mobile-navlink href="/bloodbank" :active="request()->is('bloodbank')">Blood Bank</x-mobile-navlink>
                <x-mobile-navlink href="/medcertificate" :active="request()->is('medcertificate')">Medical Certificate</x-mobile-navlink>
                <x-mobile-navlink href="/notices" :active="request()->is('notices')">Notice</x-mobile-navlink>
            </div>
            <div class="border-t border-gray-700 pb-3 pt-4">
                <div class="flex items-center px-5">
                    @guest
                        <x-navlink href="/login" :active="request()->is('login')">Log In</x-navlink>
                        <x-navlink href="/register" :active="request()->is('register')">Register</x-navlink>
                    @endguest
                    @auth
                        <form method="POST" action="/logout">
                            @csrf
                            <x-form-button>Log Out</x-form-button>
                        </form>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{$heading}}</h1>
        </div>
    </header>
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            {{$slot}}
        </div>
    </main>
</div>

<footer class="bg-white rounded-lg shadow dark:bg-teal-800 m-4">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="#" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('images/logos/kuetlogo.png') }}" class="h-12" alt="KUET" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Central Medical Center</span>
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-white">
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">About</a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
                </li>
                <li>
                    <a href="#" class="hover:underline">Contact</a>
                </li>
            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <span class="block text-sm text-gray-500 sm:text-center dark:text-white">© 2024 <a href="https://github.com/faiyaz103/KUETMedicalCenter" target="_blank" class="hover:underline">System Development Project (CSE 3200)</a></span>
    </div>
</footer>

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
</script>
</body>
</html>
