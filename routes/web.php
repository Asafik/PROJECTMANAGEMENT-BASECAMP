<?php

use App\Http\Controllers\ProjectListsController;
use App\Http\Controllers\ProjectsController;
use App\Models\projects;
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

Route::get('/project',[ProjectsController::class,'index']);
Route::get('/create',[ProjectsController::class,'create']);
Route::post('/store',[ProjectsController::class,'store']);
Route::get('/project_list',[ProjectListsController::class,'index']);