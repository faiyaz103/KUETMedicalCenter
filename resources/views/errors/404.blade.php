<x-mainlayout :title="'Error'" :heading="'Sorry for the inconvenience !'">
    <div class="grid min-h-full place-items-center bg-gray-100 px-6 py-16 sm:py-16 lg:px-8">
        <div class="text-center">
          <p class="text-base font-semibold text-red-600">404</p>
          <h1 class="mt-4 text-balance text-5xl font-semibold tracking-tight text-gray-900 sm:text-7xl">Page not found</h1>
          <p class="mt-6 text-pretty text-lg font-medium text-gray-500 sm:text-xl/8">Sorry, we couldn’t find the page you’re looking for.</p>
          <div class="mt-10 flex items-center justify-center gap-x-6">
           
            <a href="{{ url()->previous() }}" class="text-sm font-semibold text-gray-900 hover:text-gray-500">
                <span aria-hidden="true">&larr; </span>Go Back
            </a>        
            <a href='/' class="rounded-md bg-teal-800 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-teal-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-teal-800">Take me home</a>
          </div>
        </div>
    </div>
    
</x-mainlayout>