<x-bloodbanklayout>

    <section class="container mx-auto px-2 py-2 max-w-7xl">
        <div class="flex flex-col">
            <section>
                <div class="mx-auto w-full max-w-7xl px-5 py-12 md:px-10 md:py-12">
                  <div class="grid gap-5 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 md:gap-4">
                    @php
                        $btypes = ['A+', 'A-', 'B+', 'B-', 'O+', 'O-', 'AB+', 'AB-'];
                    @endphp
                    @foreach ($btypes as $btype)
                    <a href="{{route('donor.index', ['bloodtype' => $btype])}}">
                        <div class="flex flex-col items-center justify-center bg-red-200 rounded-md border-2 border-solid border-red-700 hover:border-teal-700 hover:bg-green-200 p-8 md:p-10 h-full text-center">
                            <h3 class="text-6xl text-red-800 font-bold">{{$btype}}</h3>
                            <p class="text-lg font-bold text-gray-800 mt-2">
                                List of {{$btype}} Donors
                            </p>
                        </div>
                    </a>
                    @endforeach
                  </div>
                </div>
              </section>
        </div>
    </section>

</x-bloodbanklayout>
