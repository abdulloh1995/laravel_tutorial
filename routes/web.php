<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return 'i`m developer';
});
Route::get('/about', 'AboutController@index')->name('about.index');
Route::get('/contacts', 'ContactsController@index')->name('contact.index');

//income actions
Route::get('/income', 'IncomeController@index')->name('income.index');
Route::post('/income', 'IncomeController@store')->name('income.store');
Route::get('/income/create', 'IncomeController@create')->name('income.create');
Route::get('/income/{income}', 'IncomeController@show')->name('income.show');
Route::get('/income/{income}/edit', 'IncomeController@edit')->name('income.edit');
Route::patch('/income/{income}', 'IncomeController@update')->name('income.update');
Route::delete('/income/{income}', 'IncomeController@destroy')->name('income.delete');

Route::get('/income/update', 'IncomeController@update');
Route::get('/income/delete', 'IncomeController@delete');
Route::get('/income/firstOrCreate', 'IncomeController@firstOrCreate');

Route::get('/expense', 'ExpenseController@index');

Route::get('/balance', 'BalanceController@index');
