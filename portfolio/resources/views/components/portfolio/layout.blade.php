<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="remove-cursor">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
        <title>{{ $title ?? config('app.name') }}</title>
 
        @vite(['resources/css/app.css', 'resources/js/app.js'])
 
        @livewireStyles
    </head>
    <body {{ $attributes->merge(['class' => 'min-h-screen']) }} >

        <div class="fixed inset-0 -z-10 pointer-events-none">
            <div id="tsparticles" class="absolute inset-0"></div>
            <div class="absolute inset-0 bg-[oklch(12%_0.02_265/0.65)]"></div>
        </div>

        <div class="w-[80%] md:w-[70%] mx-auto mt-12 md:mt-8 relative z-10">
            {{ $slot }}
        </div>

        @livewireScripts 
    </body>
</html>