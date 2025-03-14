@props(['active' => false])
<a class="{{ $active ? 'flex items-center px-4 py-2.5 text-sm font-medium rounded-lg bg-gray-800 text-white group transition-all duration-200' : 'flex items-center px-4 py-2.5 text-sm font-medium rounded-lg text-gray-100 hover:bg-teal-600 hover:text-white group transition-all duration-200' }}"
aria-current="{{$active ? 'page' : 'false'}}"
{{$attributes}}
>{{$slot}}</a>