<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('/app.css') }}" />

    <title>{{ $title ?? 'Page Title' }}</title>
    @livewireStyles
</head>

<body class='flex flex-col md:gap-5 h-full'>
    <nav class="flex justify-between items-center bg-gray-900 px-10 text-gray-300 ">
        <span class="text-xl font-semibold">Pokedex By Yvan KOUOMO</span>
        <ul class="flex gap-5">
            <a href="/">
                <li
                    class="cursor-pointer border-b-4 border-gray-900 hover:border-gray-300 duration-300 transition-all py-3 px-2">
                    Acceuil
                </li>
            </a>
            <a href="/types">
                <li
                    class="cursor-pointer border-b-4 border-gray-900 hover:border-gray-300 duration-300 transition-all py-3 px-2">
                    Types
                </li>
            </a>
            <a href="/attacks">
                <li
                    class="cursor-pointer border-b-4 border-gray-900 hover:border-gray-300 duration-300 transition-all py-3 px-2">
                    Attaques
                </li>
            </a>
            <a href="/pokemons">
                <li
                    class="cursor-pointer border-b-4 border-gray-900 hover:border-gray-300 duration-300 transition-all py-3 px-2">
                    Pokemons
                </li>
            </a>
        </ul>
    </nav>
    {{ $slot }}
    {{-- @yield('content') --}}
    @livewireScripts
</body>

</html>
{{-- Thierry@1234ebv --}}
