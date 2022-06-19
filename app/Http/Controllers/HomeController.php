<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('main.home');
    }

    public function profile()
    {
        return view('main.profile');
    }

    public function visionMission()
    {
        return view('main.vision-and-mission');
    }

    public function product()
    {
        return view('main.product');
    }

    public function contact()
    {
        return view('main.contact');
    }

    public function client()
    {
        return view('main.client');
    }

    public function gallery()
    {
        return view('main.gallery');
    }

    public function article()
    {
        return view('main.article');
    }

    public function about()
    {
        return view('main.about-us');
    }
}
