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

Route::group([
    'namespace' => 'Admin',
    'middleware' => ['auth:web','checkAdmin'],
    'prefix' => 'dashboard'
], function () {
    Route::get('/', 'AdminController@index');
});

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'patterns', 'namespace' => 'Patterns'], function () {
    Route::get('property-container', 'PropertyContainerController@index');
});

Route::group(['prefix' => 'charts', 'namespace' => 'Charts'], function () {
    Route::get('liner-chart', 'LineChartController@index');
    Route::get('pie-chart', 'PieChartController@index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
