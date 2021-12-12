<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use function GuzzleHttp\Promise\task;


Route::get('/', [TaskController::class,'index']);
Route::post('/store' ,[TaskController::class,'store']);
Route::post('delete/{id}' ,[TaskController::class,'delete']);



Route::get('tasks', function () {
    return view('tasks');
    });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
