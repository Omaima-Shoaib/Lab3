<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
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
    return view('users.create');
})->name('welcome');
Route ::get('users',[UserController::class,'index'])->name('users.index');
Route ::get('users/{id}/edit',[UserController::class,'edit'])->where('id','[0-9]+')->name('users.edit');
Route ::delete('users/{id}',[UserController::class,'destroy'])->where('id','[0-9]+') ->name('users.destroy');
Route ::get('users/create' ,[UserController::class,'create'])->name('users.create');
Route ::get('users/{id}',[UserController::class,'show'])->where('id','[0-9]+')->name('users.show');
Route ::post('users',[UserController::class,'store'])->name('users.store');
Route ::post('users/{id}',[UserController::class,'update'])->name('users.update');

Route ::get('posts',[PostController::class,'index'])->name('posts.index');
Route ::get('posts/create' ,[PostController::class,'create'])->name('posts.create');
Route ::post('posts',[PostController::class,'store'])->name('posts.store');


