<x-layout>
    <section class="mt-10 flex flex-col items-center">
        <h1 class="text-3xl font-bold ">Let's Find You a Great Job!</h1>
        <input type="text" placeholder="I'm looking for..." class="text-md font-light w-2/5 border border-white/20 bg-white/10 rounded-xl px-3 py-1 outline-none mt-4 focus:border-blue-500 focus:bg-blue-500/15">
    </section>
    <section>
        <x-heading>Featured Jobs</x-heading>
        <div class="gap-7 px-5 grid grid-cols-3">

            @if (! $featuredJobs->isEmpty())
                @foreach ($featuredJobs as $job)
                    <x-square-card href="/" :job="$job"></x-square-card>
                @endforeach
            @else
                <p class="text-white text-center text-2xl col-span-3 font-semibold my-10">Empty</p>
            @endif
        
        </div>
    </section>
    <section>
        <x-heading>Tags</x-heading>
        <div class="px-5 flex flex-wrap gap-1 text-sm">

            @if (! $tags->isEmpty())
                @foreach ($tags as $tag)
                    <a href="/tags/{{$tag->name}}">
                        <p class="bg-white/10 px-2 py-0 rounded-full text-center"> {{$tag->name}} </p>
                    </a>
                @endforeach
            @else
                <p class="text-white text-center text-2xl col-span-3 font-semibold my-10 flex-1">Empty</p>
            @endif

        </div>
    </section>
    <section>
        <x-heading>Find Jobs</x-heading>
        <div class="px-5 space-y-4">

        @if (! $unfeaturedJobs->isEmpty())
            @foreach ($unfeaturedJobs as $job)
                <x-long-card href="/" :job="$job"></x-long-card>
            @endforeach
        @else
            <p class="text-white text-center text-2xl col-span-3 font-semibold my-10 flex-1">Empty</p>
        @endif
        </div>
    </section>
</x-layout>