<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;


Route::get('/',[HomeController::class,'index']);
Route::get('/about', function () {
    return view('about');
});
Route::get('/projects', function (){
    return view('projects');
});
Route::get('/skills', function(){
    return view('skills');
});
Route::get('/contact', function(){
    return view('contact');
});
// Route::get('/tasks', function(){
//     return view('tasks');
// });

Route:: view('/contact' , 'contact');
Route:: post ('/contact', [ContactController:: class, 'store']) ->name('contact.store');