<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\PopularController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/home', function(){
    return Inertia('Home');
});


Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/home', function(){
        return Inertia('Home');
    });

    Route::get('/movies', [MovieController::class, 'index']);
    Route::get('/popular', [PopularController::class, 'index']);

    Route::resource('movies', MovieController::class);
    Route::post('/movies', [MovieController::class, 'store']);
    Route::get('/movies/{movies}', [MovieController::class, 'show']);
    Route::put('/movie/{movies}', [MovieController::class, 'update']);
    Route::delete('/movie/{movie}', [MovieController::class, 'destroy']);

});



require __DIR__.'/auth.php';
