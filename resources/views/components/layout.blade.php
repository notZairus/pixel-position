<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pixel Positions</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net"><link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        @vite(['resources/css/app.css'])

    </head>
    <body class="antialiase text-white bg-black px-5 pb-10 font-Hanken-grotesk">
      <header class="bg-black py-3 flex justify-between items-center">
        <div>
          <a href="/">
            <img src="{{ Vite::asset('resources/images/logo.svg')}}" alt="logo">
          </a>
          
        </div>

        <div>
          <ul class="flex space-x-6 text-white text-xs items-center">
            <a href="/" class="{{request()->is('/') ? "text-blue-500 font-extrabold text-sm" : "font-normal"}} hover:text-blue-300"><li>Jobs</li></a>
            <a href="/" class="{{request()->is('/create') ? "text-blue-500 font-extrabold text-sm" : "font-normal"}} hover:text-blue-300"><li>Create</li></a>
            <a href="/" class="{{request()->is('/salaries') ? "text-blue-500 font-extrabold text-sm" : "font-normal"}} hover:text-blue-300"><li>Salaries</li></a>
            <a href="/" class="{{request()->is('/companies') ? "text-blue-500 font-extrabold text-sm" : "font-normal"}} hover:text-blue-300"><li>Companies</li></a>
          </ul>
        </div>

        <div class="flex space-x-2">

          @guest
            <x-anchor-btn href="/">Login</x-anchor-btn>
            <x-anchor-btn href="/">Register</x-anchor-btn>
          @endguest

          @auth
            <x-anchor-btn href="/">Logout</x-anchor-btn>
          @endauth

        </div>
      </header>
      <main class="space-y-10 px-10">
        {{ $slot }}
      </main>
    </body> 
</html>
