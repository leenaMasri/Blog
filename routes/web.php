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

Route::get('/tasks', function () {

    $tasks = DB::table('tasks')->latest()->get();

   // return $tasks;

    /*$tasks=[
        'Go to the store',
        'Finish my screencast',
        'Clean the house'
    ];*/

    return view('tasks.index',compact('tasks'));//// another way::#1 return view('welcome')->with('name', 'world') way#2 $name='leena';return view('welcome',['name'=> $name]//#3 another function in php called compact will genarate an array with key value name& the value of the variable::$name='leena'; age=23 compact('name','age')




});

Route::get('/tasks/{task}',function ($id){
    //dd($id);//die&dump  //dd($tasks);
    $task = DB::table('tasks')->find($id);
    return view('tasks.show',compact('task'));//tasks/show also allowed

});


Route::get('/about', function () {// put '/' is optional
    return view('about');
});

