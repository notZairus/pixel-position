<x-layout>
    <section class="mt-10 flex flex-col items-center">
        <h1 class="text-3xl font-extrabold">Your Job Listings</h1>
    </section>
    <section class="mt-10 flex flex-col items-center w-full space-y-5">
        @foreach ($user->employer->jobs as $job)
            <x-long-card link="/edit/{{$job->id}}" :job="$job"></x-long-card>
        @endforeach
    </section>
</x-layout>