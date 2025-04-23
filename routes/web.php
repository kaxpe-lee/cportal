<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio.inicio');
});

Route::get('/lang/{locale}', function ($locale) {
    if (!in_array($locale, ['en', 'es', 'fr','nl','de'])) {
        abort(400);
    }

    session(['locale' => $locale]);

    return redirect()->back(); // 👈 Esto es clave para que se recargue la vista
})->name('lang.switch');