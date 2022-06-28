<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return('home.index');
    }
    public function contact()
    {
        return('home.contact');
    }
}
