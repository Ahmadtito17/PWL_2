<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HobiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KeluargaController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\MatkulController;
use App\Http\Controllers\PengalamanKuliahController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();
Route::get('/logout', [LoginController::class, 'logout']);

Route::middleware(['auth'])->group(function() {
    // Route::get('/', function () {
    //     echo "Selamat Datang";
    // });

    // Route::get('/about', function () {
    //     echo "NIM: 2141720265, Nama: Ahmad Tito Nur Hendrawan";
    // });

    // Route::get('/articles/{id}', function ($id) {
    //     echo "Halaman Artikel dengan ID $id";
    // });

    // Route::get('/', [PageController::class, 'index']);

    // Route::get('/about', [PageController::class, 'about']);

    // Route::get('/articles/{id}', [PageController::class, 'articles']);

    // Route::get('/', [HomeController::class, 'index']);

    // Route::get('/about', [AboutController::class, 'index']);

    // Route::get('/articles/{id}', [ArticleController::class, 'index']);

    // //Minggu 2

    // Route::get('/', function () {
    //     return "Halaman Home <br>
    //             Menampilkan halaman awal website";
    // });

    // Route::prefix('category')->group(function () {
    //     Route::get('/', function () {
    //         return 'Halaman Products <br>
    //             Menampilkan daftar product ( route prefix) <br>
    //             <a href="https://www.educastudio.com/category/marbel-edu-games">https://www.educastudio.com/category/marbel-edu-games</a> <br>
    //             <a href="https://www.educastudio.com/category/marbel-and-friends-kids-games">https://www.educastudio.com/category/marbel-and-friends-kids-games</a> <br>
    //             <a href="https://www.educastudio.com/category/riri-story-books">https://www.educastudio.com/category/riri-story-books</a> <br>
    //             <a href="https://www.educastudio.com/category/kolak-kids-songs">https://www.educastudio.com/category/kolak-kids-songs</a>';
    //     });
    //     Route::get('/marbel-edu-games', function () {
    //         return '<a href="https://www.educastudio.com/category/marbel-edu-games">https://www.educastudio.com/category/marbel-edu-games</a>';
    //     });
    //     Route::get('/marbel-and-friends-kids-games', function () {
    //         return '<a href="https://www.educastudio.com/category/marbel-and-friends-kids-games">https://www.educastudio.com/category/marbel-and-friends-kids-games</a>';
    //     });
    //     Route::get('/riri-story-books', function () {
    //         return '<a href="https://www.educastudio.com/category/riri-story-books">https://www.educastudio.com/category/riri-story-books</a>';
    //     });
    //     Route::get('/kolak-kids-songs', function () {
    //         return '<a href="https://www.educastudio.com/category/kolak-kids-songs">https://www.educastudio.com/category/kolak-kids-songs</a>';
    //     });
    // });

    // Route::get('/articles/{id}', function ($id) {
    //     return 'Halaman News <br>
    //         Menampilkan Daftar berita (route param) <br>
    //         <a href="https://www.educastudio.com/news">https://www.educastudio.com/news</a> <br>
    //         <a href="https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19">https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19</a>';
    // });

    // Route::prefix('program')->group(function () {
    //     Route::get('/', function () {
    //         return 'Halaman Program <br>
    //             Menampilkan Daftar Program (route prefix) <br>
    //             <a href="https://www.educastudio.com/program/karir">https://www.educastudio.com/program/karir</a> <br>
    //             <a href="https://www.educastudio.com/program/magang">https://www.educastudio.com/program/magang</a> <br>
    //             <a href="https://www.educastudio.com/program/kunjungan-industri">https://www.educastudio.com/program/kunjungan-industri</a>';
    //     });
    //     Route::get('/karir', function () {
    //         return '<a href="https://www.educastudio.com/program/karir">https://www.educastudio.com/program/karir</a>';
    //     });
    //     Route::get('/magang', function () {
    //         return '<a href="https://www.educastudio.com/program/magang">https://www.educastudio.com/program/magang</a>';
    //     });
    //     Route::get('/kunjungan-industri', function () {
    //         return '<a href="https://www.educastudio.com/program/kunjungan-industri">https://www.educastudio.com/program/kunjungan-industri</a>';
    //     });
    // });

    // Route::get('/about-us', function () {
    //     return 'Halaman About Us <br>
    //         Menampilkan About Us (route biasa) <br>
    //         <a href="https://www.educastudio.com/about-us">https://www.educastudio.com/about-us</a>';
    // });

    // Route::resource('contact-us', TugasController::class)->only(['index']);

    // //Minggu 3
    // Route::get('/', [WebController::class, 'home']);

    // Route::prefix('/product')->group( function(){
    //     Route::get('/', [WebController::class, 'product']);
    // });

    // Route::get('/news/{id}', [WebController::class, 'news']);

    // Route::prefix('/program')->group( function(){
    //     Route::get('/', [WebController::class, 'program']);
    // });

    Route::get('/aboutUs', [WebController::class, 'aboutUs']);

    Route::resource('/contactUs', ContactController::class);

    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/profile', [ProfileController::class, 'index']);
    Route::get('/pengalaman-kuliah', [PengalamanKuliahController::class, 'index']);

    Route::get('/kendaraan', [KendaraanController::class, 'index']);
    Route::get('/hobi', [HobiController::class, 'index']);
    Route::get('/keluarga', [KeluargaController::class, 'index']);
    Route::get('/mata-kuliah', [MatkulController::class, 'index']);

    //Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::resource('/mahasiswa', MahasiswaController::class)->parameter('mahasiswa', 'id');
    Route::post('/mahasiswa/data', [MahasiswaController::class, 'data']);
    Route::post('/mahasiswa/delete/{id}', [MahasiswaController::class, 'destroy']);

    Route::get('/mahasiswa/{id}/nilai', [MahasiswaController::class, 'nilai']);

});
