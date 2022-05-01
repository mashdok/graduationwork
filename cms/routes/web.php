<?php

use Illuminate\Support\Facades\Route;

use App\Models\Store;
use App\Models\Sku_master;
use App\Models\User;

use Illuminate\Http\Request;

use App\Http\Controllers\StoresController;
use App\Http\Controllers\Sku_mastersController;
use App\Http\Controllers\CartsController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\HomeController;

// 【Storeモデルに対するルーティング】
// information.phpにPOSTで取得した$storesのデータをまるまる転送した上で、information.phpを表示
// Route::get('/', [StoresController::class, 'index']);



//URL:storeにPOSTされた情報を一旦$requestに格納し、Storeモデルに登録
// Route::post('/stores', [StoresController::class, 'store']);


//店舗情報の更新画面を表示
// Route::get('/storesedit/{store_id}', [StoresController::class, 'edit']);


//店舗情報の更新処理
// Route::post('/stores/update', [StoresController::class, 'update']);


//店舗情報を削除
// Route::delete('/stores/{store_id}', [StoresController::class, 'destroy']);


//【Sku_masterモデルに対するルーティング】
Route::get('/market', [Sku_mastersController::class, 'index']);

//【marketからsessionに送るルーティング】
// Route::post('/addcart/{sku_id}', [CartsController::class, 'addCart']);

// Route::get('/cart_content}', [CartsController::class, 'index']);



// Route::get('/sku_info/{sku_id}', [CartsController::class, 'show']);



// 【Indexぺージへのルート】
Route::get('/index', [IndexController::class, 'index']);

//【ログイン用】
Route::get('/', function () {
    return view('auth.login');
});

//【登録画面用】
Route::get('/register', function () {
    return view('auth.register');
});

//【トップ画面用】
Route::get('/index', function () {
    return view('index');
});

// 【マイページ用】
Route::get('/account', function () {
    return view('account');
});

// 【マイページ用】
Route::get('/cart', function () {
    return view('cart');
});

// // 【注文内容確認用】
Route::get('/confirmation', function () {
    return view('confirmation');
});

// 【注文完了画面用】
Route::get('/checkout', function () {
    return view('checkout');
});

// 【見積表示画面】
Route::get('/quotation', function () {
    return view('quotation');
});

Route::get('/welcome', function () {
    return view('welcome');
});


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// 【ログイン画面】
// Route::get('/', function () {
//     return view('login');
// });

// カート機能実装【DK作業中パート】
// Route::prefix('cart')->middleware('auth:users')->group(function(){
//         Route::get('/', [CartController::class, 'index'])->name('cart.index');
//         Route::post('add', [CartController::class, 'add'])->name('cart.add');   
//         Route::post('delete/{item}', [CartController::class, 'delete'])->name('cart.delete');
//         Route::get('checkout', [CartController::class, 'checkout'])->name('cart.checkout');
//         Route::get('success', [CartController::class, 'success'])->name('cart.success');
//         Route::get('cancel', [CartController::class, 'cancel'])->name('cart.cancel');
// });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
