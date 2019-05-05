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

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('/home',function(){

return 'hello';

});
*/


/*Route::get('/about',function(){

	return view('pages.about');

});*/

Route::get('/','pagesController@index');

//Route::get('/user','UserController@index');

Route::get('/about','pagesController@about');
Route::get('/services','pagesController@services');
Route::get('/services/{id}','pagesController@show');
Route::get('/posts','postsController@index');
Route::get('/posts/{id}','postsController@display');
Route::get('/create','postsController@create');
//Route::get('/posts/store', 'postsController@store');
Route::resource('/posts', 'postsController');
//cityController
Route::resource('/city','CityController');
//countryController
Route::resource('/country','CountryController');
// departController
Route::resource('/department','departmentController');
//stateController
Route::resource('/state','StateController');
//divison Controller
Route::resource('/divison','divisonController');
//userController
Route::resource('/user','UserController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
