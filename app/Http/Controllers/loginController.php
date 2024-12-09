<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function dangnhap()
    {
        return view('pages/login');
    }
    public function postdangnhap(Request $request)
    {
        // dd($request->input());
        // $remember = isset($request->remember_login) ? true : false;
        $this->validate($request, [
             'email_login' => 'required|max:255|email:filter',
             'password' => 'required|min:6|max:255',
         ],
         [
             'email_login.required' => 'Bạn chưa nhập email',
             'email_login.email' => 'Bạn chưa nhập đúng định dạng email',
             'email_login.max' => 'Email không được quá 255 ký tự',
             'password.required' => 'Bạn chưa nhập mật khẩu',
             'password.min' => 'Mật khẩu không được nhỏ hơn 6 ký tự',
             'password.max' => 'Mật khẩu không được lớn hơn 255 ký tự',
         ]);


         if (Auth::attempt(['email' => $request->email_login,
          'password' => $request->pass_login], $request->remember_login
          ))
         {
            
            
             return redirect('pages/homes')->with('thongbao', 'Đăng nhập thành công.');
         }
         else
         {
             return redirect('/dangnhap')->with('thongbao', 'Đăng nhập không thành công.');
         }


    
    }

}