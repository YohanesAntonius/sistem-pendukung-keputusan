<?php

use App\Http\Controllers\AlternativesController;
use App\Http\Controllers\CriteriasController;
use App\Http\Controllers\CiviliansController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Rules\Role;

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
    return view('auth.login');
});

// Route::group(['middleware' => ['web', 'guest']], function() {
//     Route::get('/login', [AuthController::class, 'login'])->name('login');
//     Route::post('/postlogin', [AuthController::class, 'postlogin']);
// });


// Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
//     return view('index');
// })->name('index');

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/civilians', [CiviliansController::class, 'index']);
    Route::get('/civilians/create', [CiviliansController::class, 'create']);
    Route::post('/civilians', [CiviliansController::class, 'store']);
    Route::get('/civilians/{civilians}/edit', [CiviliansController::class, 'edit']);
    Route::patch('/civilians/{civilians}', [CiviliansController::class, 'update']);
    Route::get('/civilians/{civilians}', [CiviliansController::class, 'destroy']);
    Route::get('/criterias', [CriteriasController::class, 'index']);
    Route::get('/criterias/create', [CriteriasController::class, 'create']);
    Route::post('/criterias', [CriteriasController::class, 'store']);
    Route::get('/criterias/{criterias}/edit', [CriteriasController::class, 'edit']);
    Route::patch('/criterias/{criterias}', [CriteriasController::class, 'update']);
    Route::get('/criterias/{criterias}', [CriteriasController::class, 'destroy']);
    Route::get('/alternatives', [AlternativesController::class, 'index']);
    Route::get('/alternatives/create', [AlternativesController::class, 'create']);
    Route::post('/alternatives', [AlternativesController::class, 'store']);
    Route::get('/alternatives/{alternatives}/edit', [AlternativesController::class, 'edit']);
    Route::patch('/alternatives/{alternatives}', [AlternativesController::class, 'update']);
    Route::get('/alternatives/{alternatives}', [AlternativesController::class, 'destroy']);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/logout', function () {
    return view('auth.login');
})->name('auth.login');

//logout dashboard bootstrap
// Route::get('/logout', 'AuthController@logout');
