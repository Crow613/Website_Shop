<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class SiteController extends Controller
{
    public function index(): view
    {
      return view('site.index');
    }

    public function about()
    {
      return view('site.about');
    }

    public function contact()
    {
      return view('site.contact');
    }
}
