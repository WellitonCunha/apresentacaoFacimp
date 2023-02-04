<?php

use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\v1\ContasWhatsappController;
use App\Http\Controllers\Api\v1\SendEmailController;
use App\Http\Controllers\Api\v1\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Repository\Mail\MailRepository;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/login', [AuthController::class, 'login'])->name('api.login');
Route::prefix('category')->group(function(){
    Route::get('/index', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/show/{id}', [CategoryController::class, 'show'])->name('category.show');
    Route::post('/store', [CategoryController::class, 'store'])->name('category.store');
    Route::put('/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/destroy/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
});

Route::prefix('contact')->group(function(){
    Route::get('/index', [ContactController::class, 'index'])->name('contact.index');
    Route::get('/show/{id}', [ContactController::class, 'show'])->name('contact.show');
    Route::post('/store', [ContactController::class, 'store'])->name('contact.store');
    Route::put('/update/{id}', [ContactController::class, 'update'])->name('contact.update');
    Route::delete('/destroy/{id}', [ContactController::class, 'destroy'])->name('contact.destroy');
});

