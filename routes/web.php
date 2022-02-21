<?php

use App\Http\Controllers\PostsController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

 
Route::get('/' , [PostsController::class,'list']);

Route::post('/' , [PostsController::class,'store']);
Route::get('/create' , [PostsController::class,'create']);

Route::get('/show/{value}' , [PostsController::class, 'show']);
Route::put('/{value}', [PostsController::class, 'update']);

Route::delete('/{value}', [PostsController::class, 'destroy']);
