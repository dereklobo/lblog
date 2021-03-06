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

//use App\Task;

Route::get('/','PostsController@index')->name('home');

Route::get('/posts/create','PostsController@create');

Route::get('/posts/{posts}','PostsController@show');



Route::post('/posts','PostsController@store');



Route::post('/posts/{post}/comments','CommentsController@store');

Route::get('/register','RegistrationController@create');

Route::post('/register','RegistrationController@store');

Route::get('/login','SessionsController@create');

Route::post('/login','SessionsController@store');

Route::get('/logout','SessionsController@destroy');
//Route::get('/', function () {

  //  $tasks = [
  //      "Analyse",
   //     "Code",
    //    "Test"
    //];
    //return view('welcome',compact('tasks'));
//});

//Route::get('/tasks','TasksController@index');

//Route::get('/tasks/{task}','TasksController@show');

//Route::get('/tasks', function () {

    //$tasks = DB::table('tasks')->latest()->get();
    //$tasks = Task::all();
    //return view('tasks.index', compact('tasks'));
//});

//Route::get('/tasks/{task}', function ($id) {

	//$task = DB::table('tasks')->find($id);
    //dd($tasks);
    //$task = Task::find($id);
    //return view('tasks.show', compact('task'));
//});

Route::get('about', function () {

	$tasks = DB::table('tasks')->latest()->get();
	$name = "Dug";
    return view('about', compact('tasks','name'));
});