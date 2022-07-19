<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    
    public function test()
    {
        return view('test');
    }
    
    public function login()
    {
        return view('login');
    }
    
    public function accounts()
    {
        return view('accounts');
    }
    
    public function createAccount()
    {
        return view('createaccount');
    }
    
    public function addFunds()
    {
        return view('addfunds');
    }
    
    public function withdrawFunds()
    {
        return view('withdrawfunds');
    }
    
    public function adminLogin()
    {
        return view('adminlogin');
    }
    
    public function createAdmin()
    {
        return view('createadmin');
    }
}