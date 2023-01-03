<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('index');
});

Route::get('/create',function(){
    return view('create');
});
Route::get('/details',function(){
    return view('details');
});
Route::get('/edit',function(){
    return view('edit');
});