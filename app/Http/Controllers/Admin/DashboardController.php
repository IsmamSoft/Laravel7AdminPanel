<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    function index(){
        return view('admin.dashboard');
    }

    function customers(){
        return view('admin.customer.customer');
    }

    function customers_new(){
        return view('admin.customer.new');
    }
}
