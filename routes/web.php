<?php

use App\Http\Controllers\Dashboards;
use App\Http\Controllers\DivisiControllers;
use App\Http\Controllers\EmployeesControllers;
use App\Http\Controllers\PositionControllers;
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


//custuom route
Route::get('/', [Dashboards::class, 'index'])->name('/');
Route::get('/employee', [EmployeesControllers::class, 'index'])->name('employee');
Route::get('/createEmployee', [EmployeesControllers::class, 'createEmployee'])->name('createEmployee');
Route::post('/stroreEmployee', [EmployeesControllers::class, 'stroreEmployee'])->name('stroreEmployee');
Route::get('/fetchEmployee/{id}', [EmployeesControllers::class, 'fetchEmployee'])->name('fetchEmployee');
Route::post('/updateEmployee/{id}', [EmployeesControllers::class, 'updateEmployee'])->name('updateEmployee');
Route::get('/deleteEmployee/{id}', [EmployeesControllers::class, 'deleteEmployee'])->name('deleteEmployee');
Route::get('/detailEmployee/{id}', [EmployeesControllers::class, 'detailEmployee'])->name('detailEmployee');

//position 
Route::get('/position', [PositionControllers::class, 'index'])->name('position');
Route::get('/createPosition', [PositionControllers::class, 'createPosition'])->name('createPosition');
Route::post('/storePosition', [PositionControllers::class, 'storePosition'])->name('storePosition');
Route::get('/fetchPosition/{id}', [PositionControllers::class, 'fetchPosition'])->name('fetchPosition');
Route::post('/updatePosition/{id}', [PositionControllers::class, 'updatePosition'])->name('updatePosition');
Route::get('/detailPosition/{id}', [PositionControllers::class, 'detailPosition'])->name('detailPosition');
Route::get('/deletePosition/{id}', [PositionControllers::class, 'deletePosition'])->name('deletePosition');

//divisi 
Route::get('/divisi', [DivisiControllers::class, 'index'])->name('divisi');
Route::get('/createDivisi', [DivisiControllers::class, 'createDivisi'])->name('createDivisi');
Route::post('/storeDivisi', [DivisiControllers::class, 'storeDivisi'])->name('storeDivisi');
Route::get('/fetchDivisi/{id}', [DivisiControllers::class, 'fetchDivisi'])->name('fetchDivisi');
Route::post('/updateDivisi/{id}', [DivisiControllers::class, 'updateDivisi'])->name('updateDivisi');
Route::get('/detailDivisi/{id}', [DivisiControllers::class, 'detailDivisi'])->name('detailDivisi');
Route::get('/deleteDivisi/{id}', [DivisiControllers::class, 'deleteDivisi'])->name('deletePosition');