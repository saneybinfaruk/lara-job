@props(['cube_size'=>'base'])

@php
    $classes = 'bg-blue-500 inline-block';
    if($cube_size === 'base'){
        $classes .= ' w-2.5 h-2.5';
    }

    if($cube_size === 'small') {
        $classes .= ' w-2 h-2';
    }
 @endphp

<span class="{{ $classes }}"></span>
