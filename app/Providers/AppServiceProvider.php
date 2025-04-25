<?php

namespace App\Providers;

use BezhanSalleh\FilamentLanguageSwitch\LanguageSwitch;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        LanguageSwitch::configureUsing(function (LanguageSwitch $switch) {
            $switch
                ->locales(['es','en','fr','de','nl']) // also accepts a closure
                ->flags([
                    'es' => asset('svg/flags/1x1/es.svg'),
                    'fr' => asset('svg/flags/1x1/fr.svg'),
                    'en' => asset('svg/flags/1x1/gb.svg'),
                    'de' => asset('svg/flags/1x1/de.svg'),
                    'nl' => asset('svg/flags/1x1/nl.svg')
                ]);
                
        });

    }
}
