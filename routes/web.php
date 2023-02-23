<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('layouts\app');
//});

Route::get('/',[Usercontroller::class,'Index']);

Route::post('dataInsert',[Usercontroller::class,'dataInsertion']);

Route::get('/success',function (){
    return view('form\success');
});
