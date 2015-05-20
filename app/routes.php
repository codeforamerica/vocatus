<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::any("/","BigFormController@showFirstPage");
Route::any("/providerchoose","BigFormController@showProviderChooser");
Route::any("/finalapproval/{npi}","BigFormController@finalApproval");

