<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\laravel_example\UserManagement;


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

$controller_path = 'App\Http\Controllers';

// ** Sekolah
Route::get('/', $controller_path . '\Index@index')->name('index');
Route::get('/sekolah/informasi', $controller_path . '\sekolah\Informasi@index')->name('sekolah-informasi');
Route::get('/sekolah/data-guru', $controller_path . '\sekolah\DataGuru@index')->name('sekolah-data-guru');
Route::get('/sekolah/sejarah', $controller_path . '\sekolah\Sejarah@index')->name('sekolah-sejarah');
Route::get('/sekolah/jurusan', $controller_path . '\sekolah\Jurusan@index')->name('sekolah-jurusan');

// ** Siswa
Route::get('/siswa/data-siswa', $controller_path . '\siswa\DataSiswa@index')->name('siswa-data-siswa');
Route::get('/siswa/data-nilai', $controller_path . '\siswa\DataNilai@index')->name('siswa-data-nilai');
Route::get('/siswa/kelas', $controller_path . '\siswa\Kelas@index')->name('siswa-kelas');


// ** Pembayaran
Route::get('/pembayaran/spp', $controller_path . '\pembayaran\Spp@index')->name('pembayaran-spp');
Route::get('/pembayaran/tabungan', $controller_path . '\pembayaran\TabunganSiswa@index')->name('pembayaran-tabungan');



// locale
Route::get('lang/{locale}', $controller_path . '\language\LanguageController@swap');

// laravel example
Route::get('/laravel/user-management', [UserManagement::class, 'UserManagement'])->name('laravel-example-user-management');
Route::resource('/user-list', UserManagement::class);
