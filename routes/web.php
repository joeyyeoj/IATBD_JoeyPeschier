<?php

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
    return redirect('/login');
});

Route::get('/dashboard', function () {
    return view('dashboard', ['user' => Auth::user()]);
})->middleware(['auth', 'blocked'])->name('dashboard');


Route::middleware(['auth', 'admin', 'blocked'])->group(function(){
    Route::post('/aanvraag/{id}/delete', [\App\Http\Controllers\AanvraagController::class, 'delete']);
    Route::post('/user/{id}/block', [\App\Http\Controllers\UserController::class, 'block']);
    Route::post('/huisdier/{id}/delete', [\App\Http\Controllers\HuisdierController::class, 'delete']);
    Route::get('/aanvragen', [\App\Http\Controllers\AanvraagController::class, 'index']);
});

Route::middleware(['auth', 'aanbieder', 'blocked'])->group(function(){
    Route::get('/huisdier/createView', [\App\Http\Controllers\HuisdierController::class, 'createView']);
    Route::post('/huisdier/create', [\App\Http\Controllers\HuisdierController::class, 'store']);
    Route::post('/aanvraag/{id}/accept', [\App\Http\Controllers\AanvraagController::class, 'accept']);
    Route::post('/aanvraag/{id}/deny', [\App\Http\Controllers\AanvraagController::class, 'deny']);
    Route::get('/review/{oppasserid}', [\App\Http\Controllers\ReviewController::class, 'create']);
    Route::post('/review/create/', [\App\Http\Controllers\ReviewController::class, 'store']);
    Route::get('/aanvragen', [\App\Http\Controllers\AanvraagController::class, 'index']);
});

Route::middleware(['auth', 'oppasser', 'blocked'])->group(function(){
    Route::post('/aanvraag/create', [\App\Http\Controllers\AanvraagController::class, 'store']);
});

Route::middleware(['auth', 'blocked'])->group(function(){
    Route::get('/user/editView', [\App\Http\Controllers\UserController::class, 'updateView']);
    Route::post('/user/edit', [\App\Http\Controllers\UserController::class, 'update']);
    Route::get('/user/{id}', [\App\Http\Controllers\UserController::class, 'show']);
    Route::get('/huisdier/{id}', [\App\Http\Controllers\HuisdierController::class, 'show']);
    Route::get('/huisdier', [\App\Http\Controllers\HuisdierController::class, 'index']);
    Route::post('/user/uploadimage', [\App\Http\Controllers\UserFotoController::class, 'store']);
});




require __DIR__.'/auth.php';
