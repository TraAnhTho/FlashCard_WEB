<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\NguoiDung;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class registerController extends Controller
{
    public function dangki()
    {
        return view('pages/register');
    }
    public function postdangki(Request $request)
    {
         // Xác thực dữ liệu đầu vào
        $validator = Validator::make($request->all(), [
            'birthday_reg' => 'required|date',
            'email_reg' => 'required|email|unique:nguoidung,email', // Sửa bảng thành nguoidung
            'name_reg' => 'required|min:3|max:255',
            'pass_reg' => 'required|min:8|confirmed', // Yêu cầu xác nhận mật khẩu
        ]);

        // Nếu dữ liệu không hợp lệ, quay lại trang đăng ký với thông báo lỗi
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Tạo mới người dùng
        $user = NguoiDung::create([
            'tennd' => $request->input('name_reg'),
            'email' => $request->input('email_reg'),
            'ngaysinh' => $request->input('birthday_reg'),
            'matkhaund' => Hash::make($request->input('pass_reg')), // Mã hóa mật khẩu
            'hinhanh' => null,
        ]);

        // Đăng nhập ngay sau khi đăng ký thành công
        // auth()->login($user);

        // Chuyển hướng đến trang chủ hoặc một trang khác
        // return redirect()->route('home')->with('thongbao', 'Đăng ký thành công!');
        return redirect()->route('home')->with('user', $user);

    }

}