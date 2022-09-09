<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use Illuminate\Support\Facades\Redis;


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

Route::get('/', function () {
    // $redis= app()->make('redis');
    $redis= Redis::connection();

    $redis->set('key1','testvalue');
    return $redis->get('key1');
    // print_r(app()->make('redis'));
    // return view('welcome');
});


Route::get('/city/{id}',[CityController::class,'index']);
Route::get('/cities',[CityController::class,'showAll']);