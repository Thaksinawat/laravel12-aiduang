<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $admins = User::where('role', 'admin')->get();
        return view('dashboard.index', compact('admins'));
    }
}
