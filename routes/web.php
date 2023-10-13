<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('layout');
});

Route::get('/departments/up/{id}', [DepartmentController::class, 'moveUp']);
Route::get('/departments/down/{id}', [DepartmentController::class, 'moveDown']);
Route::resource('/departments', DepartmentController::class);
Route::resource('/employees', EmployeeController::class);