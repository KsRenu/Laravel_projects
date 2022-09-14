<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\c_1;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
Route::get('view-records', [StudViewController::class, 'index']);

*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('view_1',function(){return view('view_1');});
Route::get('view_2',[c_1::class,'index']);

Route::get('view_add',[c_1::class,'addData']);
Route::post('view_store',[c_1::class,'storeData']);
Route::get('view_edit/{id}',[c_1::class,'editData']);
Route::post('updateData',[c_1::class,'updateData']);
Route::get('view_delete/{id}',[c_1::class,'deleteData']);

