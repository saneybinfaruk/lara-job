@props(['job'])

<div
    class="bg-gray-200 flex p-4 gap-x-6 rounded-md  border-2 border-transparent hover:border-blue-600 transition-colors duration-300 group">
    <div>
        <x-employer-logo></x-employer-logo>
    </div>

    <div class="flex-1 flex flex-col gap-1">
        <a href="#" class="text-xs text-gray-500">{{ $job->employer->name }}</a>
        <h2 class="text-lg  group-hover:text-blue-600 transition-colors duration-300">{{ $job->title }}</h2>
        <p class="mt-auto text-sm  text-gray-600">{{ $job->schedule }} - From {{$job->salary}}</p>

    </div>


    <div class="flex flex-col justify-between ">
        <div class="flex gap-x-6">
            <p class="border border-black/10 px-3 rounded-xl">Remote</p>
            <p class="border border-black/10 px-3 rounded-xl">23h</p>
        </div>
        <div>
            {{--            <x-tag>tag</x-tag>--}}
        </div>

    </div>
</div>
