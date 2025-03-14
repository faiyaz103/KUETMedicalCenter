<nav class="bg-teal-800 sticky top-0 z-10">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <div class="hidden md:block">
                    <div class="flex items-baseline space-x-4">
                        <x-navlink href="/" :active="request()->is('/') || request()->is('home')">Home</x-navlink>
                        <div class="relative inline-block text-left">
                            <button type="button" class="inline-flex items-center justify-center gap-x-1.5 rounded-md bg-teal-800 px-3 py-2 text-sm font-medium text-white  hover:text-opacity-70"
                                id="dropdown-button" aria-expanded="false" aria-haspopup="true">
                                Healthcare Professionals
                                <svg class="size-5 text-white" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <div class="absolute hidden mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black/5 focus:outline-none" id="dropdown-menu">
                                <a href="/doctors" class="block px-4 py-2 text-sm text-teal-800 hover:bg-gray-200">Doctors</a>
                                <a href="/staff" class="block px-4 py-2 text-sm text-teal-800 hover:bg-gray-200">Staff</a>
                            </div>
                        </div>
                        <x-navlink href="/facilities" :active="request()->is('facilities')">Facilities</x-navlink>
                        <div class="relative inline-block text-left">
                            <button type="button" class="inline-flex items-center justify-center gap-x-1.5 rounded-md bg-teal-800 px-3 py-2 text-sm font-medium text-white  hover:text-opacity-70"
                                id="service-dropdown-button" aria-expanded="false" aria-haspopup="true">
                                Services
                                <svg class="size-5 text-white" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <div class="absolute hidden mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black/5 focus:outline-none" id="service-dropdown-menu">
                                <a href="/doctors-schedule" class="block px-4 py-2 text-sm text-teal-800 hover:bg-gray-200">Doctor Visit</a>
                                <a href="/services" class="block px-4 py-2 text-sm text-teal-800 hover:bg-gray-200">Other Services</a>
                            </div>
                        </div>
                        <x-navlink href="/bloodbank" :active="request()->is('bloodbank')">Blood Bank</x-navlink>
                        <x-navlink href="/notices" :active="request()->is('notices')">Notice Board</x-navlink>
                        <x-navlink href="/contact" :active="request()->is('contact')">Contact Us</x-navlink>
                    </div>
                </div>
                
            </div>

            @auth
            <x-profile-menu/>
            @endauth
            
            <div class="-mr-2 flex md:hidden">
                <button type="button" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                    aria-controls="mobile-menu" aria-expanded="false">
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
            <div>
                <button type="button" 
                    class="flex w-full items-center justify-between rounded-md bg-teal-800 px-3 py-2 text-base font-medium text-white hover:text-opacity-70" 
                    aria-expanded="false" 
                    aria-controls="mobile-dropdown">
                    <span>Healthcare Professionals</span>
                    <!-- Dropdown Icon -->
                    <svg class="size-5 text-white" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                    </svg>
                </button>
                <div class="hidden space-y-1 pl-4" id="mobile-dropdown">
                    <a href="/doctors" class="block rounded-md px-3 py-2 text-base bg-gray-300 font-medium text-teal-800 hover:bg-gray-100" :active="request()->is('doctors')">Doctors</a>
                    <a href="/staff" class="block rounded-md px-3 py-2 text-base bg-gray-300 font-medium text-teal-800 hover:bg-gray-100" :active="request()->is('staff')">Staff</a>
                </div>
            </div>            
            <x-mobile-navlink href="/facilities" :active="request()->is('facilities')">Facilities</x-mobile-navlink>
            {{-- <x-mobile-navlink href="/services" :active="request()->is('services')">Services</x-mobile-navlink> --}}
            <div>
                <button type="button" 
                    class="flex w-full items-center justify-between rounded-md bg-teal-800 px-3 py-2 text-base font-medium text-white hover:text-opacity-70" 
                    aria-expanded="false" 
                    aria-controls="service-mobile-dropdown">
                    <span>Services</span>
                    <!-- Dropdown Icon -->
                    <svg class="size-5 text-white" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                    </svg>
                </button>
                <div class="hidden space-y-1 pl-4" id="service-mobile-dropdown">
                    <a href="/doctors-schedule" class="block rounded-md px-3 py-2 text-base bg-gray-300 font-medium text-teal-800 hover:bg-gray-100" :active="request()->is('doctors')">Doctor Visit</a>
                    <a href="/services" class="block rounded-md px-3 py-2 text-base bg-gray-300 font-medium text-teal-800 hover:bg-gray-100" :active="request()->is('staff')">Other Services</a>
                </div>
            </div>   
            <x-mobile-navlink href="/bloodbank" :active="request()->is('bloodbank')">Blood Bank</x-mobile-navlink>
            <x-mobile-navlink href="/notices" :active="request()->is('notices')">Notice Board</x-mobile-navlink>
            <x-mobile-navlink href="/contact" :active="request()->is('contact')">Contact Us</x-mobile-navlink>
        </div>
    </div>
</nav>
