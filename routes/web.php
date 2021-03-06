<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManFashionController;
use App\Http\Controllers\WomenFashionController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LifeStyleController;

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

Route::get('/', [HomeController::class, 'index'])->name('Home.index');

Route::get('/man', [ManFashionController::class, 'index'])->name('ManFashion.index');
Route::get('/woman', [WomenFashionController::class, 'index'])->name('WomenFashion.index');
Route::get('/lifestyles', [LifeStyleController::class, 'index'])->name('LifeStyles.index');

Route::get('/login', [LoginController::class, 'index'])->name('Login.index');
Route::post('/login', [LoginController::class, 'verify']);

Route::group(['middleware'=>['verifysession']], function(){
    Route::get('/admin', [AdminHomeController::class, 'index'])->name('AdminHome.index');
    Route::post('/validate-ajax', [AdminHomeController::class, 'validateSerialName']);
    Route::post('/addSerial', [AdminHomeController::class, 'addSerialName'])->name('AdminHome.addSerial');
    Route::get('/addproduct', [AdminProductController::class, 'addProduct'])->name('AdminProduct.addProduct');
});

