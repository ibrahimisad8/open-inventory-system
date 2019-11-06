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
| Verb          Path                            Action  Route Name
| GET           /inventory                      index   inventory.index
| GET           /inventory/create               create  inventory.create
| POST          /inventory                      store   inventory.store
| GET           /inventory/{id}                 show    inventory.show
| GET           /inventory/{id}/edit            edit    inventory.edit
| PUT|PATCH     /inventory/{id}                 update  inventory.update
| DELETE        /inventory/{id}                 destroy inventory.destroy
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::group(['prefix' => 'inventory'], function(){
    Route::get('/create', 'InventoryController@create')->name('inventory.create');
    Route::get('/',       'InventoryController@index')->name('inventory.index');
    Route::post('/',      'InventoryController@store')->name('inventory.store');
});


