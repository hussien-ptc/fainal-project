<?php

use App\Http\Controllers\Taskcontroller;
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
    return view('welcome');
});
Route::get('/about',[TaskController::class,'hus']);

Route::post('/about',[TaskController::class,'huss']);

Route::get('/contact',[TaskController::class,'index']);




// Route::get('/calculater',function (){

//     return view('calculater');
// });
