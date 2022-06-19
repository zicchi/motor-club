<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Company;
use App\Models\Gallery;
use App\Models\Product;
use App\Models\Purpose;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('main.home');
    }

    public function profile()
    {
        $profile = Company::pluck('profile')->first();
        return view('main.profile',[
            'profile' => $profile,
        ]);
    }

    public function visionMission()
    {
        $vision = Purpose::where('type',0)->first();
        $missions = Purpose::where('type',1)->get();
        return view('main.vision-and-mission',[
            'vision' => $vision,
            'missions' => $missions
        ]);
    }

    public function product()
    {
        return view('main.product',[
            'products' => Product::all(),
        ]);
    }

    public function contact()
    {
        return view('main.contact',[
            'contact' => Company::first()
        ]);
    }

    public function client()
    {
        return view('main.client',[
            'clients' => Client::all(),
        ]);
    }

    public function gallery()
    {
        return view('main.gallery',[
            'galleries' => Gallery::all(),
        ]);
    }

    public function about()
    {
        return view('main.about-us',[
            'company' => Company::first(),
        ]);
    }
}
