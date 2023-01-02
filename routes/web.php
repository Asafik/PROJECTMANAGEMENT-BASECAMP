<?php

use App\Models\projects;
use App\Models\users;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\FullCalendarController;
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
use App\Http\Controllers\ProjectCalendarController;
use App\Http\Controllers\BoardtimeController;
use App\Http\Controllers\TasksListController;
use App\Http\Controllers\ProjectFilesController;


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
Auth::routes([
    'verify' => true
]);

Route::get('/',[UsersController::class,'index'])->middleware('guest');

//route project create
Route::get('/project',[ProjectsController::class,'index'])->middleware('auth');
Route::get('/create',[ProjectsController::class,'create']);
Route::post('/store',[ProjectsController::class,'store']);
Route::get('/project/{id}/project_edit',[ProjectsController::class,'edit']);
Route::put('/project_edit/{id}',[ProjectsController::class,'update']);
Route::delete('/project/{id}',[ProjectsController::class,'destroy']);
Route::get('/general_project',[ProjectsController::class,'general']);
Route::get('/project',[ProjectsController::class,'index'])->middleware('auth');
Route::get('/create',[ProjectsController::class,'create'])->middleware('auth');
Route::post('/store',[ProjectsController::class,'store'])->middleware('auth');
Route::get('/project/{id}/project_edit',[ProjectsController::class,'edit'])->middleware('auth');
Route::put('/project_edit/{id}',[ProjectsController::class,'update'])->middleware('auth');
Route::delete('/project/{id}',[ProjectsController::class,'destroy'])->middleware('auth');
Route::get('/general_project',[ProjectsController::class,'general'])->middleware('auth');
Route::get('/timeboard',[ProjectsController::class,'timeboard'])->middleware('auth');
// Route::get('/searching',[ProjectsController::class,'search']);

//route timeboard
Route::get('/timeboardOpd',[BoardtimeController::class,'index']);
Route::get('/create',[BoardtimeController::class,'create']);
Route::post('/store',[BoardtimeController::class,'store']);


//route project list
Route::get('/project_list',[ProjectListsController::class,'index'])->middleware('auth');
Route::get('/create',[ProjectListsController::class,'crex`ate'])->middleware('auth');
Route::get('/projectList_delete/{id}',[ProjectListsController::class,'destroy'])->middleware('auth');

//route discuss
Route::get('/discuss',[ProjectsController::class,'discuss'])->middleware('auth');
Route::post('ckeditor/upload', 'CKEditorController@upload')->middleware('auth')->name('ckeditor.image-upload');

//route timeboard project
Route::get('/timeboardproject',[ProjectsController::class,'timeboardproject']);

//route milestone project
Route::get('/milestoneproject',[ProjectsController::class,'milestoneproject']);

//route discuss
Route::get('/discuss',[ProjectsController::class,'discuss']);
Route::post('ckeditor/upload', 'CKEditorController@upload')->name('ckeditor.image-upload');

//route project task
Route::get('/project_list',[ProjectTasksController::class,'index'])->middleware('auth');
Route::get('/create',[ProjectTasksController::class,'create'])->middleware('auth');
Route::post('/storetask',[ProjectTasksController::class,'store'])->middleware('auth');

//route project req
Route::get('/projectReq',[ProjectRequirementDocumentsController::class,'index'])->middleware('auth');;
Route::get('/projectReqSuccess',[ProjectRequestSucessController::class,'index'])->middleware('auth');
Route::get('/projectReq_create',[ProjectRequirementDocumentsController::class,'create'])->middleware('auth');
Route::post('/projectReq_store',[ProjectRequirementDocumentsController::class,'store'])->middleware('auth');
Route::get('/projectReq_details/{id}',[ProjectRequirementDocumentsController::class,'show'])->middleware('auth');
Route::get('/projectReq_edit/{id}',[ProjectRequirementDocumentsController::class,'edit'])->middleware('auth');
Route::post('/projectReq_update/{id}',[ProjectRequirementDocumentsController::class,'update'])->middleware('auth');
Route::get('/projectReq_all',[ProjectRequirementDocumentsController::class,'all'])->middleware('auth');
Route::get('/projectReq_delete/{id}',[ProjectRequirementDocumentsController::class,'destroy'])->middleware('auth');
Route::get('/generalReq',[ProjectRequirementDocumentsController::class,'generalReq'])->middleware('auth');

//Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//route login
Route::get('/login',[ExternalUsersController::class,'login'])->name('login')->middleware('guest');
Route::post('/login',[ExternalUsersController::class,'authenticate']);
Route::get('/signup',[ExternalUsersController::class,'signup'])->middleware('guest');
Route::post('/signup',[ExternalUsersController::class,'store']);
Route::post('/logout',[ExternalUsersController::class,'logout']);
Route::post('/logout',[ExternalUsersController::class,'logout'])->middleware('auth');

//route milestone
Route::get('/milestone',[ProjectMilestonesController::class,'index'])->middleware('auth');

//route notification
Route::get('/notification',[NotificationController::class,'index'])->middleware('auth');

//route conversation
Route::get('/conversation',[ConversationController::class,'index'])->middleware('auth');
Route::get('/conversationchat',[ConversationController::class,'conversationchat']);

//monitoring
Route::get('/monitoring',[MonitoringController::class,'index'])->middleware('auth');

//route user
Route::get('/user_profile',[UsersController::class,'profile'])->middleware('auth');
Route::post('/update/{id}',[ExternalUsersController::class,'update'])->middleware('auth');

// route task_project
Route::get('/task_list',[TasksListController::class,'index']);

// route projectfile
Route::get('/projectfile',[ProjectFilesController::class,'index']);

//diskominfos
Route::get('/homediskominfos',[HomeDiskominfosController::class,'index'])->middleware('auth');
Route::get('/requestapprov',[HomeDiskominfosController::class,'create'])->middleware('auth');
Route::get('/requestapprovsucess',[HomeDiskominfosController::class,'store']);
Route::get('/discussion',[ProjectDiscussionsController::class,'create'])->middleware('auth');


//sign up/login
Route::get('pegawai',[PegawaiController::class,'index']);
Route::get('pegawai/create',[PegawaiController::class,'create']);
Route::post('pegawai/store',[PegawaiController::class,'store']);

//fullCalendar
Route::get('/full-calender', [FullCalendarController::class, 'getEvent']);
Route::post('/createevent', [FullCalendarController::class, 'createEvent'])->name('createevent');
Route::post('/deleteevent', [FullCalendarController::class, 'deleteEvent'])->name('deleteevent');
Route::get('/calendar',[FullCalendarController::class, 'calendar']);