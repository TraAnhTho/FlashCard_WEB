<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\NguoiDung;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class folderController extends Controller
{
    public function index()    /******/
    {

        $user = Auth::user(); // Lấy thông tin người dùng hiện đang đăng nhập
        if (!$user) {
            return redirect()->route('login')->with('error', 'Bạn cần đăng nhập để xem nội dung này.');
        }

        $bocards = DB::table('bocard')
            ->where('mand', $user->mand) // Lấy các bocard thuộc về người dùng
            ->select('malist', 'tenlist')
            ->get();

        return view('pages.folder', compact('user', 'bocards'));
        
    }
    public function show($malist)
    {
        $user = Auth::user(); // Lấy thông tin người dùng hiện đang đăng nhập
        if (!$user) {
            return redirect()->route('login')->with('error', 'Bạn cần đăng nhập để xem nội dung này.');
        }

        // Kiểm tra bocard có thuộc user không
        $bocard = DB::table('bocard')
            ->where('mand', $user->mand)
            ->where('malist', $malist)
            ->first();

        if (!$bocard) {
            return redirect()->route('folder')->with('error', 'Bạn không có quyền truy cập vào bocard này.');
        }

        // Lấy các card thuộc bocard
        $cards = DB::table('card')
            ->where('malist', $malist)
            ->get();

        return view('pages.editcard', compact('user', 'cards', 'bocard'));
    }

}