<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view("/index");
    }
    public function aboutus(){
        return view("/aboutus");
    }
    public function login(){
        return view("/login");
    }
    public function aipage(){
        return view("/ai");
    }
    public function confirm(){
        return view("/confirm");
    }
    public function signup(){
        return view("/signup");
    }
    public function subject(){
        return view("/subject");
    }
}
