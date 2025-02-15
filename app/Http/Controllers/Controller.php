<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index(){
        return view('pelanggan.page.home', [
            'title' => 'home',
        ]);
    }
    public function shop(){
        return view('pelanggan.page.shop', [
            'title' => 'Shopping',
        ]);
    }
    public function transaksi(){
        return view('pelanggan.page.transaksi', [
            'title' => 'transaksi',
        ]);
    }
    public function contact(){
        return view('pelanggan.page.contact', [
            'title' => 'contact',
        ]);
    }
    public function login(){
        return view('pelanggan.page.loginpelanggan', [
            'title' => 'login',
        ]);
    }
    public function register(){
        return view('pelanggan.page.registerpelanggan', [
            'title' => 'register',
        ]);
    }
    public function checkout(){
        return view('pelanggan.page.Checkout', [
            'title' => 'Checkout',
        ]);
    }
    
    public function admindashboard(){
        return view('admin.layout.index', [
            'title' => 'Admin',
        ]);
    }
   
}
