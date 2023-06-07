<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\JenisController;

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
    return view('kelolakuy');
});

Route::get('/login', function () {
    return view('auth.login');
});

Auth::routes();

/*-----------------------------------------
-------------------------------------------
All Normal Users Routes List
-------------------------------------------
-------------------------------------------*/

Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
  
/*-----------------------------------------
-------------------------------------------
All Admin Routes List
-------------------------------------------
-------------------------------------------*/

Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/kelolakuylog', [HomeController::class, 'landingPageLog'])->name('kelolakuylog');
});


Route::resource('kategori', KategoriController::class);

Route::resource('jenis', JenisController::class);

