<?php

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
//     return view('front/welcome');
// Route::get('/booking', function () {
//   return view('front/order');
// });
// });
// Route::get('/admin', function () {
//     return view('back/login');
// });
// Route::get('/dashboard', function () {
//     return view('back/dashboard');
// });
 // Route::get('/chart', function () {
 //     return view('back/chart');
 // });
 // Route::get('/pegawai', function () {
 //     return view('back/pegawai');
 // });
 // Route::get('/pesan', function () {
 //     return view('back/pesan');
 // });
 // Route::get('/tambah', function () {
 //     return view('back/tambah');
 //  });
  Route::get('/update', function () {
      return view('back/update');
   });

Route::get('/', 'Controller@index');
Route::get('/admin', 'LoginController@show');
Route::post('/dashboard', 'LoginController@store');
Route::get('/dashboard', 'AdminController@index');
Route::get('/chart', 'ChartController@index');
Route::get('/pegawai', 'PegawaiController@index');
Route::get('/pegawai/tambah', 'PegawaiController@create');
Route::post('/pegawai', 'PegawaiController@store');
Route::delete('/pegawai', 'PegawaiController@destroy');
Route::get('/pesan', 'PesananController@index');
Route::get('/pesan/{pesan}', 'PesananController@edit');
Route::patch('/pesan', 'PesananController@update');
Route::delete('/pesan', 'PesananController@destroy');
Route::post('/member', 'LoginController@store');
Route::get('/member/{id_peg}', 'MemberController@show');
Route::get('/member/{id_peg}/update', 'MemberController@edit');
Route::patch('/member/{id_peg}', 'MemberController@update');
Route::get('/{data}', 'Controller@tampil');
Route::post('/', 'Controller@store');
