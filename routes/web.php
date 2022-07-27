<?php

use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
// use App\Http\Controllers\Admin\ProductController as AdminProduct;
// use App\Http\Controllers\Admin\OrderController as AdminOrder;
// use App\Http\Controllers\Admin\GammeController as AdminGamme;
// use App\Http\Controllers\Admin\CouponController as AdminCoupon;
// use App\Http\Controllers\Admin\AuthController as AdminAuth;

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

// Route::group(['prefix'  =>  'admin'], function () {

//     Route::get('/login', [AdminAuth::class, 'showLoginForm'])
//         ->name('admin.login');
//     Route::post('login', [AdminAuth::class, 'login'])
//         ->name('admin.login.post');
//     Route::get('login', function () {
//             abort(404);
//     });

//     Route::group(['middleware' => ['auth:admin']], function () {

//         Route::get('/', [AdminDashboard::class, 'index'])
//         ->name('admin.dashboard.index');

//         Route::get('logout', [AdminLogin::class, 'logout'])
//         ->name('admin.logout');

//         Route::group(['prefix'  =>   'gammes'], function() {
//             Route::get('/', [AdminGamme::class, 'index'])
//                 ->name('admin.gammes.index');
//             Route::get('/create', [AdminGamme::class, 'create'])
//                 ->name('admin.gammes.create');
//             Route::post('/store', [AdminGamme::class, 'store'])
//                 ->name('admin.gammes.store');
//             Route::get('/{id}/edit', [AdminGamme::class, 'edit'])
//                 ->name('admin.gammes.edit');
//             Route::post('/update', [AdminGamme::class, 'update'])
//                 ->name('admin.gammes.update');
//             Route::get('/{id}/delete', [AdminGamme::class, 'destroy'])
//                 ->name('admin.gammes.delete');
//         });

//         Route::group(['prefix'  =>   'products'], function() {
//             Route::get('/', [AdminProduct::class, 'index'])
//                 ->name('admin.products.index');
//             Route::get('/create', [AdminProduct::class, 'create'])
//                 ->name('admin.products.create');
//             Route::post('/store', [AdminProduct::class, 'store'])
//                 ->name('admin.products.store');
//             Route::get('/{id}/edit', [AdminProduct::class, 'edit'])
//                 ->name('admin.products.edit');
//             Route::post('/update', [AdminProduct::class, 'update'])
//                 ->name('admin.products.update');
//             Route::get('/{id}/delete', [AdminProduct::class, 'destroy'])
//                 ->name('admin.products.delete');
//         });

//         Route::group(['prefix'  =>   'coupons'], function() {
//             Route::get('/', [AdminCoupon::class, 'index'])
//                 ->name('admin.coupons.index');
//             Route::get('/create', [AdminCoupon::class, 'create'])
//                 ->name('admin.coupons.create');
//             Route::post('/store', [AdminCoupon::class, 'store'])
//                 ->name('admin.coupons.store');
//             Route::get('/{id}/edit', [AdminCoupon::class, 'edit'])
//                 ->name('admin.coupons.edit');
//             Route::post('/update', [AdminCoupon::class, 'update'])
//                 ->name('admin.coupons.update');
//             Route::get('/{id}/delete', [AdminCoupon::class, 'destroy'])
//                 ->name('admin.coupons.delete');
//         });

//         Route::group(['prefix'  =>   'orders'], function() {
//             Route::get('/', [AdminOrder::class, 'index'])
//                 ->name('admin.orders.index');
//             Route::get('/{id}/show', [AdminOrder::class, 'show'])
//                 ->name('admin.orders.show');
//             Route::get('/{id}/delete', [AdminOrder::class, 'destroy'])
//                 ->name('admin.orders.delete');
//         });
//     });
// });

Route::get('{path}', function () {
    return view('welcome');
})->where('path', '(.*)');

// Route::get('/{any}', function () {
//     return view('vue');
// })->where('any', '.*');
