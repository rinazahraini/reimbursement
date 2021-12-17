<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function index()
    {
        return view('user.home');
    }

    public function status()
    {
        return view('user.status');
    }

    public function indexAdmin()
    {
        return view('admin.dashboard');
    }

}