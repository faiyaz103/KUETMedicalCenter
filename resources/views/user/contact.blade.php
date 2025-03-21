<x-mainlayout :title="'Contact - KUET Medical Center'" :heading="'Contact Us'">

    <div class="flex justify-center items-center h-auto py-12">
        <div class="w-full max-w-4xl bg-white shadow-lg rounded-lg p-6 sm:p-8">
            @if($contact)
                <div class="space-y-6">
                    <!-- Title, Organization, Location -->
                    <div class="border-l-4 border-teal-800 pl-4 py-3">
                        <p class="text-lg sm:text-xl md:text-2xl font-semibold text-gray-800">{{ $contact->title }}</p>
                        <p class="text-base sm:text-lg md:text-xl text-gray-600">{{ $contact->organization }}</p>
                        <p class="text-base sm:text-lg md:text-xl text-gray-600">{{ $contact->location }}</p>
                    </div>

                    <!-- Telephone & Mobile -->
                    <div class="border-l-4 border-teal-800 pl-4 py-3">
                        <p class="text-base sm:text-lg md:text-xl text-gray-800">{{ $contact->telephone }}</p>
                        <p class="text-base sm:text-lg md:text-xl text-gray-800">{{ $contact->mobile }}</p>
                    </div>

                    <!-- Email -->
                    <div class="border-l-4 border-red-600 pl-4 py-3">
                        <p class="text-lg sm:text-xl md:text-2xl font-bold text-red-600">{{ $contact->email }}</p>
                    </div>
                </div>
            @else 
                <h1 class="text-lg sm:text-xl md:text-2xl font-bold text-center">Information Not Available</h1>
            @endif
        </div>
    </div>

</x-mainlayout>
