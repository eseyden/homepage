<?php

namespace App\Http\Controllers;

use App\Visit;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return view('home');
    }
}
