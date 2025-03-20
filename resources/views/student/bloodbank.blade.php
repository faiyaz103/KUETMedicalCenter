<!-- resources/views/home.blade.php -->
<x-mainlayout :title="'Blood Bank - KUET Medical Center'" :heading="'Blood Bank'">
    <!-- Your main content goes here -->

    <div class="mx-auto max-w-7xl"> 
        <div class="mx-auto max-w-screen-xl px-4 py-4 sm:px-6 sm:py-6 lg:px-8">
          <div class="flex flex-col items-start gap-4 md:flex-row md:items-center md:justify-between">
            <div>
              <h1 class="text-2xl font-bold text-red-500 sm:text-3xl">
                @if(auth()->check() && auth()->user()->bloodType)
                    You are a registered blood donor.
                @else 
                    Become a blood donor.
                @endif
            </h1>
      
              {{-- <p class="mt-1.5 text-sm text-gray-500">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure, recusandae.
              </p> --}}
            </div>
      
            <div class="flex items-center gap-4">
                
            <a href="{{ route('donor.edit') }}">
            <button
            class="inline-block rounded-sm bg-red-700 px-5 py-3 text-sm font-medium text-white transition hover:bg-black focus:ring-3 focus:outline-hidden"
            type="button"
            >
            {{auth()->check() && auth()->user()->bloodType ? "Update Information" : "Register"}}
            </button>
            </a>
            </div>
          </div>
        </div>
    </div>

    <section class="container mx-auto px-2 py-6 max-w-7xl">
        <div class="flex flex-col">
            <label class="block bg-teal-800 text-white px-4 py-2 text-lg font-semibold rounded-md w-full">
                Available Donors
            </label>
            <div class="overflow-x-auto py-2">
                <div class="border border-gray-200 rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200 text-sm">
                        <thead class="bg-green-200">
                            <tr>
                                <th class="px-2 py-2 text-left text-gray-800">Name</th>
                                <th class="px-2 py-2 text-left text-gray-800">Blood Group</th>
                                <th class="px-2 py-2 text-left text-gray-800">Phone</th>
                                <th class="px-2 py-2 text-left text-gray-800">Email</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-teal-800">
                            @foreach ($donors as $index => $donor)
                            @if($donor->bloodType)
                            <tr>
                                <td class="px-2 py-2 text-gray-800">{{ $donor->name }}</td>
                                <td class="px-2 py-2 text-lg font-bold text-red-700">{{ $donor->bloodType->type}}</td>
                                <td class="px-2 py-2 text-lg text-black">{{ $donor->bloodType->phone}}</td>
                                <td class="px-2 py-2 text-gray-800">{{ $donor->email }}</td>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section> 

</x-mainlayout>
