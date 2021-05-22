<?php
use App\Http\Controllers\praktikum1;
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
    return view('home0149');
});
Route::get('/home0149', [praktikum1::class, 'home']);
Route::get('/artikel0149', [praktikum1::class, 'url']);
Route::get('/contactus0149', [praktikum1::class, 'contact']);

