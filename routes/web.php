<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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

