<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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


Route::get('/',[HomeController::class,"index"] );

Route::get('/users',[AdminController::class,"user"] );

Route::get('/deletemenu/{id}',[AdminController::class,"deletemenu"] );

Route::get('/foodmenu',[AdminController::class,"foodmenu"] );

Route::post('/uploadfood',[AdminController::class,"upload"] );

Route::get('/deleteuser/{id}',[AdminController::class,"deleteuser"] );


Route::get('/deletereservation/{id}',[AdminController::class,"deletereservation"] );

Route::get('/deleteorder/{id}',[AdminController::class,"deleteorder"] );

Route::get('/updateview/{id}',[AdminController::class,"updateview"] );

Route::post('/update/{id}',[AdminController::class,"update"] );

Route::post('/reservation',[AdminController::class,"reservation"] );

Route::get('/viewreservation',[AdminController::class,"viewreservation"] );

Route::get('/viewchef',[AdminController::class,"viewchef"] );

Route::get('/updatechef/{id}',[AdminController::class,"updatechef"] );

Route::get('/deletechef/{id}',[AdminController::class,"deletechef"] );


Route::post('/updatefoodchef/{id}',[AdminController::class,"updatefoodchef"] );

Route::get('/redirects',[HomeController::class,"redirects"] );


Route::post('/uploadchef',[AdminController::class,"uploadchef"] );

Route::post('/addcart/{id}',[HomeController::class,"addcart"] );

Route::get('/showcart/{id}',[HomeController::class,"showcart"] );

Route::get('/remove/{id}',[HomeController::class,"remove"] );


Route::get('/orders',[AdminController::class,"orders"] );

Route::get('/search',[AdminController::class,"search"] );

Route::post('/orderconfirm',[HomeController::class,"orderconfirm"] );

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
