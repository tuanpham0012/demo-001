<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\TimekeepingController;
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
    return redirect('/departments');
});

Route::get('/departments/up/{id}', [DepartmentController::class, 'moveUp']);
Route::get('/departments/down/{id}', [DepartmentController::class, 'moveDown']);
Route::resource('/departments', DepartmentController::class);
Route::resource('/employees', EmployeeController::class);
Route::resource('/timekeepings', TimekeepingController::class);
