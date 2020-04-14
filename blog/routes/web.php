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

// use App\Collection;

// Route::get('/', function () {
//     $collections = Collection::all();
//     return view('welcome', compact('collections'));
// });


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'DashboardController@index')->name('admin');
Route::get('/article/adminlist', 'ArticlesController@adminlist')->name('article.adminlist');
Route::get('/article/delete/{id}', 'ArticlesController@delete')->name('article.delete');
Route::get('/admin/{id}/edit', 'ArticlesController@edit')->name('article.editer');
Route::get('/article/add', 'ArticlesController@create')->name('article.add');
Route::post('/article/store', 'ArticlesController@store')->name('article.store');
Route::post('/admin/edit/{id}', 'ArticlesController@update')->name('article.update');

Route::get('/user/userlist', 'UsersController@userlist')->name('users.userlist');
Route::get('/users/delete/{id}', 'UsersController@delete')->name('user.delete');
Route::get('/user/{id}/edit', 'UsersController@edit')->name('user.profile');
Route::post('/user/edit/{id}', 'UsersController@update')->name('user.update');

Route::get('/article/categories', 'CategoriesController@categorielist')->name('categories.categorielist');
Route::get('/categorie/delete/{id}', 'CategoriesController@delete')->name('categorie.delete');
Route::get('/categorie/{id}/edit', 'CategoriesController@edit')->name('categorie.editer');
Route::post('/categorie/edit/{id}', 'CategoriesController@update')->name('categorie.update');
Route::get('/catagorie/add', 'CategoriesController@create')->name('categorie.add');
Route::post('/categorie/store', 'CategoriesController@store')->name('categorie.store');

Route::resource('/forum', 'CollectionController');
Route::get('/forum/{slug}', 'CollectionController@index')->name('home');
Route::get('/collection/collectionlist', 'CollectionController@collectionlist')->name('collection.collectionlist');
Route::get('/collection/delete/{id}', 'CollectionController@delete')->name('collection.delete');
Route::get('/collection/{id}/edit', 'CollectionController@edit')->name('collection.editer');

Route::get('/collection/{id}', 'CollectionController@filtre')->name('forum.categorie'); 


// Route::get('/forum/collection') {
//     return view('forum.categorie');
// });