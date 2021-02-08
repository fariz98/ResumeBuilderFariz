<?php

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
    return view('main');
});

Route::group(['middleware' => ['auth']], function () {
    Route::resource('user_detail', 'UserDetailController');
    Route::resource('education', 'EducationController');
    Route::resource('experience', 'ExperienceController');
    Route::resource('skill', 'SkillController');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('resume', 'ResumeController@index')->name('resume.index')->middleware('auth');
// Route::get('resume/download', 'ResumeController@download')->name('resume.download')->middleware('auth');
Route::get('preview', 'ResumeController@preview')->name('resume.preview')->middleware('auth');;
Route::get('generate-pdf', 'ResumeController@generatePDF')->name('resume.generatePDF')->middleware('auth');;
