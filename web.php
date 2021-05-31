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

Route::get('/', function () {
    return view('welcome');
});

//mengirim data ke view
Route::get("/hallo", function () {
    $data = ['nama' => 'robby pratama', 'npm' =>'1923240001','alamat'=> 'palembang']
    return view("Hallo", $data);
});

//menerima data/parameter dan menampilkannya di view
Route::get("/kenalan/{nama}/{npm}", function ($nama, $npm) {
    $data = ['nama' =>$nama, 'npm' =>$npm]
    return view("Hallo", $data);
});

Route::get('/mahasiswa/insert', [mahasiswaController::class, 'insert']);
Route::get('/mahasiswa/update', [mahasiswaController::class, 'update']);
Route::get('/mahasiswa/delete', [mahasiswaController::class, 'delete']); 
Route::get('/mahasiswa/select', [mahasiswaController::class, 'select']);

Route::get('/mahasiswa/insert-qb', [mahasiswaController::class, 'insertqb']);
Route::get('/mahasiswa/update-qb', [mahasiswaController::class, 'updateqb']);
Route::get('/mahasiswa/delete-qb', [mahasiswaController::class, 'deleteqb']); 
Route::get('/mahasiswa/select-qb', [mahasiswaController::class, 'selectqb']);

Route::get('/mahasiswa/insert-elq', [mahasiswaController::class, 'insert elq']);
Route::get('/mahasiswa/update-elq', [mahasiswaController::class, 'update elq']);
Route::get('/mahasiswa/delete-elq', [mahasiswaController::class, 'delete elq']); 
Route::get('/mahasiswa/select-elq', [mahasiswaController::class, 'select elq']);