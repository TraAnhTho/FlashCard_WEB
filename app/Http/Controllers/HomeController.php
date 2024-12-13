<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\NguoiDung;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    
    public function index()
    {
        $user = Auth::user();
        $bocards = DB::table('bocard')->select('malist', 'tenlist')->get(); // Lấy danh sách bocard
        return view('pages/home', compact('user', 'bocards')); // Đường dẫn đến view 
    }
}
