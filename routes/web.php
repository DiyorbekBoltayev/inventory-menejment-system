<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    CategoryController,
    ProductController,
    GudangController,
    InventoryController,
    TahlilController,
};
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

Route::resource('/', ProductController::class);

// Route::get('/category', function () {
//     return view('category/index');
// });

// Category
Route::resource('category', CategoryController::class);

// Product
Route::resource('product', ProductController::class);

// Gudang
Route::resource('warehouse', GudangController::class);

// Inventory
Route::resource('inventory', InventoryController::class);
//Tahlil
Route::get('/tahlil',[TahlilController::class,'index'])->name('tahlil');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
