<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user(); // Lấy thông tin người dùng đã đăng nhập
        return view('front.profile.index', compact('user'));
    }

    public function updateForm()
    {
        $user = Auth::user(); // Lấy thông tin người dùng đã đăng nhập
        return view('front.profile.update', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user(); // Lấy thông tin người dùng đã đăng nhập

        // Cập nhật thông tin cá nhân dựa trên dữ liệu gửi từ form
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->company_name = $request->input('company_name');
        $user->gender = $request->input('gender');
        $user->country = $request->input('country');
        
        $user->phone = $request->input('phone');
        $user->street_address = $request->input('street_address');
        $user->postcode_zip = $request->input('postcode_zip');
        $user->town_city = $request->input('town_city');
        // Thêm các trường thông tin khác cần cập nhật

        // Lưu thông tin đã cập nhật vào cơ sở dữ liệu
        $user->save();

        return redirect()->route('profile.index')->with('notification', 'Profile updated successfully.');
    }

    public function resetForm()
    {
        return view('front.profile.reset');
    }

    
    public function resetPassword(Request $request)
    {
        $user = Auth::user();
        
        $currentPassword = $request->input('current_password');
        $newPassword = $request->input('new_password');
        $confirmPassword = $request->input('confirm_password');
    
        if (!Hash::check($currentPassword, $user->password)) {
            return back()->with('notification', 'Current password is not correct.');
        }
    
        if ($newPassword !== $confirmPassword) {
            return back()->with('notification', 'New password and confirm password do not match.');
        }
    
        $user->update([
            'password' => Hash::make($newPassword),
        ]);
    
        return redirect()->route('profile.index')->with('notification', 'Password changed successfully.');
    }
    
}
