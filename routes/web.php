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

// Route::get('/', function () {
//     return view('index');
// });


Route::get('/', 'PegawaiController@index1');

Route::get('/pegawai', 'PegawaiController@index');

// CRUD
Route::get('/pegawai/create', 'PegawaiController@create');
Route::get('/pegawai/{employee}', 'PegawaiController@show');
Route::post('/pegawai', 'PegawaiController@store');
Route::delete('/pegawai/{employee}', 'PegawaiController@destroy');
Route::get('/pegawai/{employee}/edit', 'PegawaiController@edit');
Route::patch('/pegawai/{employee}', 'PegawaiController@update');
// Route::resource('/pegawai', 'PegawaiController');


// Activity

Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/create', 'TasksController@create');
Route::get('/tasks/{task}', 'TasksController@show');
Route::post('/tasks', 'TasksController@store');
Route::delete('/tasks/{task}', 'TasksController@destroy');
Route::get('/tasks/{task}/edit', 'TasksController@edit');
Route::patch('/tasks/{task}', 'TasksController@update');




// per jabatan

// Route::get('/jabatan/manager', 'JabatanController@manager');
// Route::get('/jabatan/sistemanalyst', 
// Route::get('/jabatan/sistemanalyst JabatanController@sistemanalyst');
// Route::get('/jabatan/programmerdesign', 'JabatanController@programmerdesign');
// Route::get('/jabatan/tester', 'JabatanController@tester');

Route::get('/jabatan/{jabatan?}', 'JabatanController@index');


//pemberitahuan

Route::get('/absen', 'AbsenController@index');
Route::get('/absen/{task}', 'AbsenController@show');