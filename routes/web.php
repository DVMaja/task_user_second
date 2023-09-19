<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});
//Teszt útvonalak
Route::get('/api/tasks', [TaskController::class, 'index']);
Route::get('/api/tasks/{id}', [TaskController::class, 'show']);

Route::post('/api/tasks', [TaskController::class, 'store']);

Route::get('/api/users', [UserController::class,'index']);

//ciew útvonalak következnek
Route::get('/task/list', [TaskController::class, 'listView']);

Route::get('/task/new', [TaskController::class, 'newView']);
Route::get('/task/edit/{id}', [TaskController::class, 'editView']);


//User útvonalak
///api/users/{{$user->id}}

Route::get('/api/users/', [UserController::class, 'index']);
Route::get('/api/users/{{$user->id}}', [UserController::class, 'show']);





//require __DIR__ . '/auth.php';
