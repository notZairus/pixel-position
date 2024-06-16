<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pixel Positions</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css'])

    </head>
    <body class="font-sans antialiase text-white bg-black px-5">
      <header class="bg-black py-3 flex justify-between items-center border-b-2 border-white/35">
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
      <main class="space-y-8 px-10">
        {{ $slot }}
      </main>
    </body> 
</html>
