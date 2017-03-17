<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/test', function () {
	//var_dump(\App\User::with('clients')->find(Auth::id())->client);die;
	foreach (Auth::user()->clients as $client) {
		var_dump($client);
	}
	die;
	//return 'test';
})->middleware('auth');

Route::group([
	'prefix' => 'admin', 
	'middleware' => 'auth'
	], function () {
		Route::resource('posts', 'Admin\\PostsController');
		Route::get('/', function () {
			return view('admin.dashboard');
		});
	}
);

Route::get('home/test', 'DatatableController@getBasic');
Route::get('home/ajax-test', 'DatatableController@getBasicData');
