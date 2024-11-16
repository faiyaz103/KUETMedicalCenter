@props(['active' => false])
<a class="{{ $active ? 'bg-teal-600 text-white' : 'text-white hover:bg-white hover:text-teal-800' }} rounded-md px-3 py-2 text-sm font-medium"
aria-current="{{$active ? 'page' : 'false'}}"
{{$attributes}}
>{{$slot}}</a>