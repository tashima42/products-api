<?php

use App\Models\Category;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('test', function () {
    return ['message' => 'hello'];
});

Route::get('category/{id}', function (Request $request, $id) {
    return $request->all();
//   return Category::fin1d($id);
});

Route::post('category', function (Request $request) {
    return $request->all;
});
