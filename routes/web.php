<?php

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

Route::get('/index', 'indexController@index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/questions', 'questionsController@index');
Route::get('/questions/create', 'questionsController@create');
Route::get('/questions/userquestions', 'questionsController@userquestions');
Route::post('/questions','questionsController@store');
Route::get('/questions/deletequestion/{id}', 'questionsController@delete');
Route::get('/questions/{id}', 'questionsController@redirect');

Route::post('/answers', 'answerController@create');
Route::get('/answers/useranswers', 'answerController@useranswers');
Route::post('answers/saveanswers','answerController@saveanswers');
Route::get('/answers/editanswers/{answerid}','answerController@editanswers');
Route::get('answers/deleteanswers/{answerid}','answerController@deleteanswers');


Route::get('/userprofile', 'userController@index');

