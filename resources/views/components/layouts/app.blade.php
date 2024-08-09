<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" type="text/css" href="{{ asset('/app.css') }}" />
    <title>{{ $title ?? 'Page Title' }}</title>
    @livewireStyles
</head>

<body class='dark:bg-black dark:bg-none flex flex-col md:gap-5 h-full' style="background-image: url({{ asset('storage/images/background.jpg') }}); background-repeat: no-repeat; background-size: cover; background-attachment: fixed;">
    <nav class="flex justify-between items-center bg-gray-900 px-10 text-gray-300 fixed z-10 w-full">
        <span class="text-xl font-semibold">Pokedex By Yvan KOUOMO</span>
        <ul class="flex gap-5">
            <a href="/">
                <li
                    class="cursor-pointer border-b-4 border-gray-900 hover:border-gray-300 duration-300 transition-all py-3 px-2">
                    Accueil
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
            <button id="theme-toggle" class="p-2 text-xl">
                <i id="theme-icon" class="fas fa-sun"></i>
            </button>
        </ul>
    </nav>
    {{ $slot }}
    {{-- @yield('content') --}}
    @livewireScripts
</body>
<script>
function attachEventListeners(){
    var elt = document.querySelectorAll('input[name="image"]');
    elt.forEach(function(radio){
        radio.addEventListener('change', function(){
            document.querySelectorAll('img').forEach(function(elt){
                elt.classList.remove('selected');
            });
            document.querySelector('img[id="' + this.value + '"]').classList.add('selected');
        });
    });
}

function updateIcon() {
    if (rootElement.classList.contains('dark')) {
        themeIcon.classList.remove('fa-sun');
        themeIcon.classList.add('fa-moon');
    } else {
        themeIcon.classList.remove('fa-moon');
        themeIcon.classList.add('fa-sun');
    }
}

//Script for image picker
var AddButton = document.querySelectorAll('button[name="ajouter"]');
AddButton.forEach(function(button) {
    button.addEventListener('click', function(){
        setTimeout(function() {
            attachEventListeners();
        }, 1000);
    });
});

//Script for black/white toggler
// Select the button and the root element
const toggleButton = document.getElementById('theme-toggle');
const rootElement = document.documentElement;
const themeIcon = document.getElementById('theme-icon');

// Check for stored preference on page load
document.addEventListener('DOMContentLoaded', (event) => {
    const storedTheme = localStorage.getItem('theme');
    if (storedTheme) {
        rootElement.classList.add(storedTheme);
    } else {
        // Default to light mode if no preference is stored
        rootElement.classList.add('light');
    }
});

// Add event listener to the button
toggleButton.addEventListener('click', () => {
    // Toggle the dark class on the root element
    if (rootElement.classList.contains('dark')) {
        rootElement.classList.remove('dark');
        localStorage.setItem('theme', 'light');
    } else {
        rootElement.classList.add('dark');
        localStorage.setItem('theme', 'dark');
    }

    updateIcon();
});
</script>
</html>
