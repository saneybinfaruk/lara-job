@props(['label','name'])

@php
    $defaults = [
        'id'=>$name,
        'name'=>$name,
        'class'=> 'w-full bg-black/5 text-sm p-3 rounded-lg border border-gray-300',
    ];
@endphp

<x-forms.field :$label :$name>
    <select {{ $attributes($defaults) }}>
        {{ $slot }}
    </select>
</x-forms.field>

