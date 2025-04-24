<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ __('header.tit') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="">
    <header style="" class="bg-red-600 tla-bg">
        <nav class="mx-auto flex items-center justify-between py-2 px-4">
            <div class="hidden lg:block"><a href="{{ route('web.inicio') }}"><img src="{{asset('img/logod.png')}}" height="40px" alt=""></a></div>
            <div class="block lg:hidden"><a href="{{ route('web.inicio') }}"><img src="{{asset('img/logord.png')}}" height="40px" alt=""></a></div>
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
                    <div id="dropdownMenu" class="absolute z-10 text-white tla-bg shadow-md hidden top-full left-1/2 -translate-x-1/2 w-60 mt-4 p-4 rounded">
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
   
    @yield('content') {{-- Aquí se insertará el contenido específico de cada vista --}}
    
    <footer>
        <div class="hidden lg:block  bg-gray-800 pt-6 pb-2" >
            <img class="mx-auto" src="{{asset('img/logod.png')}}" height="40px" alt="">
        </div>
        <div class="gap-4 grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 bg-gray-800 p-1 md:p-10 py-10">
            <div class="block lg:hidden px-4">
                <img class="mx-auto" src="{{asset('img/logod.png')}}" height="40px" alt="">
            </div>
            <div class="text-center text-gray-400">
                <h4 class="font-bold uppercase text-gray-100 pb-1">Legal</h4>
                <p><a href="{{ route('web.condiciones') }}">Terms and conditiones</a></p>
                <p><a href="{{ route('web.privacidad') }}">Privacy police</a></p>
                <p><a href="{{ route('web.cookies') }}">Cookie police</a></p>
            </div>
            <div class="text-center text-gray-400">
                <h4 class="font-bold uppercase text-gray-100 pb-1">Company</h4>
                <p>About</p>
                <p>Contact</p>
                <p>Business Account</p>
                <p>Referral Program</p>
            </div>
            <div class="text-center text-gray-400">
                <h4 class="font-bold uppercase text-gray-100 pb-1">Our tax services</h4>
                <p>Pricing</p>
                <p>How it works</p>
                <p>Inputed income</p>
                <p>Rented income</p>
                <p>Capital Gains Tax</p>
            </div>
            <div class="text-center text-gray-400 ">
                <h4 class="font-bold uppercase text-gray-100 pb-1">Non-resident tax Spain</h4>
                <p>Non-Resident Tax 2024</p>
                <p>Non-Resident Tax 2023</p>
                <p>Non-Resident Tax 2022</p>
                <p>Non-Resident Tax 2021</p>
            </div>
            <div class="text-center text-gray-400">
                <h4 class="font-bold uppercase text-gray-100 pb-1">Resources</h4>
                <p>Blog</p>
                <p>Faq</p>
                <p>Tax Calculator</p>
                <p>Sapnish tax glossary</p>
            </div>
        </div>
        <div class="bg-gray-900 text-gray-500 py-5 px-4 md:px-40 text-center">Tla Corp is registered at the Commercial Registry of Alicante, Spain. Tla Corp is a trading style of TLA CORP SLP. with registered office at Calle Velarde, 13 (03202), Elche, Alicante, Spain. </div>
    </footer>
    
</body>
</html>