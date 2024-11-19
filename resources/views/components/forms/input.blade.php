@props(['label','name'])

@php
    $default = [
        'type' => 'text',
        'id'=>$name,
        'name'=>$name,
        'class'=> 'w-full bg-black/5 text-sm p-3 rounded-lg border border-gray-300',
        'value'=> old($name)
];
 @endphp

<x-forms.field :$label :$name>
    <input  {{ $attributes($default) }}>
</x-forms.field>

