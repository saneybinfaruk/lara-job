@props(['tag','size' => 'base'])

@php
    $classes = 'bg-black/25 hover:bg-black/10 rounded-lg';

    if($size === 'base'){
        $classes .= ' px-5 py-1 text-sm';
    }

    if($size === 'small'){
        $classes .= ' px-3 py-1 text-2xs';
    }

@endphp


<a href="/tag/{{$tag->name}}" class="{{ $classes  }}">{{ $tag->name }}</a>
