@props(['active' => false])

<a class="{{ $active ? 'block rounded-md bg-teal-600 px-3 py-2 text-base font-medium text-white' : 'block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-white hover:text-teal-800' }}" 
   aria-current="{{ $active ? 'page' : 'false' }}"
   {{ $attributes }}>
   {{ $slot }}
</a>
