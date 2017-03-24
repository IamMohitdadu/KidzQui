<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('evaluators', function() {
    return view('evaluators.index');
});

Route::get('studentform', function() {
    return view('evaluators.studentform');
});

Route::get('studentlist', function() {
    return view('evaluators.studentlist');
});

Route::get('studentdetails', function() {
    return view('evaluators.studentdetails');
});

Route::get('addtutorials', function() {
    return view('evaluators.addtutorials');
});

Route::get('tutorialdetails', function() {
    return view('evaluators.tutorialdetails');
});

Route::get('evaluatorlogout', function() {
    return view('evaluators.login');
});


Route::get('addquestions', function() {
    return view('evaluators.addquestions');
});

Route::get('questionlist', function() {
    return view('evaluators.questionlist');
});

Route::get('questiondetails', function() {
    return view('evaluators.questiondetails');
});

// Created By Mohit Dadu

Route::get('studentlist', 'EvaluatorController@studentList');

Route::get('studentgridlist', 'EvaluatorController@studentGridList');

Route::post('studentform', 'EvaluatorController@createRecord');