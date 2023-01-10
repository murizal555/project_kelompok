<?php

// use App\Models\Hotel;
use App\Http\Controllers\Dmax;
use App\Http\Controllers\Home;
use App\Http\Controllers\Raja;
use App\Http\Controllers\About;
use App\Http\Controllers\User;
use App\Http\Controllers\Hotel;
// use App\Http\Controllers\Queen;
use App\Http\Controllers\Queen;
use App\Http\Controllers\Detail;
use App\Http\Controllers\Garden;
use App\Http\Controllers\Kontak;
use App\Http\Controllers\Manage;
use App\Http\Controllers\atm;
use App\Http\Controllers\transaksi;

// use App\Http\views
use App\Http\Controllers\BookingController;
use App\Http\Controllers\User as ControllersUser;
// use App\Models\User;
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
    return view('welcome');
});

// Route::resource('/register', User::class);
Route::resource('/login', User::class);
Route::resource('/registrasi', registrasi::class);
Route::resource('/hotel', Hotel::class);
Route::resource('/detail', Detail::class);
Route::resource('/transaksi', transaksi::class);
Route::resource('/atm', atm::class);
Route::resource('/about', About::class);
Route::resource('/manage', Manage::class);
Route::resource('/kontak', Kontak::class);
Route::resource('/raja', Raja::class);
Route::get('/show', [show::class]);
Route::PUT('/ubah/{id}', [BookingController::class, 'ubah'])->name('ubah');
Route::get('/delete/{id}', [BookingController::class, 'destroy'])->name('destroy');
Route::get('/edit/{id}', [BookingController::class, 'edit'])->name('edit');
Route::resource('/queen', Queen::class);
Route::resource('/d_max', Dmax::class);
// Route::post('/register/basic/create', 'RegisterController@create')->name('register');
Route::resource('/garden', Garden::class);
Route::resource('/booking', BookingController::class);
Route::resource('/contoh', ContohController::class);
Route::post('auth', [ControllersUser::class, 'auth'])->name('auth');
