@props(['label','name'])

@php
    $default = [
        'type' => 'checkbox',
        'id'=>$name,
        'name'=>$name,
        'class'=> '',
        'value'=> old($name)
];
@endphp

<x-forms.field :$label :$name>
    <div class="flex flex-row gap-3 bg-black/5 text-sm p-3 rounded-lg border border-gray-300">
        <input {{ $attributes($default) }}>
        <span class="">{{ $label }}</span>
    </div>
</x-forms.field>

