<a {{ $attributes->merge(['class' => "flex justify-center items-center space-x-2 border px-2 py-1 rounded-md"]) }}>
    <p class="text-sm text-white font-bold"> {{ $slot }} </p>
</a>