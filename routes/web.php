<?php

use Illuminate\Support\Facades\Route;

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

/*Login*/
Route::get('/',[
    'as'=>'Login',
    'uses'=>'ControllerLogin@login_show'
]);
Route::post('Login_post',[
    'as'=>'Login_post',
    'uses'=>'ControllerLogin@login_handling'
]);

/*UploadFile*/
Route::get('LoadFile',[
    'as'=>'Load_File',
    'uses'=> 'controllerUpload@upload_show'
]);
Route::post('Upload',[
    'as'=>'Upload',
    'uses'=>'controllerUpload@upload_handling'
]);
