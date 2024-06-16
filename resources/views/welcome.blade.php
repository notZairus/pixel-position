<x-layout>
    <section class="px-10 mt-8">
        <x-heading>Top Jobs</x-heading>
        <div class="flex space-x-7 mt-3">
            <x-small-card>
                <div>
                    <p class="font-bold text-gray-500 text-sm">CompanyName</p>
                </div>
                <div class="flex flex-col items-center mt-3">
                    <p class="font-bold text-lg w-3/5 text-center">Full stack Laravel Developer</p>
                    <p class="text-xs mt-4">Full Time : $60,000</p>
                </div>
                <div class="items-end flex justify-between mt-3">
                    <div class="flex space-x-1 text-sm overflow-ellipsis overflow-hidden">
                        <x-tag>Tag</x-tag>
                        <x-tag>Uni</x-tag>
                        <x-tag>Hgg</x-tag>
                    </div>
                    <img src=" {{Vite::asset('resources/images/logo.svg')}} " alt="">
                </div>
            </x-small-card>
            <x-small-card>card 2</x-small-card>
            <x-small-card>card 3</x-small-card>
        </div>
    </section>
    <section>

    </section>
    <section>
        
    </section>
</x-layout>