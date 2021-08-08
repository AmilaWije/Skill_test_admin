<?php

use App\Http\Controllers\Region\RegionController as RC;
use App\Http\Controllers\Territory\TerritoryController as TC;
use App\Http\Controllers\Zone\ZonesController as ZC;
use App\Http\Controllers\Users\UserController as UC;
use App\Http\Controllers\Item\ItemController as IC;
use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('Pages.Dashboard.index');
})->name('dashboard');

Route::prefix('dashboard')->group(function () {
    //Region section
    Route::resource('regions', RC::class);
    Route::get('/region/delete/{id}', [RC::class, "delete"])->name('region.delete');

    //Territory section
    Route::resource('teritories', TC::class);
    Route::get('/territory/delete/{id}', [TC::class, "delete"])->name('territory.delete');

    //Zone section
    Route::resource('zones', ZC::class);
    Route::get('/zone/delete/{id}', [ZC::class, "delete"])->name('zone.delete');

    //User section
    Route::resource('users', UC::class);
    Route::get('/customer/delete/{id}', [UC::class, "delete"])->name('customer.delete');

    //SKU section
    Route::resource('items', IC::class);
    Route::get('/sku/delete/{id}', [IC::class, "delete"])->name('item.delete');
});