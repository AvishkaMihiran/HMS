<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        // Here you could pass data to your view if needed
        return view("home");
    }

    public function redirects()
    {
    $usertype=Auth::user()->usertype;
    if($usertype=="1"){
        return view("admin.dashboard");
    }
    elseif($usertype == "2")
        return view("receptionist");

    elseif($usertype == "3")
        return view("waiter");

    elseif($usertype == "4")
        return view("cook");

    else{
        return view("dashboard");
    }
    }
}
