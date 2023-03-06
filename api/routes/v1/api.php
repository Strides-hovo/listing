<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['middleware' => ['guest']],function () {
    Route::post('login',[UserController::class,'login'])->name('login');
    Route::post('registr',[UserController::class,'registr'])->name('registr');
});


Route::get('logout',[UserController::class,'logout'])->middleware('auth:sanctum')->name('logout');

Route::apiResource('post',PostController::class);



Route::get('post-templates',[TemplateController::class, 'index'])->name('client.post.templates');
Route::get('regions',[RegionController::class,'index'])->name('regions.index');
