<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\NationalityController;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\RemittanceCommissionRatesController;
use App\Http\Controllers\SenderController;
use App\Http\Controllers\SubAccountController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('country',     CountryController::class);
Route::resource('account',     AccountController::class);
Route::resource('sub-account', SubAccountController::class);
Route::resource('sender',      SenderController::class);
Route::resource('province',    ProvinceController::class);
Route::resource('nationality', NationalityController::class);
Route::resource('currency',    CurrencyController::class);
Route::resource('destination', DestinationController::class);
Route::resource('remittance-commission-rates', RemittanceCommissionRatesController::class);


// TODO: Write api documentation for Remittance Commission Rates controller

