<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AdminController extends Controller
{
    /**
     *  Admin Dashboard
     */
    public function AdminDashboard(): View
    {
        return view('admin.index', []);
    }

    /**
     *  Admin Logout
     */
    public function AdminLogout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }

    /**
     *  Admin Login
     */
    public function AdminLogin(): View
    {
        return view('admin.admin_login');
    }

    /**
     *  Admin Profile
     */
    public function AdminProfile(): View
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);
        // dd($profileData);
        return view('admin.admin_profile', ['profileData' => $profileData]);
    }

    /**
     *  Admin Profile Store
     */
    public function AdminProfileStore(Request $request): RedirectResponse
    {
        $id = Auth::user()->id;
        $data = User::find($id);

        // dd($request);

        $data->username = $request->username;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->phone = $request->phone;
        $data->address = $request->address;

        if($request->file('photo'))
        {
            $file = $request->file('photo');
            $filename = date('YmdHi'). $file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'), $filename);
            $data['photo'] = $filename;
        }

        $data->save();

        return redirect()->back();
    }

}
