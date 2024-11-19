@props(['active' => false])


<a {{ $attributes }} class="{{$active ? 'bg-blue-500 text-white' : 'bg-transparent text-black'}} hover:bg-blue-500 hover:text-white px-3 py-1 rounded-2xl transition-colors duration-300" >{{ $slot }}</a>
