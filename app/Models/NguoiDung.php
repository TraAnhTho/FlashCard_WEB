<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class NguoiDung extends Authenticatable
{
    use HasFactory;
    public $timestamps = false;

    // Tên bảng
    protected $table = 'nguoidung';

    // Khóa chính
    protected $primaryKey = 'mand';

    // Các cột có thể fill
    protected $fillable = [
        'tennd',
        'email',
        'matkhaund',
        'ngaysinh',
        'hinhanh',
    ];

    // Một người dùng có thể có nhiều bocard
    public function bocards()
    {
        return $this->hasMany(Bocard::class, 'mand', 'mand');
    }
}
