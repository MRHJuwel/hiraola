<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CatargoiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\LogoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class,'home'])->name('home');
//shop route here
Route::get('/shop',[HomeController::class,'shop'])->name('shop');
//Route::get('/shop/to/card',[HomeController::class,'shopToCard'])->name('shop.to.card');

Route::resources(['cardUpdates' => CardController::class]);
Route::get('/shop/compare',[HomeController::class,'shopCompare'])->name('shop.compare');
Route::get('/single/product/{id}',[HomeController::class,'singleProduct'])->name('single.product');
//about us
Route::get('/about/us',[HomeController::class,'aboutUs'])->name('about.us');
//contact page
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::post('/store/contact',[HomeController::class,'storContact'])->name('store.contact');

//blog route here
Route::get('/blog',[HomeController::class,'blog'])->name('blog');
Route::get('/blog/details/{slug}',[HomeController::class,'blogDetails'])->name('blog.details');

// Visitor
Route::get('my/account',[HomeController::class,'myAccount'])->name('my.account');
Route::get('login/register',[VisitorController::class,'loginRegister'])->name('login.register');
Route::post('visitor/register',[VisitorController::class,'visitorRegister'])->name('visitor.register');
Route::post('visitor/login',[VisitorController::class,'visitorLogin'])->name('visitor.login');
Route::get('visitor/logout',[VisitorController::class,'visitorLogout'])->name('visitor.logout');
Route::post('order/percess',[VisitorController::class,'orderPercess'])->name('order.percess');

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {

    Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
    Route::resources(['catagories'=> CatargoiController::class]);
    Route::resources(['blogs'=> BlogController::class]);
    Route::resources(['shops'=> ShopController::class]);
    Route::resources(['sliders'=> SliderController::class]);
    Route::resources(['teams'=> TeamController::class]);
    Route::get('/view/contact',[DashboardController::class,'viewContact'])->name('view.contact');
    Route::get('/order/list',[DashboardController::class,'orderList'])->name('order.list');
    Route::get('/order/pending/{id}',[DashboardController::class,'pendingStatus'])->name('order.pending');


});

//Strip gatway
Route::controller(StripePaymentController::class)->group(function(){
   // Route::get('stripe', 'stripe');
    Route::get('stripe', 'stripe')->name('stripe');
    Route::post('stripe', 'stripePost')->name('stripe.post');
});
