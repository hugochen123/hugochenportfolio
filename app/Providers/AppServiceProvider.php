<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Igaster\LaravelTheme\Facades\Theme;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Set the theme of this application, it will affect the path of image, css and js.
        Theme::set('vinegar_theme');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->bindRepositories();
        $this->bindServices();
    }

    private function bindRepositories()
    {
        //
    }

    private function bindServices()
    {
        //
    }
}
