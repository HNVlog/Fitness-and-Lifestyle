<?php
use App\Http\Controllers\Front;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
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

//    Admin
Route::prefix('ad')->group(function (){
    Route::get('/', function () {
        return view('admin.index');
    })->name('admin');

    Route::prefix('account')->group(function (){
        Route::get('/',[Admin\AccountController::class,'index']);
        Route::get('/delete/{id}',[Admin\AccountController::class,'delete']);
    });
    Route::prefix('blog')->group(function (){
        Route::get('/',[Admin\BlogController::class,'index']);
        Route::prefix('/add')->group(function(){
            Route::get('/',[Admin\BlogController::class,'blogadd']);
            Route::post('/',[Admin\BlogController::class,'createnew']);

        });
        Route::get('/delete/{id}',[Admin\BlogController::class,'delete']);
        Route::get('/{id}',[Admin\BlogController::class,'details']);

    });

    Route::prefix('classes')->group(function (){
        Route::get('/',[Admin\ClassesController::class,'index']);
        Route::prefix('/add')->group(function(){
            Route::get('/',[Admin\ClassesController::class,'classesadd']);
            Route::post('/',[Admin\ClassesController::class,'createnew']);

        });
        Route::get('/delete/{id}',[Admin\ClassesController::class,'delete']);
        Route::get('/{id}',[Admin\ClassesController::class,'details']);
    });
    Route::prefix('comment')->group(function (){
        Route::get('/',[Admin\CommentController::class,'index']);
        Route::get('/delete/{id}',[Admin\CommentController::class,'delete']);
        Route::get('/{id}',[Admin\CommentController::class,'details']);
    });
    Route::prefix('login')->group(function (){
        Route::get('/',[Admin\LoginController::class,'index'])->name('login');
        Route::post('/',[Admin\LoginController::class,'postLogin']);
    });
    Route::prefix('register')->group(function (){
        Route::get('/',[Admin\RegisterController::class,'index'])->name('register');
        Route::post('/',[Admin\RegisterController::class,'postRegister']);
    });
    Route::get('/logout', '\App\Http\Controllers\Admin\LoginController@logout');
});



//user
Route::get('/', [Front\HomeController::class, 'index']);
Route::get('/about', [Front\AboutController::class, 'index']);
Route::get('/classes', [Front\ClassesController::class, 'index']);
Route::get('/blog', [Front\BlogController::class, 'index']);
Route::get('/blog/{id}', [Front\BlogDetailController::class, 'show']);
Route::post('/blog/{id}', [Front\BlogDetailController::class, 'postComment']);
Route::get('/search', [Front\BlogController::class, 'index']);
Route::post('/search', [Front\BlogController::class, 'index'])->name('search');
Route::get('/pricing', [Front\PricingController::class, 'pricing']);
Route::get('/faq', [Front\FaqController::class, 'faq']);
Route::get('/contact', [Front\ContactController::class, 'contact']);

Route::prefix('account')->group(function () {
    Route::get('/',[Front\AccountController::class,'index']);
});

Route::put('/update1',[Front\AccountController::class,'update1']);
Route::put('/update2',[Front\AccountController::class,'update2']);

Route::middleware(['auth'])->group(function (){
});
Route::get('/',[Front\HomeController::class,'index'])->name('home');
Route::prefix('login')->group(function (){
    Route::get('/',[Front\LoginController::class,'index'])->name('login');
    Route::post('/',[Front\LoginController::class,'postLogin']);
});
Route::prefix('register')->group(function (){
    Route::get('/',[Front\RegisterController::class,'index'])->name('register');
    Route::post('/',[Front\RegisterController::class,'postRegister']);
});
Route::get('/logout', '\App\Http\Controllers\Front\LoginController@logout');
Route::get('/your_course', [Front\YourCourseController::class, 'index']);
Route::get('/check_out', [Front\CheckOutController::class, 'index']);
Route::prefix('cart')->group(function (){
    Route::get('add/{id}',[Front\CartController::class,'add']);
    Route::get('/', [Front\CartController::class, 'index']);
    Route::get('delete/{rowId}',[Front\CartController::class,'delete']);
    Route::get('/destroy',[Front\CartController::class,'destroy']);
    Route::get('/update',[Front\CartController::class,'update']);
});
Route::prefix('checkout')->group(function () {
    Route::get('/',[Front\CheckOutController::class,'index'])->name('checkout');
    Route::post('/',[Front\CheckOutController::class,'addOrder']);
});
Route::get('/{categoryName}', [Front\BlogController::class, 'category']);
Route::get('/classes/{id}', [Front\ClassesDetailController::class, 'show']);
Route::post('/classes/{id}', [Front\ClassesDetailController::class, 'postComment'])->name('postComment');



