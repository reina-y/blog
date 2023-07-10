<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
 dev_basis02

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|ph
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

 dev_basis02
//Route::get('/', function () {
    //return view('welcome');
//});
Route::get('/',[PostController::class,'index']);  

