<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="{ darkMode: localStorage.getItem('darkMode') === 'true' || false }" :class="{ 'dark' : darkMode }">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{asset('/img/meteo.png')}}" type="image/png">
        <title>{{config('app.name')}}</title>
        @vite('resources/css/app.css')
        @livewireStyles
    </head>
    <body class="bg-blue-100 text-gray-700 antialiased dark:bg-slate-800 dark:text-gray-300 max-h-screen text-justify">
        <header>
            <livewire:header />
        </header>
        <main>
            <livewire:weather-app-component />
        </main>
        @livewireScripts
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js"></script>
    </body>
</html>
