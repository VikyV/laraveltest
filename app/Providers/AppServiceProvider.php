<?php

namespace App\Providers;

use App\Categorie;
use Illuminate\Support\ServiceProvider;
use DB;
//use App\Categorie;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layout', function ($view) {
        //$view->with('lenomdevariable', 'unevaleur');
        //$view->with('globalNameSite', 'monsupersite.com');
        $categorie= Categorie :: orderBy('position')->get();
        $view->with('globalNavCategorie', $categorie);


        $twitter = new \App\Http\Services\Twitter();
        $tweets = $twitter->getTweets();
        $view->with('globalTweets', $tweets);




    });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
