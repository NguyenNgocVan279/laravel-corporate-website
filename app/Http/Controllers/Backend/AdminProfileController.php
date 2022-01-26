<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Auth;
use Illuminate\Support\Facades\Hash;

class AdminProfileController extends Controller
{
    public function AdminProfile() {
        $adminData = Admin::find(1);
        //dd($adminData);
        return view('admin.admin_profile_view', compact('adminData'));
    }

    public function AdminProfileEdit() {
        $editData = Admin::find(1);
        return view('admin.admin_profile_edit', compact('editData'));
    }

    // Cập nhật và Lưu dữ liệu của Admin vào database (username, email, image)
    public function AdminProfileStore(Request $request) {
        $data = Admin::find(1);
        $data->name = $request->name;
        $data->email = $request->email;

        if ($request->file('profile_photo_path')) {
            $file = $request->file('profile_photo_path');
            $filename = date('YmdHi').$file->getClientOriginalName();
            @unlink(public_path('upload/admin_images/'.$data->profile_photo_path)); // Xoá ảnh cũ khi cập nhật ảnh mới
            $file->move(public_path('upload/admin_images'),$filename);
            $data['profile_photo_path'] = $filename;
        }
        $data->save();

        $notification = array (
            //Sử dụng toastr.css và toastr.min.js được đính kèm trong file "admin_master.blade.php"
            'message' => 'Admin Profile Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.profile')->with($notification);
    }

    public function AdminChangePassword() {
        return view('admin.admin_change_password');
    }

    public function AdminUpdateChangePassword(Request $request) {
        // Validate password
        $validateData = $request->validate([
            'oldpassword' => 'required',
            'password' => 'required|confirmed',
        ]);

        // Xử lý để lưu password mới
        $hashedPassword = Admin::find(1)->password;
        if (Hash::check($request->oldpassword,$hashedPassword)) {
            $admin = Admin::find(1);
            $admin->password = Hash::make($request->password);
            $admin->save();
            Auth::logout();
            /* return redirect()->route('admin.logout'); */

            $notification = array (
                'message' => 'Admin Password Updated Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('admin.logout')->with($notification);

        }else{
            $notification = array (
                'message' => 'Admin Password Updated Fail, Try Again!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    } // end method
}