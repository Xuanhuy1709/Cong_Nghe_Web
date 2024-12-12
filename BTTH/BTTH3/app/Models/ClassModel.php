<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassModel extends Model
{
    use HasFactory;

    // Đảm bảo tên bảng chính xác
    protected $table = 'classes'; // Thay 'classes' nếu tên bảng khác
}
