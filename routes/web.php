<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AboutAllController;
use App\Http\Controllers\ActiveClientController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategoryOfProductController;
use App\Http\Controllers\CommitController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|-----------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
|-------------------------------------------------------------
| Login
|--------------------------------------------------------------------------
*/

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('authenticate', [AuthController::class, 'authenticate'])->name('authenticate');

/*
|----------------------------------------------------------
| Adminlar ko'raoladigan qism
|--------------------------------------------------------------------------
*/

Route::middleware(['checkRole:admin', 'auth'])->group(function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/', [HomeController::class, 'index'])->name('admin-index');
        Route::resource('/home', HomeController::class);
        Route::get('/about', [AboutController::class, 'index'])->name('about-index');
        Route::resource('/about', AboutController::class);
        Route::get('/team', [TeamController::class, 'index'])->name('team-index');
        Route::resource('/team', TeamController::class);
        Route::get('/image', [ImageController::class, 'index'])->name('image-index');
        Route::resource('/image', ImageController::class);

        Route::post('/category_of_product', [CategoryOfProductController::class, 'index'])->name('category_of_product-index');

        Route::resource('/category_of_product', CategoryOfProductController::class);

        Route::get('/commit', [CommitController::class, 'index'])->name('commit-index');
        Route::resource('/commit', CommitController::class);
        Route::get('/active_client', [ActiveClientController::class, 'index'])->name('active_client-index');
        Route::resource('/active_client', ActiveClientController::class);
        Route::get('/categories', [CategoryController::class, 'index'])->name('categories-index');
        Route::resource('/categories', CategoryController::class);
        Route::get('/contact', [ContactController::class, 'index'])->name('contact-index');
        Route::resource('/contact', ContactController::class);
        Route::get('/link', [LinkController::class, 'index'])->name('link-index');
        Route::resource('/link', LinkController::class);
        Route::get('/blog', [BlogController::class, 'index'])->name('blog-index');
        Route::resource('/blog', BlogController::class);
        Route::get('/profile', [UserController::class, 'index'])->name('user-index');
        Route::resource('/profile', UserController::class);
        Route::resource('orders', OrderController::class);
        Route::post('/orders/{order}/update-status', [OrderController::class, 'updateStatus'])->name('orders.update-status');
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    });
});


/*
|--------------------------------------------------------------------------
| Barcha foydalanuvshilar ko'raoladigan qism
|-------------------------------------------------------------
*/
Route::get('/', [MainController::class, 'index'])->name('index');

Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/blog', [MainController::class, 'blog'])->name('blog');
Route::get('/blog/{blog}', [MainController::class, 'single_blog'])->name('single_blog');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::get('/product', [MainController::class, 'product'])->name('product');
Route::get('/category', [MainController::class, 'category'])->name('category');
Route::get('/product/{product}', [MainController::class, 'products'])->name('products');

Route::post('orders.store', [OrderController::class, 'store'])->name('orders.store');
Route::get('/{lang}', function ($lang) {

    session(['lang' => $lang]);

    return back();
});
