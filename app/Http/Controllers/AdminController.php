<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attachefile; 
use session;
class AdminController extends Controller
{
    public function index()
    {
        return view('adminChild');
    }
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect(route('admin.login'));
    }
}
