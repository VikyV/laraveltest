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

    Route::get('/register', [
        "uses" => "MainController@register",
        'as' => 'register'
    ]);

    Route::get('/checkout', [
        "uses" => "MainController@checkout",
        'as' => 'checkout'
    ]);
});
