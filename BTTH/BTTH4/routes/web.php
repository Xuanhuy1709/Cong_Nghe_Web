<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IssueController;

// Hiển thị danh sách sự cố
Route::get('/', [IssueController::class, 'index'])->name('issues.index');

// Hiển thị form tạo sự cố mới
Route::get('/issues/create', [IssueController::class, 'create'])->name('issues.create');

//Đường dẫn để hiển thị chi tiết sự cố cụ thể 
Route::get('/issues/{id}', [IssueController::class, 'show'])->name('issues.show');
// Lưu sự cố mới
Route::post('/issues', [IssueController::class, 'store'])->name('issues.store');

// Hiển thị form chỉnh sửa sự cố
Route::get('/issues/edit/{id}', [IssueController::class, 'edit'])->name('issues.edit');

// Cập nhật thông tin sự cố
Route::put('/issues/{id}', [IssueController::class, 'update'])->name('issues.update');

// Xóa sự cố
Route::delete('/issues/{id}', [IssueController::class, 'destroy'])->name('issues.destroy');

