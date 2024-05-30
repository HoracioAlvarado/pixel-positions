@props([
    'job'
])
<x-panel class="flex gap-x-6">

    <div>
        <x-employer-logo />
    </div>
    
    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-300">{{ $job->employer->name }}</a>
    
        <h3 class="font-bold text-xl mt-3 group-hover:text-blue-800 transition-color duration-900">{{ $job->title }}</h3>
        <p class="text-sm text-grey-400 mt-auto">{{ $job->schedule }} - {{ $job->salary }}</p>
    </div>
    
    <div>
        @foreach ($job->tags as $tag)
            <x-tag :$tag></x-tag>
        @endforeach
    </div>
</x-panel> 