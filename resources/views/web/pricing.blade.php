@extends('web') {{-- Indica que esta vista extiende la plantilla 'layouts/app.blade.php' --}}

@section('title', 'Página de Inicio') {{-- Define el contenido para la sección 'title' --}}

@section('content')
    <div class="py-20 text-center">
        <h1 class="text-6xl">Posts</h1>
        <div class="grid grid-cols-4 gap-20 p-10"> 
            @foreach ($posts as $post)
                <div class="mb-6 border-b pb-4">
                    <h2 class="t3  font-semibold">
                        {{ $post['title']['rendered'] }}
                    </h2>

                    <div class="text-sm text-gray-600 mb-2">
                        Publicado el {{ \Carbon\Carbon::parse($post['date'])->format('d/m/Y') }}
                    </div>

                    <div class="prose">
                        {!! $post['excerpt']['rendered'] !!}
                    </div>

                    <a href="{{ $post['link'] }}" target="_blank" class="text-blue-600 underline">Leer más</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection