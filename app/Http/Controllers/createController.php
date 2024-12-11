<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Bocard;
use App\Models\Card;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Middleware\ShareUserData;


class createController extends Controller
{
    public function showCreateForm()    /******/
    {
         // Lấy thông tin người dùng đang đăng nhập (nếu có)    
         $user = Auth::user();
        return view('pages/create', compact('user')); // Đường dẫn đến view của bạn
    }

    /**
     * Lưu thông tin FlashCard vào cơ sở dữ liệu.
     */
    public function store(Request $request)
    {
        // Xác thực dữ liệu
        $request->validate([
            'tittle_card' => 'required|max:255',
            'mota_card' => 'nullable|max:255',
            'flashcards' => 'required|array', // Phải là một mảng
            'flashcards.*.tn_card' => 'required|max:255', // Thuật ngữ không được rỗng
            'flashcards.*.dn_card' => 'required|max:255', // Định nghĩa không được rỗng
        ]);

        // Lưu thông tin học phần vào bảng bocard
        $bocard = BoCard::create([
            'tenlist' => $request->tittle_card,
            'mota' => $request->mota_card  ?? 'Chưa có mô tả',
            'mand' => Auth::id(), // Gắn với người dùng đang đăng nhập
        ]);

        // Lưu từng flashcard vào bảng card
        foreach ($request->flashcards as $flashcard) {
            Card::create([
                'malist' => $bocard->malist,
                'thuatngu' => $flashcard['tn_card'],
                'dinhnghia' => $flashcard['dn_card'],
            ]);
        }

        return redirect()->route('home')->with('success', 'Tạo FlashCard thành công!');
    }

}