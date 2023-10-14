<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return 'i`m developer';
});
Route::get('/about', 'AboutController@index')->name('about.index');
Route::get('/contacts', 'ContactsController@index')->name('contact.index');

Route::group(['namespace' => 'Income'], function () {
//income actions
    Route::get('/income', 'IndexController')->name('income.index');
    Route::post('/income', 'StoreController')->name('income.store');
    Route::get('/income/create', 'CreateController')->name('income.create');
    Route::get('/income/{income}', 'ShowController')->name('income.show');
    Route::get('/income/{income}/edit', 'EditController')->name('income.edit');
    Route::patch('/income/{income}', 'UpdateController')->name('income.update');
    Route::delete('/income/{income}', 'DestroyController')->name('income.delete');
});



Route::get('/income/update', 'IncomeController@update');
Route::get('/income/delete', 'IncomeController@delete');
Route::get('/income/firstOrCreate', 'IncomeController@firstOrCreate');

Route::get('/expense', 'ExpenseController@index');

Route::get('/balance', 'BalanceController@index');
