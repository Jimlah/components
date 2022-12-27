<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data :data-dark-mode-on="$store.darkMode.on">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="antialiased bg-gray-200 dark:bg-gray-900" x-data>
<div class="mx-10 my-10">

    <div class="mb-10">
        <button :data-active="$store.darkMode.on" @click="$store.darkMode.toggle()" class="group">
            <svg class="w-6 h-6 hidden text-white group-data-[active=true]:inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
            <svg class="w-6 h-6 text-gray-900 group-data-[active=true]:hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path></svg>
        </button>
    </div>

    <x-code-preview>
        <details class="relative max-w-fit" x-on:click.outside="$el.removeAttribute('open')">
            <summary class="cursor-pointer">Epcot Center</summary>
            <ul class="absolute w-full top-0 mt-8 left-0 bg-white px-3 dark:bg-gray-900 py-2 rounded-md shadow-lg  space-y-2">
                <li>
                    <label class="cursor-pointer">
                        <input type="checkbox" class="hidden peer" name="name">
                        <span class="peer-checked:bg-blue-200">Abdullahi</span>
                    </label>
                </li>
                <li>
                    <label class="cursor-pointer">
                        <input type="checkbox" class="hidden peer" name="name">
                        <span class="peer-checked:bg-blue-200">Jimoh</span>
                    </label>
                </li>
            </ul>
        </details>
    </x-code-preview>

</div>

</body>
</html>
