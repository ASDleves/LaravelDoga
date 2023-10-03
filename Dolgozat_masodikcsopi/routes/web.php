<?php

use App\Http\Controllers\ParticipateController;
use App\Models\Participate;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/api/participates', [ParticipateController::class, 'index']);
Route::get('/api/participates/{id}', [ParticipateController::class, 'show']);
Route::post('/api/participates', [ParticipateController::class, 'store']);
Route::put('/api/participates/{id}', [ParticipateController::class, 'update']);
Route::delete('/api/participates/{id}', [ParticipateController::class, 'destroy']);
Route::get('/api/users', [UserController::class, 'index']);
Route::get('/participate/new', [ParticipateController::class, 'newvIEW']);
Route::get('/participate/edit/{id}', [ParticipateController::class, 'EditView']);
Route::get('/participate/list', [ParticipateController::class, 'ListView']);
Route::get('/participate/delete', [Participate::class, 'deleteView']);
