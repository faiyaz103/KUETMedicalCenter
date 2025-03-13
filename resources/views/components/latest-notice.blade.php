<div class="bg-teal-800 px-4 py-3 text-white sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8 mt-1 relative overflow-hidden w-full">
    <!-- Notice text -->
    <div class="whitespace-nowrap text-center flex-grow">
      @if($latestNotice)
        <a href="{{ route('notices.show', $latestNotice->id) }}" 
           class="font-medium underline text-red-600 hover:text-white transition duration-200">
          {{ $latestNotice->title }}
        </a>
      @else
        <span class="font-medium underline text-red-600 hover:text-white transition duration-200">
          >No notices available
        </span>
      @endif
    </div>
    
    <!-- Notice Board Button aligned right -->
    <a href="{{ url('/notices') }}"
       class="mt-4 block rounded-lg bg-white px-5 py-3 text-center text-sm font-medium text-teal-800 transition hover:bg-white/90 focus:outline-none focus:ring active:text-teal-600 sm:mt-0 sm:ml-4">
      Notice Board
    </a>
  </div>
  