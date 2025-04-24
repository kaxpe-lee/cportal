@extends('web') {{-- Indica que esta vista extiende la plantilla 'layouts/app.blade.php' --}}

@section('title', 'Página de Inicio') {{-- Define el contenido para la sección 'title' --}}

@section('content') {{-- Define el contenido para la sección 'content' --}}
    <div id="secc01" class="w-full md:w-11/12 grid grid-cols-1 md:grid-cols-2 gap-4 mx-auto py-8 md:py-10">
        <div class="p-0 md:p-10 flex flex-col tems-center justify-center">
            <h2 class="t2 text-center tracking-tight text-balance">{{ __('inicio.sec01.h1') }}</h2>
            <p class="text-center wp p-5">{{ __('inicio.sec01.p') }}</p>
            <div class="sm:hidden flex justify-center items-center py-4 px-6 md:p-10"><img class="rounded-xl" src="{{asset('img/secc01.jpg')}}"  alt=""></div>
            <div class="mt-4 flex items-center justify-center gap-x-6">
                <a href="#" class="rounded-md bg-[#233054] px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-[#222221] focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">{{ __('inicio.sec01.btn01') }}</a>
                <a href="#" class="text-sm/6 font-semibold text-gray-900">{{ __('inicio.sec01.btn02') }} <span aria-hidden="true">→</span></a>
            </div>
        </div>
        <div class="hidden md:flex justify-center items-center p-10"><img class="rounded-xl" src="{{asset('img/secc01.jpg')}}"  alt=""></div>
    </div>

    <div id='cont-secc02' class="w-full bg-blue-50">
        <div id="secc02" class="bg-blue-50 w-10/12  mx-auto py-8 md:py-20">
            <h2 class="t2 text-left tracking-tight text-balance">{{ __('inicio.sec02.h2') }}</h2>
            <p class="wp mt-3 mb-6 md:mb-8 p-2 md:pl-6" >{{ __('inicio.sec02.p') }}</p>
            <div class="grid grid-cols-1 md:grid-cols-2 w-full md:w-11/12 gap-2 md:gap-15 mx-auto md:pt-14">
                <div class="">
                    <h3 class="t3">{{ __('inicio.sec02.h3-1') }}</h3>
                    <p class="text-xl text-gray-600 mt-3 mb-8">{{ __('inicio.sec02.p-1') }}</p>
                </div>
                <div class="">
                    <h3 class="t3">{{ __('inicio.sec02.h3-2') }}</h3>
                    <p class="text-xl text-gray-600 mt-3 mb-8">{{ __('inicio.sec02.p-2') }}</p>
                </div>
                <div class="">
                    <h3 class="t3">{{ __('inicio.sec02.h3-3') }}</h3>
                    <p class="text-xl text-gray-600 mt-3 mb-8">{{ __('inicio.sec02.p-3') }}</p>
                </div>
                <div class="">
                    <h3 class="t3">{{ __('inicio.sec02.h3-4') }}</h3>
                    <p class="text-xl text-gray-600 mt-3 mb-8">{{ __('inicio.sec02.p-4') }}</p>
                </div>
                <div class="">
                    <h3 class="t3">{{ __('inicio.sec02.h3-5') }}</h3>
                    <p class="text-xl text-gray-600 mt-3 mb-8">{{ __('inicio.sec02.p-5') }}</p>
                </div>
                <div class="">
                    <h3 class="t3">{{ __('inicio.sec02.h3-6') }}</h3>
                    <p class="text-xl text-gray-600 mt-3 mb-8">{{ __('inicio.sec02.p-6') }}</p>
                </div>
            </div>
        </div>
    </div>

    <div id="secc03" class="w-10/12 mx-auto py-8 md:py-20">
        <h2 class="t2 text-center tracking-tight text-balance">{{ __('inicio.sec03.h2') }}</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 w-full gap-12 mx-auto pt-10">
            <div class="flex flex-col items-center justify-center mb-8">
                <h3 class="t3b text-center">{!! __('inicio.sec03.h3-1') !!}</h3>
                <p class="text-2xl text-gray-600 mt-3 mb-8 text-center">{!! __('inicio.sec03.p-1') !!}</p>
                <a class="py-3 px-7 text-xl bg-tla text-white rounded-xl" href="#">{!! __('inicio.sec03.btn') !!}</a>
            </div>
            <div class="flex flex-col items-center justify-center mb-8">
                <h3 class="t3b text-center">{!! __('inicio.sec03.h3-2') !!}</h3>
                <p class="text-2xl text-gray-600 mt-3 mb-8 text-center">{!! __('inicio.sec03.p-2') !!}</p>
                <a class="py-3 px-7 text-xl bg-tla text-white rounded-xl" href="#">{!! __('inicio.sec03.btn') !!}</a>
            </div>
            <div class="flex flex-col items-center justify-center mb-8">
                <h3 class="t3b text-center">{!! __('inicio.sec03.h3-3') !!}</h3>
                <p class="text-2xl text-gray-600 mt-3 mb-8 text-center">{!! __('inicio.sec03.p-3') !!}</p>
                <a class="py-3 px-7 text-xl bg-tla text-white rounded-xl" href="#">{!! __('inicio.sec03.btn') !!}</a>
            </div>
        </div>
    </div>
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
            <div class="text-lg text-gray-600 h-6 md:h-8 lg:h-10 flex justify-center items-start">
                <span>{{ __('inicio.sec04.p-1') }}</span>
            </div>
            <div class="h-26 flex justify-center items-center">
                <img class="pt-4 h-20 mx-auto" src="{{asset('img/at_logo.png')}}"  alt="">
            </div>
        </div>
        <div class="text-center my-4">
            <div class="text-lg text-gray-600 h-6 md:h-8 lg:h-10 flex justify-center items-start">
                <span class="">{{ __('inicio.sec04.p-3') }}</span>
            </div>
            <div class="h-26 flex justify-center items-center">
                <img class="pt-4 h-16 mx-auto" src="{{asset('img/ce_logo.png')}}"  alt="">
            </div>
        </div>
        <div class="text-center my-4">
            <div class="text-lg text-gray-600 h-6 md:h-8 lg:h-10 flex justify-center items-start">
                <span class="">{{ __('inicio.sec04.p-4') }}</span>
            </div>
            <div class="h-26 flex justify-center items-center">
                <img class="pt-4 h-16 mx-auto" src="{{asset('img/ca_logo.png')}}" alt="">
            </div>
        </div>
        <div class="text-center my-4">
            <div class="text-lg text-gray-600 h-6 md:h-8 lg:h-10 flex justify-center items-start">
                <span class="">{{ __('inicio.sec04.p-2') }}</span>
            </div>
            <div class="h-26 flex justify-center items-center">
                <img class="pt-4 h-14 mx-auto" src="{{asset('img/aedaf_logo.png')}}" alt="">
            </div>
        </div>
    </div>
@endsection
    