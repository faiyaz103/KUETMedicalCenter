<div class="flex flex-col sm:flex-row sm:items-center">
    <div class="flex items-center mb-1 sm:mb-0">
        <img src="{{ asset('images/logos/phone.png') }}" alt="Phone Logo" class="h-3 w-3 mr-1" />
        <p class="inline text-sm text-red-700 mr-3"> {{$contact->mobile}}, {{$contact->telephone}}</p>
    </div>
    <div class="flex items-center mb-1 sm:mb-0 sm:ml-2">
        <img src="{{ asset('images/logos/email.png') }}" alt="Email Logo" class="h-3 w-3 mr-1" />
        <p class="inline text-sm text-red-700 mr-3">{{$contact->email}}</p>
    </div>
</div>