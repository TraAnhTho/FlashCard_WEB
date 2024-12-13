<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\NguoiDung;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class adminController extends Controller
{
    public function index()
    {
        return view('pages/admin');
    }
    
    public function postadmin(Request $request)
    {
        // dd($request->input());
        
        // Xác thực đầu vào
    $validator = Validator::make($request->all(), [
        'tenadmin' => 'required|max:255',
        'mkadmin' => 'required|min:8|max:255',
   
    ]);

    // Nếu có lỗi, trả lại form với thông báo lỗi
    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator)
            ->withInput();
    }

    // Kiểm tra email có tồn tại trong cơ sở dữ liệu hay không
    $admin = DB::table('admin')->where('tenad', $request->tenadmin)->first();// first là

    if ($admin) {
        // Nếu tồn tại, kiểm tra mật khẩu
        if (Hash::check($request->mkadmin, $admin->matkhauad)) {
            return route('adminedit')
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
    public function store()
    {
    $users = NguoiDung::all(); // Lấy tất cả người dùng từ database
        return view('pages/adminedit', compact('users'));
    }

    // Trang chỉnh sửa người dùng
    public function editUser($mand)
    {
        $user = NguoiDung::findOrFail($mand); // Lấy người dùng theo ID
        return view('pages/adminedit', compact('user'));
    }

    // Cập nhật người dùng
    public function updateUserByAdmin(Request $request, $mand)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'nullable|string|min:8|confirmed', // Mật khẩu không bắt buộc
        ]);

        $user = NguoiDung::findOrFail($mand);
        $user->tennd = $request->name;
        $user->email = $request->email;

        if (!empty($request->password)) {
            $user->matkhaund = Hash::make($request->password);
        }

        try {
            $user->save();
            // return redirect()->route('admin.users')->with('success', 'Người dùng đã được cập nhật.');
        } catch (Exception $e) {
            Log::error('Error updating user: ' . $e->getMessage());
            return back()->withErrors(['error' => 'Có lỗi xảy ra khi cập nhật.']);
        }
    }

    // Xóa người dùng
    public function deleteUser($mand)
    {
        $user = NguoiDung::findOrFail($mand);

        try {
            $user->delete();
            // return redirect()->route('admin.users')->with('success', 'Người dùng đã được xóa.');
        } catch (Exception $e) {
            Log::error('Error deleting user: ' . $e->getMessage());
            return back()->withErrors(['error' => 'Có lỗi xảy ra khi xóa.']);
        }
    }
}