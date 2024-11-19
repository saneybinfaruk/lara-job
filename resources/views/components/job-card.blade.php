@props(['job'])

<div
    class="bg-black/10 p-4 rounded-xl flex flex-col gap-8 border-2 border-transparent hover:border-blue-600 transition-colors duration-300 group">
    <h4>{{ $job->employer->name }}</h4>
    <div class="text-center space-y-1">
        <h1 class="text-xl group-hover:text-blue-600 transition-colors duration-300">{{ $job->title }}</h1>
        <p class="text-sm">{{ $job->schedule }} - From {{$job->salary}}</p>
    </div>
    <div class="flex items-center justify-between gap-2 mt-auto">
        <div class="flex flex-wrap gap-1">

            @foreach($job->tags as $tag)
                <x-tag :$tag />
            @endforeach

{{--            <x-tag size="small" />--}}
{{--            <x-tag size="small">Backend</x-tag>--}}
{{--            <x-tag size="small">Figma</x-tag>--}}
        </div>
        <x-employer-logo :width='62'></x-employer-logo>
    </div>
</div>
