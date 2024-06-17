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
          <ul class="flex space-x-6 text-white text-xs font-semibold">
            <a href="/"><li>Jobs</li></a>
            <a href="/"><li>Create</li></a>
            <a href="/"><li>Salaries</li></a>
            <a href="/"><li>Companies</li></a>
          </ul>
        </div>

        <div>
          <a {{ $attributes }} class="flex justify-center items-center space-x-2">
            <span class="bg-blue-700 w-2 h-2">  </span>
            <p class="text-sm text-white font-bold"> Post a Job </p>
          </a>
        </div>
      </header>
      <main class="space-y-10 px-10">
        {{ $slot }}
      </main>
    </body> 
</html>
