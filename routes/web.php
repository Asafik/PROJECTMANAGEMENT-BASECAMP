<?php

use App\Models\projects;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\MonitoringController;
use App\Http\Controllers\ProjectGrupController;
use App\Http\Controllers\ConversationController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ProjectListsController;
use App\Http\Controllers\ProjectTasksController;
use App\Http\Controllers\ExternalUsersController;
use App\Http\Controllers\HomeDiskominfosController;
use App\Http\Controllers\ProjectMilestonesController;
use App\Http\Controllers\ProjectDiscussionsController;
use App\Http\Controllers\ProjectRequestSucessController;
use App\Http\Controllers\ProjectRequirementDocumentsController;


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
//
Route::get('/project',[ProjectsController::class,'index']);
Route::get('/create',[ProjectsController::class,'create']);
Route::post('/store',[ProjectsController::class,'store']);
Route::get('/project/{id}/project_edit',[ProjectsController::class,'edit']);
Route::put('/project_edit/{id}',[ProjectsController::class,'update']);
Route::delete('/project/{id}',[ProjectsController::class,'destroy']);
Route::get('/general_project',[ProjectsController::class,'general']);
Route::get('/timeboard',[ProjectsController::class,'timeboard']);
// Route::get('/searching',[ProjectsController::class,'search']);

//route project grup

//route project list
Route::get('/project_list',[ProjectListsController::class,'index']);
Route::get('/create',[ProjectListsController::class,'crex`ate']);

//route discuss
Route::get('/discuss',[ProjectsController::class,'discuss']);

//route bookmark
Route::get('/bookmark',[ProjectsController::class,'bookmark']);

//route project task
Route::get('/project_list',[ProjectTasksController::class,'index']);
Route::get('/create',[ProjectTasksController::class,'create']);
Route::post('/storetask',[ProjectTasksController::class,'store']);

//route project req
Route::get('/projectReq',[ProjectRequirementDocumentsController::class,'index']);
Route::get('/projectReqSuccess',[ProjectRequestSucessController::class,'index']);
Route::get('/projectReq_create',[ProjectRequirementDocumentsController::class,'create']);

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//route login
//Auth::routes();
Route::get('/signup',[ExternalUsersController::class,'index']);
Route::post('/signup',[ExternalUsersController::class,'store']);

//route milestone
Route::get('/milestone',[ProjectMilestonesController::class,'index']);

//route notification
Route::get('/notification',[NotificationController::class,'index']);

//route conversation
Route::get('/conversation',[ConversationController::class,'index']);

//monitoring
Route::get('/monitoring',[MonitoringController::class,'index']);

//route user
Route::get('/user_profile',[UsersController::class,'profile']);

//diskominfos

Route::get('/homediskominfos',[HomeDiskominfosController::class,'index']);
Route::get('/requestapprov',[HomeDiskominfosController::class,'create']);
Route::get('/requestapprovsucess',[HomeDiskominfosController::class,'store']);
Route::get('/discussion',[ProjectDiscussionsController::class,'create']);

//sign up/login
Route::get('pegawai',[PegawaiController::class,'index']);
Route::get('pegawai/create',[PegawaiController::class,'create']);
Route::post('pegawai/store',[PegawaiController::class,'store']);