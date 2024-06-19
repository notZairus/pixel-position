@props(['job'])

@php
    $path = 'storage/' . $job->employer->logo;
@endphp


<img {{$attributes}} src="{{ url($path) }}" alt="employer-logo" class="rounded-lg">