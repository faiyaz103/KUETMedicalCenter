<!-- resources/views/components/navbar.blade.php -->
<nav class="bg-teal-800 sticky top-0 z-50">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
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
            
            <div class="-mr-2 flex md:hidden">
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
    </div>
</nav>
