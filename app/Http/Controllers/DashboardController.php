<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function logout() 
    {
        Auth::logout();

     request()->session()->invalidate();

     request()->session()->regenerateToken();

    return redirect('/');
    }
    function Form() 
    {
    return view('form');
    }
    function Dashboard() 
    {
    return view('dashboard');
    }
    function Table() 
    {
    return view('table');
    }
}