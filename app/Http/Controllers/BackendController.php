<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Session;
// use Session;

class BackendController extends Controller
{
    public function index()
    {
        return view('backend.dashboard.index');
    }
    public function perform()
    {
        Session::flush();
        
        Auth::logout();

        return redirect('login');
    }
}
