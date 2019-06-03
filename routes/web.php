<?php

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
    return view('religionView');
 });

//for Religion Controller
  Route::resource('religionCN','religionCtr');
  Route::apiresource('religionCN','religionCtr');
  
  Route::get('/',function(){
  	return view('roomStatusView');
  });

 //for RoomStatus Controller
  Route::resource('roomStatusCN','roomStatusCtr');
  Route::apiresource('roomStatusCN','roomStatusCtr');