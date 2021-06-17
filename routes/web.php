<?php

use App\Http\Controllers\HomeController;
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


Route::get('/', 'indexController@index');
Route::get('/jobs', 'JobsController@showJobs');
Route::get('/post_vacancy', 'JobsController@showPostVacancy');
Route::post('/save_vacancy', 'JobsController@savePostVacancy');


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/user/skills', [HomeController::class, 'manageSkills']);
Route::get('/skill/delete/{id}', [HomeController::class, 'deleteSkill']);
Route::get('/user/update_profile', [HomeController::class, 'showUpdateProfile']);

Route::post('/save_skill', 'HomeController@saveSkill');
Route::post('/update_profile', 'HomeController@updateProfile');


Route::get('/questions', 'questionsController@index');
Route::get('/questions/create', 'questionsController@create');
Route::get('/questions/{id}', 'questionsController@redirect');
