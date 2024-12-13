<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function getCards()
    {
        // Lấy tất cả các card
        $cards = Card::all();

        // Trả về dữ liệu dưới dạng JSON (để sử dụng trong frontend)
        return response()->json($cards);
    }
} 

