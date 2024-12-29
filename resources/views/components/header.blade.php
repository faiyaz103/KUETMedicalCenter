<!-- resources/views/components/header.blade.php -->
<header class="bg-gray-100 relative">
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

    <!-- Authentication Section (Login/Logout) - Positioned at the top-right corner -->
    <div class="absolute top-0 right-0 mt-4 mr-6 flex gap-6">
        @guest
            <a href="/login" class="text-sm text-teal-800 hover:text-black hover:underline">Log In</a>
            <a href="/register" class="text-sm text-teal-800 hover:text-black hover:underline">Register</a>
        @endguest
        @auth
            <form method="POST" action="/logout">
                @csrf
                <button type="submit" class="text-sm text-teal-800 hover:text-black hover:underline">Log Out</button>
            </form>
        @endauth
    </div>
</header>
