@props(['error'=> false])

@if($error)
    <p class="pt-1 pl-1 text-red-500 text-sm font-bold">{{ $error }}</p>
@endif
