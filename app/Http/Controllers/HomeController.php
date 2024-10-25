<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Here you could pass data to your view if needed
        return view("home");
    }
}
