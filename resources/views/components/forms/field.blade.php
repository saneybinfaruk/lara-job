@props(['label','name'])


<div class="w-full">

    @if($label)
        <x-forms.label :label="$label" :name="$name" />
    @endif

    {{ $slot }}

    <x-forms.error :error="$errors->first($name)"/>
</div>
