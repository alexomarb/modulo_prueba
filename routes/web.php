<?php

use Illuminate\Support\Facades\Route;
use Tabuna\Breadcrumbs\Trail;

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
/*
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
*/
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard')
        ->breadcrumbs(fn (Trail $trail) =>
            $trail->push('welcome1', route('dashboard'))
    );
});


Route::get('/dashboard/pru', function () {
    return view('dashboard');
})->name('dashboardp')
->breadcrumbs(fn (Trail $trail) =>
    $trail->parent('dashboard')
    ->push('tempo', route('dashboardp'))
);