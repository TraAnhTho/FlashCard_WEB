<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bocard extends Model
{
    use HasFactory;
    public $timestamps = false;


    // Tên bảng
    protected $table = 'bocard';

    // Khóa chính
    protected $primaryKey = 'malist';

    // Các cột có thể fill
    protected $fillable = [
        'tenlist',
        'mota',
        'mand',
    ];

    // Một bocard thuộc về một nguoidung
    public function nguoiDung()
    {
        return $this->belongsTo(NguoiDung::class, 'mand', 'mand');
    }

    // Một bocard có nhiều card
    public function cards()
    {
        return $this->hasMany(Card::class, 'malist', 'malist');
    }
}
