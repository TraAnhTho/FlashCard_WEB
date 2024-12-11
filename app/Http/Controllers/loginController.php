<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\NguoiDung;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class loginController extends Controller
{
    public function dangnhap()
    {
        return view('pages/login');
    }
    public function postdangnhap(Request $request)
    {
        // dd($request->input());
        
        // Xác thực đầu vào
    $validator = Validator::make($request->all(), [
        'email_login' => 'required|max:255|email',
        'pass_login' => 'required|min:8|max:255',
    ], [
        'email_login.required' => 'Bạn chưa nhập email',
        'email_login.email' => 'Email không đúng định dạng',
        'email_login.max' => 'Email không được vượt quá 255 ký tự',
        'pass_login.required' => 'Bạn chưa nhập mật khẩu',
        'pass_login.min' => 'Mật khẩu phải có ít nhất 8 ký tự',
        'pass_login.max' => 'Mật khẩu không được vượt quá 255 ký tự',
    ]);

    // Nếu có lỗi, trả lại form với thông báo lỗi
    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator)
            ->withInput();
    }

    // Kiểm tra email có tồn tại trong cơ sở dữ liệu hay không
    $user = DB::table('nguoidung')->where('email', $request->email_login)->first();

    if ($user) {
        // Nếu tồn tại, kiểm tra mật khẩu
        if (Hash::check($request->pass_login, $user->matkhaund)) {
            // Nếu mật khẩu đúng, thực hiện logic tiếp theo
            Auth::loginUsingId($user->mand); // Đăng nhập người dùng theo ID
            // return redirect('homes')->with('thongbao', 'Đăng nhập thành công!');
            return redirect()->route('home')->with('user', $user);// Điều hướng đến trang home và truyền dữ liệu người dùng
            // Truyền dữ liệu sang view
                return view('pages/home', compact('user'));
        } else {
            // Nếu mật khẩu sai
            return redirect()->back()
                ->with('error', 'Mật khẩu không chính xác.')
                ->withInput();
        }
    } else {
        // Nếu email không tồn tại
        return redirect()->back()
            ->with('error', 'Email không tồn tại.')
            ->withInput();
    }


    
    }

}