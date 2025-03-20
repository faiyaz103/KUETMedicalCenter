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

    {{$slot}}
</x-mainlayout>