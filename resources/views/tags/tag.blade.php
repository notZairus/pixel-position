<x-layout>
    <section class="mt-10 flex flex-col items-center">
        <h1 class="text-10xl font-extrabold">Result</h1>
    </section>
    <section class="mt-10 flex flex-col items-center w-full space-y-5">
        @foreach ($tag->jobs as $job)
            <x-long-card href="/" :job="$job"></x-long-card>
        @endforeach
    </section>
</x-layout>