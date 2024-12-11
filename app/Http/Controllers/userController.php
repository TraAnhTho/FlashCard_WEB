<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\NguoiDung;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


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
            'hinhanh' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = Auth::user(); // Get the authenticated user

        if ($request->hasFile('hinhanh')) {
            $imagePath = $request->file('hinhanh')->store('public/imgs'); // Save image to storage
            $user->hinhanh = $imagePath; // Save image path to the user's profile
            $user->save();
        }

        return redirect()->route('users')->with('success', 'Profile image updated successfully.');
    }

    // Handle updating user details
    public function updateUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        $user = Auth::user(); // Get the authenticated user
        $user->name = $request->name; // Update user name
        $user->email = $request->email; // Update user email
        $user->save();

        return redirect()->route('users')->with('success', 'User information updated successfully.');
    }
}