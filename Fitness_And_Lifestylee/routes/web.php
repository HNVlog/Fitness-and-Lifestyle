<?php
use App\Http\Controllers\Front;
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

Route::get('/', [Front\HomeController::class, 'index']);
Route::get('/about', [Front\AboutController::class, 'index']);
Route::get('/classes', [Front\ClassesController::class, 'index']);
Route::get('/blog', [Front\BlogController::class, 'index']);
Route::get('/search', [Front\BlogController::class, 'index']);
Route::post('/search', [Front\BlogController::class, 'index'])->name('search');
Route::get('/pricing', [Front\PricingController::class, 'pricing']);
Route::get('/{categoryName}', [Front\BlogController::class, 'category']);
