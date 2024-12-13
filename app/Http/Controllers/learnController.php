<?php

namespace App\Http\Controllers;

use App\Models\Bocard;
use App\Models\Card;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class learnController extends Controller
{
    /**
     * Hiển thị giao diện học với flashcards của bộ thẻ cụ thể.
     */
    public function index($malist)
    {
        $user = Auth::user(); // Lấy thông tin user đang đăng nhập
        // Lấy bộ thẻ và flashcard
        $bocard = Bocard::findOrFail($malist); // Lấy thông tin bộ thẻ (Bocard)
        $flashcards = Card::where('malist', $malist)->get(); // Lấy các flashcards trong bộ thẻ
        // Lấy flashcards từ bộ thẻ
        $card = Card::where('malist', $malist)->get();

        // Kiểm tra số lượng flashcard trong bộ thẻ
        if ($flashcards->count() < 1) {
            return redirect()->back()->withErrors('Thiếu dữ liệu. Hãy thêm ít nhất 1 thẻ vào bộ thẻ này.');
        }

        // Truyền dữ liệu vào view
        return view('pages.learn', compact('user', 'bocard', 'flashcards', 'card'));
    }

    /**
     * API lấy ngẫu nhiên 10 flashcards từ cơ sở dữ liệu.
     */
    public function getFlashcards(Request $request, $malist)
    {
        $user = Auth::user(); // Lấy thông tin user đang đăng nhập
        $bocard = Bocard::findOrFail($malist); // Lấy thông tin bộ thẻ (Bocard)
        $flashcards = Card::where('malist', $malist)->get(); // Lấy các flashcards trong bộ thẻ

        // Lấy flashcards từ bộ thẻ
        $card = Card::where('malist', $malist)->get();

        // Kiểm tra nếu bộ thẻ không có dữ liệu
        if ($card->count() < 1) {
            return response()->json(['error' => 'Bộ thẻ này chưa có dữ liệu.'], 400);
        }

        return response()->json($card); // Trả dữ liệu flashcards
        return view('pages.learn', compact('user', 'bocard', 'flashcards', 'card'));

    }

}
