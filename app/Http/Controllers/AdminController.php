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
    public function AdminDashboard()
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
    public function AdminProfile()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);
        // dd($profileData);
        return view('admin.admin_profile', ['profileData' => $profileData]);
    }

}
