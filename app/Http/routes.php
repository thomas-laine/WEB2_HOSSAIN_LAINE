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


use Illuminate\Http\Request;



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

    Route::group(['prefix' => 'articles'], function(){

        /**
        Route::get('/', function() {
        return view('articles.index');
        });


        Route::get('/create', function() {
        return view('articles.create');
        });


        Route::get('/create', 'ArticleController@create');

        Route::post('/', [
        'as' => 'articles.store',
        'uses' => function(Request $request) {
        }]);

        Route::post('/articles', function(Request $request) {
        dd($request->all());
        });
         */
    });

    Route::group(['prefix' => 'projets'], function(){

        /**
        Route::get('/', function() {
        return view('projets.index');
        });


        Route::get('/create', function() {
        return view('projets.create');
        });


        Route::get('/create', 'ArticleController@create');

        Route::post('/', [
        'as' => 'projets.store',
        'uses' => function(Request $request) {
        }]);

        Route::post('/projets', function(Request $request) {
        dd($request->all());
        });
         */
    });

    Route::resource('/articles', 'PostController');

    Route::resource('/projets', 'ProjetController');

    Route::resource('/profile', 'ProfileController');

    Route::resource('/contact', 'ContactController');

    Route::auth();

    Route::get('/home', 'HomeController@index');

    Route::get('/', function () {
        return view('welcome');
    });

    Route::post('comments', 'CommentsController@store');
    Route::get('/profile', ['middleware' => 'auth', 'as' => 'profile.show', 'uses' => 'ProfileController@show']);
    Route::get('/profile/edit', ['middleware' => 'auth', 'as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
    Route::put('/profile', ['middleware' => 'auth', 'as' => 'profile.update', 'uses' => 'ProfileController@update']);

});




