<div class="flex space-x-5 bg-white/10 box-border p-3 rounded-lg border border-transparent hover:border-blue-700 group">
    <div>
        <x-employer-logo width="90"></x-employer-logo>
    </div>
    <div class="flex-1 flex flex-col justify-center">
        <p class="text-sm text-gray-400">{{ $employer }}</p>
        <p class="font-bold text-xl group-hover:text-blue-400">{{ $job_title }}</p>
        <p class="text-sm text-gray-400">{{ $schedule }}: {{ $salary }}</p>
    </div>
    <div class="flex items-start max-w-40 space-x-1 text-xs">
        <x-tag>Tag</x-tag>
        <x-tag>Tag</x-tag>
        <x-tag>Tag</x-tag>
    </div>
</div>