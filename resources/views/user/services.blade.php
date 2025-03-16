<!-- resources/views/home.blade.php -->
<x-mainlayout :title="'Services - KUET Medical Center'" :heading="'Our Services'">
    <!-- Your main content goes here -->
    
<section>
    <!-- Container -->
    <div class="mx-auto w-full max-w-7xl px-5 py-12 md:px-10 md:py-12">
      <!-- Features Content -->
      <div class="grid gap-5 sm:grid-cols-2 md:grid-cols-3 md:gap-4">
        <!-- Services -->
        @foreach ($services as $service)
        <div class="grid gap-6 bg-green-200 rounded-md border-2 border-solid border-teal-800 p-8 md:p-10">
          <img src="{{$service->file_path ? asset('storage/' . $service->file_path) : 'https://via.placeholder.com/150' }}" alt="Service Image" class="inline-block mx-auto h-30 w-60 object-cover rounded-md" />
          <h3 class="text-xl mx-auto text-teal-800 font-semibold">{{$service->name}}</h3>
          <p class="text-sm mx-auto text-gray-800">
            {{$service->description}}
          </p>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  
</x-mainlayout>
