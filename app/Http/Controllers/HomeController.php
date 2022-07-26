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
        return view('pages.test');
    }
    
    public function login()
    {
        return view('pages.login');
    }
    
    public function accounts()
    {
        return view('pages.accounts');
    }
    
    public function createAccount()
    {
        return view('pages.createaccount');
    }
    
    public function addFunds()
    {
        return view('pages.addfunds');
    }
    
    public function withdrawFunds()
    {
        return view('pages.withdrawfunds');
    }
    
    public function adminLogin()
    {
        return view('pages.adminlogin');
    }
    
    public function createAdmin()
    {
        return view('pages.createadmin');
    }
}