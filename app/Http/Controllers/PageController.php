<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function home()
    {
        return view('home');
    }

    public function login()
    {
        return view('login');
    }

    public function about()
    {
        return view('about');
    }

    public function notFound()
    {
        return view('404page');
    }

    public function plans()
    {
        return view('plans');
    }

    public function showUser($id)
    {
        return "User ID: " . $id;
    }
}
