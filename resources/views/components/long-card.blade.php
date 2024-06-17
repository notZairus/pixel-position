@props(['job'])

<a {{ $attributes->merge(['class' => "flex space-x-5 bg-white/10 box-border p-3 rounded-lg border border-transparent hover:border-blue-700 group"])}}>
    <div>
        <x-employer-logo width="90"></x-employer-logo>
    </div>
    <div class="flex-1 flex flex-col justify-center">
        <p class="text-sm text-gray-400">{{ $job->employer->name }}</p>
        <p class="font-bold text-xl group-hover:text-blue-400">{{ $job->title }}</p>
        <p class="text-sm text-gray-400">{{ $job->schedule }}: {{ $job->salary }}</p>
    </div>
    <div class="flex items-start max-w-40 space-x-1 text-xs">
    
        @foreach ($job->tags as $tag)
            <x-tag>{{$tag->name}}</x-tag>
        @endforeach

    </div>
</a>