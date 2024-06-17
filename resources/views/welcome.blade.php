<x-layout>
    <section class="mt-10 flex flex-col items-center">
        <h1 class="text-2xl font-bold ">Let's Find You a Great Job!</h1>
        <input type="text" placeholder="I'm looking for..." class="text-md font-light w-2/5 border border-white/20 bg-white/10 rounded-xl px-3 py-1 outline-none mt-4 focus:border-blue-500 focus:bg-blue-500/15">
    </section>
    <section>
        <x-heading>Featured Jobs</x-heading>
        <div class="gap-7 px-5 grid grid-cols-3">

            @foreach ($featuredJobs as $job)
                <x-square-card href="/" :job="$job"></x-square-card>
            @endforeach
        
        </div>
    </section>
    <section>
        <x-heading>Tags</x-heading>
        <div class="px-5 flex flex-wrap gap-1 text-sm">

            @foreach ($tags as $tag)
                <x-tag>{{ $tag->name }}</x-tag>
            @endforeach

        </div>
    </section>
    <section>
        <x-heading>Find Jobs</x-heading>
        <div class="px-5 space-y-4">

            @foreach ($unfeaturedJobs as $job)
                <x-long-card href="/" :job="$job"></x-long-card>
            @endforeach

        </div>
    </section>
</x-layout>