<x-layout>
    <section  class="mt-8">
        <x-heading>Top Jobs</x-heading>
        <div class="flex space-x-7 px-5">
            <x-square-card>
                <x-slot name="company">Meralco</x-slot>
                <x-slot name="job_title">Full stack Laravel Delveloper</x-slot>
                <x-slot name="job_type">Full time</x-slot>
                <x-slot name="salary">Php 60,000</x-slot>
            </x-square-card>
            <x-square-card>
                <x-slot name="company">Accenture</x-slot>
                <x-slot name="job_title">UI/UX Developer</x-slot>
                <x-slot name="job_type">Part time</x-slot>
                <x-slot name="salary">Php 30,000</x-slot>
            </x-square-card>
            <x-square-card>
                <x-slot name="company">Norzagaray College</x-slot>
                <x-slot name="job_title">IT Instructor</x-slot>
                <x-slot name="job_type">Full time</x-slot>
                <x-slot name="salary">Php 40,000</x-slot>
            </x-square-card>
        </div>
    </section>
    <section>
        <x-heading>Tags</x-heading>
        <div class="px-5">
            <div class="h-5 w-full bg-white/10 rounded"></div>
        </div>
    </section>
    <section>
        
    </section>
</x-layout>