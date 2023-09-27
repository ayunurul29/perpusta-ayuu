<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PenulisController;
use App\Http\Controllers\PenerbitController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });

// LOGIN
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

//REGISTER
Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//template
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('kategori-grafik', [KategoriController::class, 'grafik'])->name('kategori-grafik');

//BUKU
Route::get('/buku', [BukuController::class, 'index'])->name('buku_index');
Route::get('/buku/create', [BukuController::class, 'create'])->name('buku_create');
Route::post('/buku/store', [BukuController::class, 'store'])->name('buku_store');
Route::post('/buku/show', [BukuController::class, 'show'])->name('buku_show');


Route::get('/buku/edit/{id}', [BukuController::class, 'edit'])->name('buku_edit');
Route::get('/buku/show/{id}', [BukuController::class, 'show'])->name('buku_show');

Route::post('/buku/update/{buku}', [BukuController::class, 'update'])->name('buku_update');
Route::post('/buku/destroy/{buku}', [BukuController::class, 'destroy'])->name('buku_destroy');
Route::get('buku/search', [BukuController::class, 'search'])->name('buku_search');
Route::get('generate-pdf', [BukuController::class, 'generatePDF'])->name('generate-pdf');
Route::get('export-excel', [BukuController::class, 'excel'])->name('export-excel');

//KATEGORI
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori_index');
Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori_create');
Route::post('/kategori/store', [KategoriController::class, 'store'])->name('kategori_store');

Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit'])->name('kategori_edit');
Route::post('/kategori/update/{kategori}', [KategoriController::class, 'update'])->name('kategori_update');
Route::post('/kategori/destroy/{kategori}', [KategoriController::class, 'destroy'])->name('kategori_destroy');

Route::get('kategori/search', [KategoriController::class, 'search'])->name('kategori_search');
 Route::get('kategori-pdf', [KategoriController::class, 'generatePDF'])->name('generate-pdf');
 Route::get('kategori-excel', [KategoriController::class, 'excel'])->name('kategori-excel');


 //PEMINJAMAN
Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman_index');
Route::get('/peminjaman/create', [PeminjamanController::class, 'create'])->name('peminjaman_create');
Route::post('/peminjaman/store', [PeminjamanController::class, 'store'])->name('peminjaman_store');
Route::post('/peminjaman/show', [PeminjamanController::class, 'show'])->name('peminjaman_show');

Route::get('/peminjaman/edit/{id}', [PeminjamanController::class, 'edit'])->name('peminjaman_edit');
Route::post('/peminjaman/update/{peminjaman}', [PeminjamanController::class, 'update'])->name('peminjaman_update');
Route::post('/peminjaman/destroy/{peminjaman}', [PeminjamanController::class, 'destroy'])->name('peminjaman_destroy');

Route::get('peminjaman/search', [KategoriController::class, 'search'])->name('peminjaman_search');
Route::get('/peminjaman/show/{id}', [PeminjamanController::class, 'show'])->name('peminjaman_show');
Route::get('peminjaman/search', [PeminjamanController::class, 'search'])->name('peminjaman_search');
Route::get('peminjaman-pdf', [PeminjamanController::class, 'generatePDF'])->name('generate-pdf');
Route::get('peminjaman-excel', [PeminjamanController::class, 'excel'])->name('peminjaman-excel');

 
 //PENULIS
Route::get('/penulis', [PenulisController::class, 'index'])->name('penulis_index');
Route::get('/penulis/create', [PenulisController::class, 'create'])->name('penulis_create');
Route::post('/penulis/store', [PenulisController::class, 'store'])->name('penulis_store');
Route::post('/penulis/show', [PenulisController::class, 'show'])->name('penulis_show');

Route::get('/penulis/edit/{id}', [PenulisController::class, 'edit'])->name('penulis_edit');
Route::post('/penulis/update/{penulis}', [PenulisController::class, 'update'])->name('penulis_update');
Route::post('/penulis/destroy/{penulis}', [PenulisController::class, 'destroy'])->name('penulis_destroy');
Route::get('/penulis/show/{id}', [PenulisController::class, 'show'])->name('penulis_show');

Route::get('penullis/search', [PenulisController::class, 'search'])->name('penulis_search');
 Route::get('penulis-pdf', [PenulisController::class, 'generatePDF'])->name('generate-pdf');
Route::get('penulis-excel', [PenulisController::class, 'excel'])->name('penulis-excel');

 //PENERBIT
Route::get('/penerbit', [PenerbitController::class, 'index'])->name('penerbit_index');
Route::get('/penerbit/create', [PenerbitController::class, 'create'])->name('penerbit_create');
Route::post('/penerbit/store', [PenerbitController::class, 'store'])->name('penerbit_store');
Route::post('/penerbit/show', [PenerbitController::class, 'show'])->name('penerbit_show');

Route::get('/penerbit/edit/{id}', [PenerbitController::class, 'edit'])->name('penerbit_edit');
Route::post('/penerbit/update/{penerbit}', [PenerbitController::class, 'update'])->name('penerbit_update');
Route::post('/penerbit/destroy/{penerbit}', [PenerbitController::class, 'destroy'])->name('penerbit_destroy');
Route::get('/penerbit/show/{id}', [PenerbitController::class, 'show'])->name('penerbit_show');

Route::get('penerbit/search', [PenerbitController::class, 'search'])->name('penerbit_search');
 Route::get('penerbit-pdf', [PenerbitController::class, 'generatePDF'])->name('generate-pdf');
Route::get('penerbit-excel', [PenerbitController::class, 'excel'])->name('penerbit-excel');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])
        ->name('dashboard');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
