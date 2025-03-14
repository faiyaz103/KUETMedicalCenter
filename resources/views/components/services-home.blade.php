<x-dividerhz text="Our Services" logo="{{ asset('images/logos/docandstaff.png') }}" />

    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-2">
            <!-- First Image -->
            <div class="relative flex justify-center items-center h-full max-w-md mx-auto">
                <a href="/doctors-schedule" class="group block h-full w-full">
                    <img class="h-full w-full object-cover rounded-lg shadow-lg" src="{{asset('images/doctorsimage.jpg')}}" alt="Medical Team Meeting">
                    <div class="absolute inset-0 bg-black bg-opacity-50 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="absolute inset-0 flex items-center justify-center text-white font-semibold text-lg opacity-0 group-hover:opacity-100 transition-opacity">
                        Doctor Visit
                    </div>
                </a>
            </div>
    
            <!-- Second Image -->
            <div class="relative flex justify-center items-center h-full max-w-md mx-auto">
                <a href="/services" class="group block h-full w-full">
                    <img class="h-full w-full object-cover rounded-lg shadow-lg" src="{{asset('images/service.jpg')}}" alt="Medical Team Meeting">
                    <div class="absolute inset-0 bg-black bg-opacity-50 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="absolute inset-0 flex items-center justify-center text-white font-semibold text-lg opacity-0 group-hover:opacity-100 transition-opacity">
                        Other Services
                    </div>
                </a>
            </div>
        </div>
    </div>