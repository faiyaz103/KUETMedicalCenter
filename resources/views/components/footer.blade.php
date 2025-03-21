<!-- resources/views/components/footer.blade.php -->
<footer class="shadow bg-teal-800">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('images/logos/kuetlogo.png') }}" class="h-12" alt="KUET" />
                <p class="self-center text-2xl font-semibold whitespace-nowrap text-white">Central Medical Center</p>
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium sm:mb-0 text-white">
                <li>
                    <a href="/" class="hover:underline me-4 md:me-6">Home</a>
                </li>
                <li>
                    <a href="/facilities" class="hover:underline me-4 md:me-6">Facilities</a>
                </li>
                <li>
                    <a href="/doctors-schedule" class="hover:underline me-4 md:me-6">Visit Doctor</a>
                </li>
                <li>
                    <a href="/services" class="hover:underline me-4 md:me-6">Services</a>
                </li>
                <li>
                    <a href="/notices" class="hover:underline">Notice Board</a>
                </li>
            </ul>
        </div>
        <hr class="my-6 sm:mx-auto border-gray-700 lg:my-8" />
        <span class="block text-sm sm:text-center text-white">© 2024 <a href="https://github.com/faiyaz103/KUETMedicalCenter" target="_blank" class="hover:underline">
            System Development Project (CSE 3200) | MIT LICENSE.
        </a></span>
    </div>
</footer>
