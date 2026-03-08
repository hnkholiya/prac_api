<?php

use App\Http\Controllers\ContactController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/apidata', function(){
    return ['name'=> 'Harshl', 'surname'=> 'Kholiya'];
});
    
Route::get('/contact',[ContactController::class,'index']);
