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
        $accounts = [[
            'lname' => 'Noname',
            'fname' => 'Luna',
            'email' => 'Lunar@biscuit.com',
            'pnumber' => '123',
            'anumber' => '123',
            'funds' => '420.69'
        ]];
        return view('pages.accounts', ['adminAuth' => false, 'userAuth' => true, 'accounts' => $accounts]);
    }
    
    public function createAccount()
    {
        return view('pages.createaccount', ['iban' => 132]);
    }
    
    public function addFunds()
    {
        return view('pages.addfunds', ['userAuth' => false]);
    }
    
    public function withdrawFunds()
    {
        return view('pages.withdrawfunds', ['userAuth' => false]);
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