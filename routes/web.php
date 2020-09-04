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

Route::prefix('admin')->group(function () {
    Route::get('/login', 'Auth\AdminLoginController@showLoginform')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
});

Route::group(['middleware' => ['auth:admin']], function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', 'AdminController@index')->name('admin.dashbord');
        // Project
        Route::resource('/brand', 'BrandController');
        Route::post('/brand-check', 'BrandController@check');
        Route::post('/update-brand', 'BrandController@update')->name('admin.update.brand');
        Route::get('/brand/destroy/{id}', 'BrandController@destory');
        // User
        Route::resource('/model', 'ModelController');
        Route::post('/model-check', 'ModelController@check');
        Route::post('/update-modal', 'ModelController@model_update')->name('admin.update.model');
        Route::get('/model/destroy/{id}', 'ModelController@destory');
        // Todo
        Route::resource('/item', 'ItemController');
        Route::post('/item-check', 'ItemController@check');
        Route::post('/update-item', 'ItemController@update')->name('admin.update.item');
        Route::get('/item/destroy/{id}', 'ItemController@destory');
    });
});

Route::group(['middleware' => ['auth:web']], function () {
    Route::prefix('home')->group(function () {
        Route::get('/', 'HomeController@index')->name('home');
        Route::get('/users/todo', 'HomeController@usersToDo')->name('user.todo');
         Route::get('/todo/complete/{id}', 'HomeController@todoComplete')->name('todo.complete');
        Route::get('/todo/incomplete/{id}', 'HomeController@todoIncomplete')->name('todo.incomplete');
    });
});
//clear cache
Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('route:cache');
    $exitCode = Artisan::call('route:clear');
    // $exitCode = Artisan::call('optimize');
    $exitCode = Artisan::call('view:clear');
    return '<h1>Clear Config cleared</h1>';
});

