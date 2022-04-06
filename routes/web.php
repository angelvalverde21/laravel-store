<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
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


//Route::middleware(['auth:sanctum', 'verified'])->get('/productos', Product::class)->name('productos');
// Route::get('/productos', [ProductController::class, 'index'])->name('productos.index');
// Route::get('/productos/{id}', [ProductController::class, 'show'])->name('productos.show');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



// //User
// Route::middleware(['auth:sanctum', 'verified'])->get('/user', function () {
//     return view('user.dashboard');
// })->name('user');

// Route::middleware(['auth:sanctum', 'verified'])->get('/user/fotografias', function () {
//     return view('user.photografies');
// })->name('user.photografies'); //el name se usa en los links con la variable {{ router() }}


// Route::middleware(['auth:sanctum', 'verified'])->get('/user/productos', function () {
//     return view('user.products');
// })->name('user.products');