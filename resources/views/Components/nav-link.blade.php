@props(['active' => 'false'])
<a
  class="{{$active ? 'bg-primary-color text-white' : 'bg-gray-100 text-slate-700'}}
   px-6 py-2 rounded pointer transition-all hover:bg-primary-color/90 hover:text-white"
  aria-current="{{$active ? 'page' : 'false'}}"
  {{$attributes}} >
  {{$slot}}
</a>
