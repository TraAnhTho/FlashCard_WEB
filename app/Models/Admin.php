<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    // Tên bảng
    protected $table = 'admin';

    // Khóa chính
    protected $primaryKey = 'maad';

    // Các cột có thể fill
    protected $fillable = [
        'tenad',
        'matkhauad',
    ];
}
