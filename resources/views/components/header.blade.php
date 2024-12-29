<!-- resources/views/components/header.blade.php -->
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
