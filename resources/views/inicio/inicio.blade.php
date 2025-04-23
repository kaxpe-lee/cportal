<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ __('header.tittle') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="">
    <header style="" class="bg-red-600 tla-bg">
        <nav class="mx-auto flex items-center justify-between py-2 px-4">
            <div class="hidden lg:block"><img src="{{asset('img/logod.png')}}" height="40px" alt=""></div>
            <div class="block lg:hidden"><img src="{{asset('img/logord.png')}}" height="40px" alt=""></div>
            <div class="hidden lg:block">
                <ul class="flex gap-x-4 text-white hidden md:flex">
                    <li>{{ __('header.Home') }}</li>
                    <li>{{ __('header.About') }}</li>
                    <li>{{ __('header.How it works') }}</li>
                    <li>{{ __('header.Pricing') }}</li>
                    <li>{{ __('header.Contact') }}</li>
                </ul>
            </div>
            <div class="block lg:hidden">
                <div class="relative">
                    <svg id="dropdownMenuButton" mlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="#ffffff" class="h-8 w-8 text-gray-700 inline-block align-middle"><path d="M0 96C0 78.3 14.3 64 32 64l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 288c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32L32 448c-17.7 0-32-14.3-32-32s14.3-32 32-32l384 0c17.7 0 32 14.3 32 32z"/></svg>
                    <div id="dropdownMenu" class="absolute z-10 text-white tla-color shadow-md hidden top-full left-1/2 -translate-x-1/2 w-60 mt-4 p-4 rounded">
                        <span class="flex hover:bg-gray-700 rounded"><a href="#" class="block py-2 px-4">{{ __('header.Home') }}</a></span>
                        <span class="flex hover:bg-gray-700 rounded"><a href="#" class="block py-2 px-4">{{ __('header.About') }}</a></span>
                        <span class="flex hover:bg-gray-700 rounded"><a href="#" class="block py-2 px-4">{{ __('header.How it works') }}</a></span>
                        <span class="flex hover:bg-gray-700 rounded"><a href="#" class="block py-2 px-4">{{ __('header.Pricing') }}</a></span>
                        <span class="flex hover:bg-gray-700 rounded"><a href="#" class="block py-2 px-4">{{ __('header.Contact') }}</a></span>
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
                    </div>
                </div>
                
                <span><a href="{{ filament()->getUrl() }}" style="color: #233054" class="px-4 py-1 bg-white text-blue-300 rounded-lg">{{ __('header.Log in') }}</a></span>
            </div>
        </nav>
       
    </header>
   
    <div id="secc01" class="w-11/12 grid grid-cols-2 gap-4 mx-auto py-10">
        <div class="p-10">
            <h2 class="font-semibold tracking-tight text-balance text-5xl tla-text mb-0 p-4">{{ __('inicio.sec01.h1') }}</h2>
            <p class="text-3xl p-5">{{ __('inicio.sec01.p') }}</p>
           
            <div class="mt-4 flex items-center justify-center gap-x-6">
                <a href="#" class="rounded-md bg-[#233054] px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-[#222221] focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">{{ __('inicio.sec01.btn01') }}</a>
                <a href="#" class="text-sm/6 font-semibold text-gray-900">{{ __('inicio.sec01.btn02') }} <span aria-hidden="true">→</span></a>
            </div>
        </div>
        <div class="flex justify-center items-center p-10"><img class="rounded-xl" src="{{asset('img/secc01.jpg')}}"  alt=""></div>
    </div>
    
    <div id='cont-secc02' class="w-full bg-gray-50">
        <div id="secc02" class="w-10/12  mx-auto py-20">
            <h2 class="font-semibold tracking-tight text-balance text-5xl tla-text mb-0 p-5 leading-tight">{{ __('inicio.sec02.h2') }}</h2>
            <p class="text-2xl text-gray-600 mt-3 mb-8 pl-6" >{{ __('inicio.sec02.p') }}</p>
            <div class="grid grid-cols-2 w-11/12 gap-8 mx-auto pt-14">
                <div class="">
                    <h3 class="tla-text text-3xl text-semibold">{{ __('inicio.sec02.h3-1') }}</h3>
                    <p class="text-xl text-gray-600 mt-3 mb-8">{{ __('inicio.sec02.p-1') }}</p>
                </div>
                <div class="">
                    <h3 class="tla-text text-3xl text-semibold">{{ __('inicio.sec02.h3-2') }}</h3>
                    <p class="text-xl text-gray-600 mt-3 mb-8">{{ __('inicio.sec02.p-2') }}</p>
                </div>
                <div class="">
                    <h3 class="tla-text text-3xl text-semibold">{{ __('inicio.sec02.h3-3') }}</h3>
                    <p class="text-xl text-gray-600 mt-3 mb-8">{{ __('inicio.sec02.p-3') }}</p>
                </div>
                <div class="">
                    <h3 class="tla-text text-3xl text-semibold">{{ __('inicio.sec02.h3-4') }}</h3>
                    <p class="text-xl text-gray-600 mt-3 mb-8">{{ __('inicio.sec02.p-4') }}</p>
                </div>
                <div class="">
                    <h3 class="tla-text text-3xl text-semibold">{{ __('inicio.sec02.h3-5') }}</h3>
                    <p class="text-xl text-gray-600 mt-3 mb-8">{{ __('inicio.sec02.p-5') }}</p>
                </div>
                <div class="">
                    <h3 class="tla-text text-3xl text-semibold">{{ __('inicio.sec02.h3-6') }}</h3>
                    <p class="text-xl text-gray-600 mt-3 mb-8">{{ __('inicio.sec02.p-6') }}</p>
                </div>
            </div>
        </div>
    </div>
    
    <div id="secc03" class="w-10/12 mx-auto py-20 mx-auto py-20">
        <h2 class="font-semibold tracking-tight text-balance text-6xl text-center tla-text mb-8 p-5 leading-tight">{{ __('inicio.sec03.h2') }}</h2>
        <div class="grid grid-cols-3 w-full gap-12 mx-auto pt-6">
            <div class="flex flex-col items-center justify-center">
                <h3 class="tla-text text-3xl font-semibold text-center">{!! __('inicio.sec03.h3-1') !!}</h3>
                <p class="text-2xl text-gray-600 mt-3 mb-8 text-center">{!! __('inicio.sec03.p-1') !!}</p>
                <a class="py-3 px-7 text-xl tla-bg text-white rounded-xl" href="#">{!! __('inicio.sec03.btn') !!}</a>
            </div>
            <div class="flex flex-col items-center justify-center">
                <h3 class="tla-text text-3xl font-semibold text-center">{!! __('inicio.sec03.h3-2') !!}</h3>
                <p class="text-2xl text-gray-600 mt-3 mb-8 text-center">{!! __('inicio.sec03.p-2') !!}</p>
                <a class="py-3 px-7 text-xl tla-bg text-white rounded-xl" href="#">{!! __('inicio.sec03.btn') !!}</a>
            </div>
            <div class="flex flex-col items-center justify-center">
                <h3 class="tla-text text-3xl font-semibold text-center">{!! __('inicio.sec03.h3-3') !!}</h3>
                <p class="text-2xl text-gray-600 mt-3 mb-8 text-center">{!! __('inicio.sec03.p-3') !!}</p>
                <a class="py-3 px-7 text-xl tla-bg text-white rounded-xl" href="#">{!! __('inicio.sec03.btn') !!}</a>
            </div>
        </div>
    </div>
    <p class="hidden lg:block">Tamaño lg</p>
    <p class="hidden xl:block">Tamaño xl</p>
    <div style="display:none" class="w-full bg-gray-50 py-20 flex justify-center items-center" >
        <div class="max-w-7xl p-5"> 
            <h2 class="text-center text-base/7 font-semibold text-indigo-600">Deploy faster</h2>
            <p class="mx-auto mt-2 max-w-lg text-center text-4xl font-semibold tracking-tight text-balance text-gray-950 sm:text-5xl">Everything you need to deploy your app</p>
            <dl class="pt-20 grid grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-3 lg:gap-y-16">
                <div class="relative pl-16">
                    <dt class="text-base/7 font-semibold text-gray-900">
                    <div class="absolute top-0 left-0 flex size-10 items-center justify-center rounded-lg bg-[#233054]">
                        <svg class="size-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0 3 3m-3-3-3 3M6.75 19.5a4.5 4.5 0 0 1-1.41-8.775 5.25 5.25 0 0 1 10.233-2.33 3 3 0 0 1 3.758 3.848A3.752 3.752 0 0 1 18 19.5H6.75Z" />
                        </svg>
                    </div>
                    Push to deploy
                    </dt>
                    <dd class="mt-2 text-base/7 text-gray-600">Morbi viverra dui mi arcu sed. Tellus semper adipiscing suspendisse semper morbi. Odio urna massa nunc massa.</dd>
                </div>
                <div class="relative pl-16">
                    <dt class="text-base/7 font-semibold text-gray-900">
                    <div class="absolute top-0 left-0 flex size-10 items-center justify-center rounded-lg bg-[#233054]">
                        <svg class="size-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                        </svg>
                    </div>
                    SSL certificates
                    </dt>
                    <dd class="mt-2 text-base/7 text-gray-600">Sit quis amet rutrum tellus ullamcorper ultricies libero dolor eget. Sem sodales gravida quam turpis enim lacus amet.</dd>
                </div>
                <div class="relative pl-16">
                    <dt class="text-base/7 font-semibold text-gray-900">
                    <div class="absolute top-0 left-0 flex size-10 items-center justify-center rounded-lg bg-[#233054]">
                        <svg class="size-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                        </svg>
                    </div>
                    Simple queues
                    </dt>
                    <dd class="mt-2 text-base/7 text-gray-600">Quisque est vel vulputate cursus. Risus proin diam nunc commodo. Lobortis auctor congue commodo diam neque.</dd>
                </div>
            </dl>
        </div>
    </div>
    <div class="grid grid-cols-1 ga-10 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 p-10">
        <div class="text-center my-4">
            <div class="h-2 sm:h-4 md:h-8 lg:h-10 flex justify-center items-start">
                <span>{{ __('inicio.sec04.card01') }}</span>
            </div>
            <div class="h-26 flex justify-center items-center">
                <img class="pt-4 h-20 mx-auto" src="{{asset('img/at_logo.png')}}"  alt="">
            </div>
        </div>
        <div class="text-center my-4">
            <div class="h-2 sm:h-4 md:h-8 lg:h-10 flex justify-center items-start">
                <span class="">{{ __('inicio.sec04.card03') }}</span>
            </div>
            <div class="h-26 flex justify-center items-center">
                <img class="pt-4 h-16 mx-auto" src="{{asset('img/ce_logo.png')}}"  alt="">
            </div>
        </div>
        <div class="text-center my-4">
            <div class="h-2 sm:h-4 md:h-8 lg:h-10 flex justify-center items-start">
                <span class="">{{ __('inicio.sec04.card04') }}</span>
            </div>
            <div class="h-26 flex justify-center items-center">
                <img class="pt-4 h-16 mx-auto" src="{{asset('img/ca_logo.png')}}" alt="">
            </div>
        </div>
        <div class="text-center my-4">
            <div class="h-2 sm:h-4 md:h-8 lg:h-10 flex justify-center items-start">
                <span class="">{{ __('inicio.sec04.card02') }}</span>
            </div>
            <div class="h-26 flex justify-center items-center">
                <img class="pt-4 h-14 mx-auto" src="{{asset('img/aedaf_logo.png')}}" alt="">
            </div>
        </div>
    </div>
    
    <footer>
        <div class="hidden lg:block  bg-gray-800 pt-6 pb-2">
            <img class="mx-auto" src="{{asset('img/logod.png')}}" height="40px" alt="">
        </div>
        <div class="gap-4 grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 bg-gray-800 p-1 md:p-10 py-10">
            <div class="block lg:hidden">
                <img class="mx-auto" src="{{asset('img/logod.png')}}" height="40px" alt="">
            </div>
            <div class="text-center text-gray-400">
                <h4 class="font-bold uppercase text-gray-100 pb-1">Legal</h4>
                <p>Terms and conditiones</p>
                <p>Privacy police</p>
                <p>Cookie police</p>
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