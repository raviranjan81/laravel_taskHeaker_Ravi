<?php

use App\Http\Controllers\UserController;
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

Route::match(['GET', 'POST'], '/', [UserController::class, 'userReg'])->name('user.reg');
Route::get('/user/data',[UserController::class,'data'])->name('user.data');
Route::match(['GET','POST'],'/user/task/{id}',[UserController::class,'task'])->name('user.task');
Route::get('/user/task',[UserController::class,'userTaskData'])->name('user.task.data');


// Route::get('/task/all/user',[UserController::class,'alltask'])->name('user.all.task');


// Route::get('/b',function(){
//     return view('user.userTask');
// });


Route::get('/user/exp',[UserController::class,'expUser'])->name('user.dataexp');
Route::get('/user/exp/task',[UserController::class,'expUserdata'])->name('user.expTask');