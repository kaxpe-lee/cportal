<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('web.inicio');
})->name('web.inicio');

# Rutas de la parte interna de clientes
Route::get('/customer/inicio', [CustomerController::class, 'inicio'])->name('customer.inicio');


Route::get('/about', [WebController::class, 'about'])->name('web.about');
Route::get('/pricing', [WebController::class, 'pricing'])->name('web.pricing');

/*
Route::get('/pricing', function() {
    return view('web.pricing');
})->name('web.pricing');
*/

Route::get('/contact', function() {
    return view('web.contact');
})->name('web.contact');

Route::get('/howitworks', function() {
    return view('web.howitworks');
})->name('web.howitworks');

Route::get('/condiciones', function() {
    return view('web.condiciones');
})->name('web.condiciones');

Route::get('/privacidad', function() {
    return view('web.privacidad');
})->name('web.privacidad');

Route::get('/cookies', function() {
    return view('web.cookies');
})->name('web.cookies');

Route::get('/lang/{locale}', function ($locale) {
    if (!in_array($locale, ['en', 'es', 'fr','nl','de'])) {
        abort(400);
    }

    session(['locale' => $locale]);

    return redirect()->back(); // 👈 Esto es clave para que se recargue la vista
})->name('lang.switch');