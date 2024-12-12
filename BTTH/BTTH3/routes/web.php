<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\IssueController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/medicines', [MedicineController::class, 'index']);
Route::get('/sales', [SaleController::class, 'index']);
Route::get('/classes', [ClassController::class, 'index']);
Route::get('/students', [StudentController::class, 'index']);
Route::get('/computers', [ComputerController::class, 'index']);
Route::get('/issues', [IssueController::class, 'index']);

