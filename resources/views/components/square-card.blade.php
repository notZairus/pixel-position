<a {{$attributes}} class="flex flex-col flex-1 bg-white/10 rounded-md px-3 py-2 border border-transparent hover:border-blue-700 group">
    <div>
        <p class="font-bold text-gray-500 text-sm">{{ $company }}</p>
    </div>
    <div class="flex flex-col items-center mt-3 mb-4">
        <p class="font-bold text-lg w-3/5 text-center flex-1 group-hover:text-blue-500">{{ $job_title }}</p>
        <p class="text-xs mt-2 flex">{{ $job_type }} : {{ $salary }}</p>
    </div>
    <div class="items-end flex justify-between mt-auto">
        <div class="flex space-x-1 overflow-ellipsis overflow-hidden text-xs">
            <x-tag>Tag</x-tag>
            <x-tag>Uni</x-tag>
            <x-tag>Hgg</x-tag>
        </div>
        <x-employer-logo width="50"></x-employer-logo>
    </div>      
</a>