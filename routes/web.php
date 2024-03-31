<?php

use App\Http\Controllers\Dashboards;
use App\Http\Controllers\EmployeesControllers;
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
