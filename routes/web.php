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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about/{search}', function () {
$data = [
    'pageTitle' => 'Tentang Kami',
    'content' => 'Ini adalah halaman tentang kami.'
];
return view('about', $data);
});

Route ::get('/produk', 'App\Http\Controllers\ProdukController@index');