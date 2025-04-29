<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ __('header.tit') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-full">
    <header style="" class="bg-tla h-22">
        <nav class="mx-auto flex items-center justify-between py-2 px-4">
            <div class="hidden lg:block"><a href="{{ route('web.inicio') }}"><img src="{{asset('img/logod.png')}}" height="30px" alt=""></a></div>
            <div class="block lg:hidden"><a href="{{ route('web.inicio') }}"><img src="{{asset('img/logord.png')}}" height="30px" alt=""></a></div>
            <div class="hidden lg:block">
                <ul class="gap-x-4 text-white hidden md:flex">
                    <li><a href="{{ route('web.inicio') }}">{{ __('header.m-1') }}</a></li>
                    <li><a href="{{ route('web.about') }}">{{ __('header.m-2') }}</a></li>
                    <li><a href="{{ route('web.howitworks') }}">{{ __('header.m-3') }}</a></li>
                    <li><a href="{{ route('web.pricing') }}">{{ __('header.m-4') }}</a></li>
                    <li><a href="{{ route('web.contact') }}">{{ __('header.m-5') }}</a></li>
                </ul>
            </div>
            <div class="block lg:hidden">
                <div class="relative">
                    <svg id="dropdownMenuButton" mlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="#ffffff" class="h-8 w-8 text-gray-700 inline-block align-middle"><path d="M0 96C0 78.3 14.3 64 32 64l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 288c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32L32 448c-17.7 0-32-14.3-32-32s14.3-32 32-32l384 0c17.7 0 32 14.3 32 32z"/></svg>
                    <div id="dropdownMenu" class="absolute z-10 text-white bg-tla shadow-md hidden top-full left-1/2 -translate-x-1/2 w-60 mt-4 p-4 rounded">
                        <span class="flex hover:bg-gray-700 rounded"><a href="{{ route('web.inicio') }}" class="block py-2 px-4">{{ __('header.m-1') }}</a></span>
                        <span class="flex hover:bg-gray-700 rounded"><a href="{{ route('web.about') }}" class="block py-2 px-4">{{ __('header.m-2') }}</a></span>
                        <span class="flex hover:bg-gray-700 rounded"><a href="{{ route('web.howitworks') }}" class="block py-2 px-4">{{ __('header.m-3') }}</a></span>
                        <span class="flex hover:bg-gray-700 rounded"><a href="{{ route('web.pricing') }}" class="block py-2 px-4">{{ __('header.m-4') }}</a></span>
                        <span class="flex hover:bg-gray-700 rounded"><a href="{{ route('web.contact') }}" class="block py-2 px-4">{{ __('header.m-5') }}</a></span>
                    </div>
                </div>
            </div>
            <div class="flex text-white gap-x-4 items-center">
                <div class="relative">
                    <button id="dropdownLangButton" class="flex items-center gap-x-2 cursor-pointer">
                        <span class="uppercase">{{ strtoupper(app()->getLocale()) }}</span>
                        <img src="{{ asset('svg/flags/4x3/' . app()->getLocale() . '.svg') }}" alt="" class="w-6 h-6">
                    </button>
                
                    <div id="dropdownLang" class="absolute z-10 bg-gray-800 shadow-md hidden top-full left-1/2 -translate-x-1/2 w-42 mt-4 p-4 rounded">
                        <a href="{{ route('lang.switch', 'fr') }}" class="flex items-center gap-2 hover:bg-gray-700 rounded p-2">
                            <span>Français</span>
                            <img width="20" src="{{ asset('svg/flags/4x3/fr.svg') }}" alt="FR">
                        </a>
                        <a href="{{ route('lang.switch', 'en') }}" class="flex items-center gap-2 hover:bg-gray-700 rounded p-2">
                            <span>English</span>
                            <img width="20" src="{{ asset('svg/flags/4x3/en.svg') }}" alt="EN">
                        </a>
                        <a href="{{ route('lang.switch', 'es') }}" class="flex items-center gap-2 hover:bg-gray-700 rounded p-2">
                            <span>Español</span>
                            <img width="20" src="{{ asset('svg/flags/4x3/es.svg') }}" alt="ES">
                        </a>
                        <a href="{{ route('lang.switch', 'nl') }}" class="flex items-center gap-2 hover:bg-gray-700 rounded p-2">
                            <span>Nederlands</span>
                            <img width="20" src="{{ asset('svg/flags/4x3/nl.svg') }}" alt="ES">
                        </a>
                        <a href="{{ route('lang.switch', 'de') }}" class="flex items-center gap-2 hover:bg-gray-700 rounded p-2">
                            <span>Deutsche</span>
                            <img width="20" src="{{ asset('svg/flags/4x3/de.svg') }}" alt="DE">
                        </a>
                    </div>
                </div>
                
                <span><a href="{{ filament()->getUrl() }}" style="color: #233054" class="px-4 py-1 bg-white text-blue-300 rounded-lg">{{ __('header.btn') }}</a></span>
            </div>
        </nav>
       
    </header>
   <!-- Contenido principal con sidebar y contenido -->
   <main class="flex flex-1 h-160">
        <!-- Sidebar con ancho fijo -->
        <aside class="w-80 bg-tla text-white p-8 border-r border-gray-300">
            <nav>
                <ul class="space-y-4">
                    <li><a class="text-white flex flex-column gap-4 items-center justify-left" href="#" class="text-blue-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#ffffff" class="h-7 w-7 text-gray-700 inline-block align-middle" viewBox="0 0 576 512"><path d="M575.8 255.5c0 18-15 32.1-32 32.1l-32 0 .7 160.2c.2 35.5-28.5 64.3-64 64.3l-320.4 0c-35.3 0-64-28.7-64-64l0-160.4-32 0c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24zM352 224a64 64 0 1 0 -128 0 64 64 0 1 0 128 0zm-96 96c-44.2 0-80 35.8-80 80c0 8.8 7.2 16 16 16l192 0c8.8 0 16-7.2 16-16c0-44.2-35.8-80-80-80l-64 0z"/></svg>
                        <span>Escritorio</span></a>
                    </li>
                    <li><a class="text-white flex flex-column gap-4 items-center justify-left" href="#" class="text-blue-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#ffffff" class="h-7 w-7 text-gray-700 inline-block align-middle" viewBox="0 0 640 512"><path d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192l42.7 0c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0L21.3 320C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7l42.7 0C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3l-213.3 0zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352l117.3 0C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7l-330.7 0c-14.7 0-26.7-11.9-26.7-26.7z"/></svg>
                        <span>Cuentas</span></a>
                    </li>
                    <li><a class="text-white flex flex-column gap-4 items-center justify-left" href="#" class="text-blue-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#ffffff" class="h-7 w-7 text-gray-700 inline-block align-middle" viewBox="0 0 640 512"><path d="M288 48c0-26.5 21.5-48 48-48l96 0c26.5 0 48 21.5 48 48l0 144 40 0 0-72c0-13.3 10.7-24 24-24s24 10.7 24 24l0 72 24 0c26.5 0 48 21.5 48 48l0 224c0 26.5-21.5 48-48 48l-160 0-96 0c-26.5 0-48-21.5-48-48l0-416zm64 32l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm16 80c-8.8 0-16 7.2-16 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0zM352 272l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm176-16c-8.8 0-16 7.2-16 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0zM512 368l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zM224 160c0 6-1 11-2 16c20 14 34 38 34 64c0 45-36 80-80 80l-16 0 0 160c0 18-15 32-32 32c-18 0-32-14-32-32l0-160-16 0c-45 0-80-35-80-80c0-26 13-50 33-64c-1-5-1-10-1-16c0-53 42-96 96-96c53 0 96 43 96 96z"/></svg>
                        <span>Propiedades</span></a>
                    </li>
                    <li><a class="text-white flex flex-column gap-4 items-center justify-left" href="#" class="text-blue-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#ffffff" class="h-7 w-7 text-gray-700 inline-block align-middle" viewBox="0 0 384 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M64 0C28.7 0 0 28.7 0 64L0 448c0 35.3 28.7 64 64 64l256 0c35.3 0 64-28.7 64-64l0-288-128 0c-17.7 0-32-14.3-32-32L224 0 64 0zM256 0l0 128 128 0L256 0zM80 64l64 0c8.8 0 16 7.2 16 16s-7.2 16-16 16L80 96c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64l64 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-64 0c-8.8 0-16-7.2-16-16s7.2-16 16-16zm16 96l192 0c17.7 0 32 14.3 32 32l0 64c0 17.7-14.3 32-32 32L96 352c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32zm0 32l0 64 192 0 0-64L96 256zM240 416l64 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-64 0c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/></svg>
                        <span>Impuestos</span></a>
                    </li>
                    <li><a class="text-white flex flex-column gap-4 items-center justify-left" href="#" class="text-blue-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#ffffff" class="h-7 w-7 text-gray-700 inline-block align-middle" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512l388.6 0c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304l-91.4 0z"/></svg>
                        <span>Usuario</span></a>
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- Contenido dinámico -->
        <section class="flex-1 p-6">
            @yield('content')
        </section>
    </main>
</body>
</html>