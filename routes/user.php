<?php

use App\Http\Livewire\User\Dashboard;
use App\Http\Livewire\User\Photografies\ShowPhotos;

use App\Http\Livewire\User\Products\CreateProduct;
use App\Http\Livewire\User\Products\EditProduct;
use App\Http\Livewire\User\Products\ShowAllProducts;
use Illuminate\Support\Facades\Route;



Route::get('/', Dashboard::class)->name('user');

Route::get('/products', ShowAllProducts::class)->name('user.products');
Route::get('/products/create', CreateProduct::class)->name('user.products.create');
Route::get('/products/{product}/edit', EditProduct::class)->name('user.products.edit');

Route::get('/photografies', ShowPhotos::class)->name('user.photografies');
