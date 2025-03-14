<div class="mx-auto w-full px-4 py-6 sm:px-6 lg:px-8">
    <div id="carousel-example" class="relative max-w-7xl mx-auto">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg sm:h-64 xl:h-80 2xl:h-96" id="carousel-inner">
            @foreach ($images as $index => $image)
            <div id="carousel-item-{{ $index + 1 }}" class="carousel-item duration-700 ease-in-out {{ $index > 0 ? 'hidden' : '' }}">
                <img src="{{ asset('images/carousel/' . $image) }}" class="absolute left-1/2 top-1/2 block w-full -translate-x-1/2 -translate-y-1/2" alt="..." />
            </div>
            @endforeach
        </div>
    
        <!-- Slider indicators -->
        <div class="absolute bottom-5 left-1/2 z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse">
            @foreach ($images as $index => $image)
            <button id="carousel-indicator-{{ $index + 1 }}" type="button" class="h-3 w-3 rounded-full" aria-current="{{ $index === 0 ? 'true' : 'false' }}" aria-label="Slide {{ $index + 1 }}"></button>
            @endforeach
        </div>
    
        <!-- Slider controls -->
        <button id="data-carousel-prev" type="button" class="group absolute left-0 top-0 flex h-full cursor-pointer items-center justify-center px-4 focus:outline-none">
            <span class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-white/30 group-hover:bg-white/50 group-focus:outline-none group-focus:ring-4 group-focus:ring-white">
                <svg class="h-4 w-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                </svg>
                <span class="hidden">Previous</span>
            </span>
        </button>
        <button id="data-carousel-next" type="button" class="group absolute right-0 top-0 flex h-full cursor-pointer items-center justify-center px-4 focus:outline-none">
            <span class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-white/30 group-hover:bg-white/50 group-focus:outline-none group-focus:ring-4 group-focus:ring-white">
                <svg class="h-4 w-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                </svg>
                <span class="hidden">Next</span>
            </span>
        </button>
    </div>             
</div>



<script>
    const prevButton = document.getElementById('data-carousel-prev');
    const nextButton = document.getElementById('data-carousel-next');
    const items = document.querySelectorAll('.carousel-item');
    let currentIndex = 0;
    const totalItems = items.length;

    function showItem(index) {
        items.forEach((item, i) => {
            item.classList.add('hidden');
            if (i === index) {
                item.classList.remove('hidden');
            }
        });
    }

    // Previous button click event
    prevButton.addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + totalItems) % totalItems;
        showItem(currentIndex);
    });

    // Next button click event
    nextButton.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % totalItems;
        showItem(currentIndex);
    });

    // Auto-scroll function
    function autoScroll() {
        currentIndex = (currentIndex + 1) % totalItems;  // Move to the next item
        showItem(currentIndex);
    }

    // Initialize the carousel
    showItem(currentIndex);

    // Auto-scroll every 3 seconds
    const autoScrollInterval = setInterval(autoScroll, 3000); // 3000ms = 3 seconds
</script>
