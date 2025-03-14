<header class="bg-gray-100 relative">
    <div class="absolute top-0 right-0 mt-2 mb-2 mr-4 sm:mr-6 flex gap-4 md:gap-6 z-10">
        
        @guest
        <a href="{{ route('login') }}" class="text-red-600 underline px-4 py-2">Login</a>
        <a href="{{ route('register') }}" class="text-teal-800 underline px-4 py-2 rounded">Register</a>
        @endguest
        
            
            
    </div>

    <div class="mx-auto max-w-screen-xl px-4 py-4 sm:px-6 sm:py-6 lg:px-8">
        <div class="flex flex-col items-start gap-4 md:flex-row md:items-center md:justify-between">
            <div class="flex items-center gap-4 mt-16 sm:mt-0">
                <a href="/">
                    <img 
                    src="{{ asset('images/logos/kuetlogo.png') }}" 
                    alt="KUET Logo" 
                    class="h-12 w-12 object-contain" 
                />
                </a>
                <div>
                    <x-header-contact/>
                    <h1 class="text-2xl font-bold text-teal-800 sm:text-3xl">
                        KHULNA UNIVERSITY OF ENGINEERING & TECHNOLOGY
                    </h1>
                    <p class="mt-1.5 text-lg font-semibold text-teal-700">
                        Central Medical Center
                    </p>
                </div>
            </div>
        </div>
    </div>
</header>