<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="{ darkMode: true }" :class="{ 'dark' : darkMode }">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite('resources/css/app.css')
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js"></script>
        @livewireStyles
    </head>
    <body class="bg-blue-100 text-gray-700 antialiased dark:bg-slate-800 dark:text-gray-300">
        <header>
            <livewire:header />
        </header>
        <main>
        </main>
        @livewireScripts
    </body>
</html>
