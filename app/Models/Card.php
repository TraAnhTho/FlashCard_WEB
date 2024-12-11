<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;
    public $timestamps = false;


    // Tên bảng
    protected $table = 'card';

    // Khóa chính
    protected $primaryKey = 'macard';

    // Các cột có thể fill
    protected $fillable = [
        'malist',
        'dinhnghia',
        'thuatngu',
    ];

    // Một card thuộc về một bocard
    public function bocard()
    {
        return $this->belongsTo(Bocard::class, 'malist', 'malist');
    }
}
