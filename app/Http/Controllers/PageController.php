<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about-us');
    }

    public function careers()
    {
        return view('pages.careers');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function news()
    {
        return view('pages.news');
    }

    public function newsContent($slug)
    {
        return view('pages.news-content', compact('slug'));
    }

    public function leadership()
    {
        return view('pages.leadership');
    }

    public function gssa()
    {
        return view('pages.gssa');
    }

    public function globalNetwork()
    {
        return view('pages.global-network');
    }

    public function privacyPolicy()
    {
        return view('pages.privacy-policy');
    }

    public function cookiePolicy()
    {
        return view('pages.cookie-policy');
    }
}
