<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function about()
    {
        return view('web.about');
    }

    public function contact()
    {
        return view('web.contact');
    }

    public function index()
    {
        return view('web.index');
    }

    public function rooms()
    {
        return view('web.rooms');
    }

    public function videosgallery()
    {
        return view('web.videos-gallery');
    }

    public function cottage()
    {
        return view('web.cottage-rooms');
    }

    public function woodenhut()
    {
        return view('web.wooden-rooms');
    }

    public function premiumvilla()
    {
        return view('web.private-villa-rooms');
    }

    public function single_cottage()
    {
        return view('web.single-cottage');
    }

    public function double_cottage()
    {
        return view('web.double-cottage');
    }

    public function glass_house()
    {
        return view('web.glass-house');
    }

}
