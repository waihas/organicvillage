<?php

use App\Http\Controllers\Admin\DashboardController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('admin', [DashboardController::class, 'home'])
    ->name('dashboard.home');

Route::get('{path}', function () {
    return view('welcome');
})->where('path', '(.*)');

// Route::get('/{any}', function () {
//     return view('vue');
// })->where('any', '.*');
