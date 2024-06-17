<x-layout>
    <section class="mt-10 flex flex-col items-center">
        <h1 class="text-2xl font-bold ">Let's Find You a Great Job!</h1>
        <input type="text" placeholder="I'm looking for..." class="text-md font-light w-2/5 border border-white/20 bg-white/10 rounded-xl px-3 py-1 outline-none mt-4">
    </section>
    <section>
        <x-heading>Top Jobs</x-heading>
        <div class="gap-7 px-5 grid grid-cols-3">

            @foreach ($featuredJobs as $job)
                <x-square-card>
                    <x-slot name="company">{{ $job->employer->name }}</x-slot>
                    <x-slot name="job_title">{{ $job->title }}</x-slot>
                    <x-slot name="job_type">{{ $job->schedule }}</x-slot>
                    <x-slot name="salary">{{ $job->salary }}</x-slot>
                </x-square-card>
            @endforeach
        
        </div>
    </section>
    <section>
        <x-heading>Tags</x-heading>
        <div class="px-5 flex flex-wrap gap-1 text-sm">
            <x-tag>Frontend</x-tag>
            <x-tag>Frontend</x-tag>
            <x-tag>Frontend</x-tag>
            <x-tag>Frontend</x-tag>
            <x-tag>Frontend</x-tag>
            <x-tag>Frontend</x-tag>
            <x-tag>Frontend</x-tag>
            <x-tag>Backend</x-tag>
            <x-tag>Backend</x-tag>
            <x-tag>Backend</x-tag>
            <x-tag>Backend</x-tag>
            <x-tag>Backend</x-tag>
            <x-tag>Backend</x-tag>
            <x-tag>Backend</x-tag>
            <x-tag>API</x-tag>
            <x-tag>API</x-tag>
            <x-tag>API</x-tag>
            <x-tag>API</x-tag>
            <x-tag>API</x-tag>
            <x-tag>API</x-tag>
            <x-tag>API</x-tag>
            <x-tag>API</x-tag>
            <x-tag>Managing</x-tag>
            <x-tag>Managing</x-tag>
            <x-tag>Managing</x-tag>
            <x-tag>Managing</x-tag>
            <x-tag>Managing</x-tag>
            <x-tag>Managing</x-tag>
        </div>
    </section>
    <section>
        <x-heading>Find Jobs</x-heading>
        <div class="px-5 space-y-4">

            @foreach ($unfeaturedJobs as $job)
                <x-long-card>
                    <x-slot name="employer">{{ $job->employer->name }}</x-slot>
                    <x-slot name="job_title">{{ $job->title }}</x-slot>
                    <x-slot name="schedule">{{ $job->schedule }}</x-slot>
                    <x-slot name="salary">{{ $job->salary }}</x-slot>
                </x-long-card>
            @endforeach

        </div>
    </section>
</x-layout>