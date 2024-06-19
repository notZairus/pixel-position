@props(['job'])

<div {{ $attributes->merge(['class' => "flex space-x-5 bg-white/10 box-border p-3 rounded-lg border border-transparent hover:border-blue-700 w-full group"])}}>
    <div>
    <x-employer-logo :job="$job" width="90px"></x-employer-logo>
    </div>
    <div class="flex-1 flex flex-col justify-center">
        <p class="text-sm text-gray-400">{{ $job->employer->name }}</p>
        <a href="/jobs/{{$job->id}}" class="font-bold text-xl group-hover:text-blue-400">{{ $job->title }}</a>
        <a href="/jobs/{{$job->id}}" class="text-sm text-gray-400">{{ $job->schedule }}: {{ $job->salary }}</a>
    </div>
    <div class="flex items-start space-x-1 text-xs">
    
        @foreach ($job->tags as $tag)
            <a href="/tags/{{$tag->name}}">
                <p class="bg-white/10 px-2 py-0 rounded-full"> {{$tag->name}} </p>
            </a>
        @endforeach

    </div>
</div>