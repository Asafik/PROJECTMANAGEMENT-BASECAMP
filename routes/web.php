<?php

use App\Http\Controllers\ProjectDiscussionsController;
use App\Http\Controllers\ProjectListsController;
use App\Http\Controllers\ProjectRequestSucessController;
use App\Http\Controllers\ProjectRequirementDocumentsController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ProjectTasksController;
use App\Http\Controllers\UsersController;
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

Route::get('/',[UsersController::class,'index']);

//route project create
//Route::resource('/project',ProjectsController::class);
Route::get('/project',[ProjectsController::class,'index']);
Route::get('/create',[ProjectsController::class,'create']);
Route::post('/store',[ProjectsController::class,'store']);
Route::get('/project/{id}/project_edit',[ProjectsController::class,'edit']);
Route::put('/project_edit/{id}',[ProjectsController::class,'update']);
Route::delete('/project/{id}',[ProjectsController::class,'destroy']); 

//route project list
Route::get('/project_list',[ProjectListsController::class,'index']);
Route::get('/create',[ProjectListsController::class,'create']);

//route project task
Route::get('/project_list',[ProjectTasksController::class,'index']);
Route::get('/create',[ProjectTasksController::class,'create']);
Route::post('/storetask',[ProjectTasksController::class,'store']);

//route project req
Route::get('/projectReq',[ProjectRequirementDocumentsController::class,'index']);
Route::get('/projectReqSuccess',[ProjectRequestSucessController::class,'index']);
Route::get('/projectReq_create',[ProjectRequirementDocumentsController::class,'create']);

//route diskusi opd
Route::get('/discussion',[ProjectDiscussionsController::class,'index']);