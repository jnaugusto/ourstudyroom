<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role = strtolower(Auth::user()->roles->role_name);
        return view('users.'.$role.'.dashboard', [
            'accountInfo' => Auth::user(),
            'userInfo' => Auth::user()->staffs
        ]);
    }
}
