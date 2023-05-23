<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\WelcomeController;

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


Route::get('/body', function () {
    return view('body');
});

/* 
Route::get('/login', function () {
    return view('admin/index');
}); 

Route::get('/home', function () {
    return view('admin/home');
});

Route::get('/berita', function () {
    return view('admin.berita');
});

*/

Route::get('/beranda', function () {
    return view('admin/beranda');
});



Route::get('/profil', function () {
    return view('profil');
});

Route::get('/visimisi', function () {
    return view('visimisi');
});

Route::get('/sejarah', function () {
    return view('sejarah');
});

Route::get('/pengajar', function () {
    return view('pengajar');
});

Route::get('/perbankan', function () {
    return view('perbankan');
});

Route::get('/mks', function () {
    return view('mks');
});

Route::get('/sementara', function () {
    return view('sementara');
});

Route::get('/kalender', function () {
    return view('kalender');
});

Route::get('/kurikulum', function () {
    return view('kurikulum');
});

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [WelcomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'index'])->middleware('auth');


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

/* Admin Berita */

Route::get('/berita_i', [BeritaController::class, 'index']);
Route::get('/berita_c', [BeritaController::class, 'create']);
Route::post('/berita_c', [BeritaController::class, 'store']);
Route::get('/berita_i/{id}', [BeritaController::class, 'destroy'])->name('berita.delete');
Route::get('/berita_e/{id}', [BeritaController::class, 'edit'])->name('berita.edit');
Route::post('/berita_u/{id}', [BeritaController::class, 'update'])->name('berita.update');
Route::get('/berita_s/{id}', [BeritaController::class, 'show'])->name('berita.show');

/* Admin Pengumuman */
Route::resource('/admin/pengumuman', PengumumanController::class);


