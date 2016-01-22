<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
Route::get('/',['as' => 'url_vers_welcome', function () {
    return view('welcome');
}]);
*/


Route::get('/con',['as' => 'url_vers_cgv', function () {
      return view('test.cgv');
}]);


Route::get('/test', [
    'uses' => 'MainController@essai'
]);

Route::get('/test-tableau', [
    'uses' => 'MainController@tableau',
    'as'=> "route_test_tab"
]);

Route::get('/notre-equipe', [
    'uses' => 'MainController@team',
    'as' => 'url_vers_team'
]);

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the ")
    web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

    Route::get('/', [
        "uses" => "MainController@home",
        'as' => 'home'
    ]);
    /*
    afin de recuperer le formulaire, on transforme get en any = GET ET POST
    */
    Route::any('/contactez-nous', [
        "uses" => "MainController@contact",
        'as' => 'contact'
    ]);

    Route::any('/admin/register', [
        "uses" => "MainController@register",
        'as' => 'register'
    ]);


    Route::any('/feedback', [
        "uses" => "MainController@feedback",
        'as' => 'feedback'
    ]);

    Route::get('/details/{id}', [
        "uses" => "MainController@details",
        'as' => 'details',

    ]);

    Route::get('/checkout', [
        "uses" => "MainController@checkout",
        'as' => 'checkout'
    ]);
    Route::get('/checkout/ajouter/{id}', [
        "uses" => "MainController@addproduct",
        'as' => 'addproduct',

    ]);
    Route::any('checkout/supprimer/{id}', [
        "uses" => "MainController@deleteproduct",
        'as' => 'deleteproduct',

    ]);
    Route::any('/checkout/update/{id}', [
        "uses" => "MainController@updateproduct",
        'as' => 'updateproduct',

    ]);

    Route::get('/categorie/{id}', [
        "uses" => "MainController@categorie",
        'as' => 'categorie',

    ]);







        /* ADMIN*/



    Route::any('/admin/categories/supprimer/{idcat}',[
        "uses" =>"AdminController@supprimer",
        'as'=> "supprimer",
    ]);



    Route::group(['prefix' => '/admin'], function()
    {


        Route::any('/', [
            'uses' => 'AdminController@dashboard',
            'as' => 'dashboard'
        ]);


        Route::get('/categories', [
            'uses' => 'AdminController@Categories',
            'as' => 'categories'
        ]);


        Route::any('/ajouter', [
            'uses' => 'AdminController@ajouterCategory',
            'as' => 'ajouterCategory'
        ]);

        Route::any('/register', [
            'uses' => 'AdminController@register',
            'as' => 'register'
        ]);

    });
});
