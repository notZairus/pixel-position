@props(['job'])

<div {{$attributes}} class="flex flex-col flex-1 bg-white/10 rounded-md px-3 py-2 border border-transparent hover:border-blue-700 group">
    <div>
        <p class="font-bold text-gray-500 text-sm">{{ $job->employer->name }}</p>
    </div>
    <div class="flex flex-col items-center mt-3 mb-4">
        <a href="/jobs/{{$job->id}}" class="font-bold text-lg w-3/5 text-center flex-1 group-hover:text-blue-500">{{ $job->title }}</a>
        <a href="/jobs/{{$job->id}}" class="text-xs mt-2 flex">{{ $job->schedule }} : {{ $job->salary }}</a>
    </div>
    <div class="items-end flex justify-between mt-auto">
        <div class="flex space-x-1 overflow-ellipsis overflow-hidden text-xs">
            
            @foreach ($job->tags as $tag)
                <a href="/tags/{{$tag->name}}">
                    <p class="bg-white/10 px-2 py-0 rounded-full"> {{$tag->name}} </p>
                </a>
            @endforeach

        </div>
        <x-employer-logo :job="$job" width="50px"></x-employer-logo>
    </div>      
</div>