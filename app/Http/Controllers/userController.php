<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\NguoiDung;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Bocard;
use App\Models\Card;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class userController extends Controller
{
    public function index()    /******/
    {
         // Lấy thông tin người dùng đang đăng nhập (nếu có)    
         $user = Auth::user();
        return view('pages/users', compact('user')); // Đường dẫn đến view của bạn
    }
    // Handle updating user image
    public function updateImg(Request $request)
    {
        $request->validate([
            'profile_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $users = Auth::user();
        $user = NguoiDung::findOrFail($users->mand);
        if ($request->hasFile('profile_image')) {
            // Xóa ảnh cũ nếu có (nếu muốn làm sạch ảnh cũ)
            if ($user->hinhanh && Storage::exists($user->hinhanh)) {
                Storage::delete($user->hinhanh);
            }
            $imagePath = $request->file('profile_image')->store('imgs'); // Save image to storage public
            $user->hinhanh = $imagePath; // Save image path to the user's profile
            try {
                $user->Save(); // Save the changes
                return redirect()->route('users')->with('success', 'Thông tin người dùng đã được cập nhật thành công.');
            } catch (Exception $e) {
                return back()->withErrors(['error' => 'Có lỗi xảy ra trong quá trình cập nhật. Vui lòng thử lại.']);
            }
        }

        return redirect()->route('users')->with('success', 'Profile image updated successfully.');
    }

    // Handle updating user details
    public function updateUser(Request $request)
    {
        $request->validate([
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'current_password' => 'required|string', // Thêm trường kiểm tra mật khẩu cũ
            'new_password' => 'nullable|string|min:8|confirmed', // Trường đổi mật khẩu mới (optional)
       
        ]);

        $users = Auth::user();
        $user = NguoiDung::findOrFail($users->mand);
        // Kiểm tra mật khẩu cũ
        if (!Hash::check($request->current_password, $user->matkhaund)) {
            return back()->withErrors(['current_password' => 'Mật khẩu hiện tại không đúng.']);
        }
        $user->update([
            'tennd' => $request->name,
            'email' => $request->email,
        ]);
        // $user->save();
            
        
        // Nếu người dùng nhập mật khẩu mới, cập nhật nó
        if (!empty($request->new_password)) {
            
            $user->matkhaund = Hash::make($request->new_password);
        }

        try {
            $user->save(); // Save the changes
            return redirect()->route('users')->with('success', 'Thông tin người dùng đã được cập nhật thành công.');
        } catch (Exception $e) {
            Log::error('Error updating user: ' . $e->getMessage());

            return back()->withErrors(['error' => 'Có lỗi xảy ra trong quá trình cập nhật. Vui lòng thử lại.']);
        }
    }
}