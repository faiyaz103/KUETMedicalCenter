<!-- resources/views/components/footer.blade.php -->
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
