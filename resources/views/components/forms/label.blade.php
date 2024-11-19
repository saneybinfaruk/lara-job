@props(['label','name'])


<div class="flex items-center gap-1 mb-0.5">
    <x-cube-small cube_size="small" />
    <label for="{{ $name }}">{{ $label }}</label>
</div>
