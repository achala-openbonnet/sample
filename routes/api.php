<?php

use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('category',function () {
    return Category::all();
});

Route::get('service', function() {
    return Service::all();
});

Route::get('category/{id}/service',function ($id) {
    return Service::where('category_id',$id)->get();
});



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
